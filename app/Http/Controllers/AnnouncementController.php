<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\Announcement;



class AnnouncementController extends Controller
{
    public function announcementlist(){

        $data = Announcement::all();
        return view('announcement.announcementlist', compact('data'));

    }
    public function create(){

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
        return redirect('/add-announcement')->with('message', 'Announcement Added Successfully');

    }
    public function edit($id)
    {
        $data = Announcement::find($id);

        return view('announcement.edit', compact('data'));
  
    }

    public function update(AnnouncementRequest $request, $id)
    {
        
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

        $data = Announcement::find($id);

        $data->update([
            

            'header'=>$request->header,
            'sub_header'=>$request->sub_header,
            'description'=>$request->description,
            'photo'=>$request->photo,
            'user_id'=>$request->user_id,

        ]);

        return redirect('edit-announcement/'.$data->id)->with('message', 'Announcement Update Successfully');

    }

    public function destroy($id)
    {
        $data = Announcement::find($id)->delete();
        return redirect('list-announcement')->with('message', 'Announcement Delete Successfully');
    }
}