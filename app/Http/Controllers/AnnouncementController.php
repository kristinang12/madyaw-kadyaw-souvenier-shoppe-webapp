<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\Announcement;
use Illuminate\Support\Facades\DB;

class AnnouncementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function acreate()
    {
        return view('announcement.acreate');
    }
    public function alist()
    {
        $data = Announcement::all();
        return view('alist', compact('data'));
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
        // $fileName = time().$request->file('photo');
        //$path = $request->file('photo')->storeAs('images', $fileName, 'public');
        //$request["photo"] = '/storage/'.$path;
        //Announcement::create([
        //    'header'=>$request->header,
        //    'sub_header'=>$request->sub_header,
          //  'description'=>$request->description,
          //  'photo'=>$request->photo,
          //  'user_id'=>$request->user_id,

        //]);
      

     


       $announcement = new Announcement;
        $announcement->header = $request->header;
       $announcement->sub_header = $request->sub_header;
       $announcement->description = $request->description;
        $announcement->photo = $request->photo;
       $announcement->user_id = $request->user_id;
       $announcement->save();

        return redirect('/create-announcement')->with('message', 'Announcement Added Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
