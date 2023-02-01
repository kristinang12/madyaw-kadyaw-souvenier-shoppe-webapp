<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    
    public function index()
    {
        
        $data = Announcement::all();
        return view('announcement.index', compact('data'));
    }

    public function create()
    {
        return view('announcement.create');
    }

    public function store(AnnouncementRequest $request){

        $request->validated([
            'header'=>'required',
            'sub_header'=>'required',
            'description'=>'required',
            'photo'=>'required',
            'user_id'=>'required',
        ]);


        $announcement = new Announcement;
        $announcement->header = $request->header;
        $announcement->sub_header = $request->sub_header;
        $announcement->description = $request->description;
        $announcement->photo = $request->photo;
        $announcement->user_id = $request->user_id;
        $announcement->save();
        return redirect('/create-announcement')->with('message', 'Announcement Added Successfully');

    }

    public function show($id)
    {
    
        $users = DB::select('select * from users');
 
        foreach ($users as $user) {
        echo $user->name;
}
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $announcements = Announcement::find($id);

        $announcements->update($request->all());

        session()->flash('status', 'Announcement Updated');
        return redirect('dashboard/announcement');
    }
    public function delete($id)
    {
        $announcements = Announcement::find($id);
        return view('dashboard.announcement.delete', [

            'announcement' => $announcements,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $announcements = Announcement::findOrFail($id);
        $announcements->delete();

        return redirect('dashboard/announcement');
    }
}
