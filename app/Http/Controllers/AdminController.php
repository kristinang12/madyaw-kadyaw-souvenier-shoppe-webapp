<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;




class AdminController extends Controller
{

    public function list()
    {
        
        $users = User::all();
        return view('admin.list', compact('users'));
    }

    public function create()
    {
        return view('admin.create');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=> Hash::make($request->password),

        ]);

        return redirect('/create-user')->with('message', 'User Added Successfully');

    }

    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.edit', compact('user'));
  
    }

    public function update(Request $request, $id)
    {
        // For Validation
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255']
        ]);

        $user = User::find($id);

        $user->update($request->all());

        session()->flash('status', 'Updated User Successfully!');

        return redirect('edit-user/'.$user->id);

    }

    /** 
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id)->delete();
        return redirect('list')->with('message', 'User Delete Successfully');
    }
}
