<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\Announcement;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('announcement.create');
    }
    public function list()
    {
        $announcements = Announcement::all();
        return view('announcement.list', compact('announcements'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        return redirect('/add-announcement')->with('message', 'Announcement Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
