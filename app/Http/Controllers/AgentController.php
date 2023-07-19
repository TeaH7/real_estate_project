<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\AgentRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AgentController extends Controller
{

    //load index view for showing all users
    public function index(Request $request)
    {
        $query = User::query();
        if($request->get('searchName')){
            $query->where('role_id', 2)->where('first_name','LIKE',"%".$request->get('searchName')."%")
            ->orWhere('last_name', 'LIKE', "%".$request->get('searchName')."%");
        }
        
            $users = $query->where('role_id', 2)->paginate(20);
            return view("admin.agents.index", ['users' => $users]);
  
       

       
    }

    //show specific user
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('admin.agents.show', ['user' => $user]);
    }

    //show create user view
    public function create()
    {
        return view('admin.agents.create');
    }


    //save new user
    public function store(AgentRequest $request)
    {
        $incomingData = $request->validated();

        if ($request->hasFile('image')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            $file = $incomingData['image'];
            //* Set a variable for the name of the file in the request
            $fileNameImage =  Str::random() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImage);
            $incomingData['image'] = $pathLink;
        }


        $newUser = User::create([
            'first_name' => $incomingData['first_name'],
            'last_name' => $incomingData['last_name'],
            'username' => $incomingData['username'],
            'email' => $incomingData['email'],
            'phone' => $incomingData['phone'],
            'password' => Hash::make($incomingData['password']),
            'description' => $request->input('description'),
            'role_id' => 2,
            'image' => $request->input('image'),
            'icon1' => $request->input('icon1'),
            'icon2' => $request->input('icon2'),
        ]);


        return redirect()->route('agents.index')->with('success', 'User Created!');
    }




    //load edit view
    public function edit($id)
    {
        $user = User::find($id);

        return view('admin.agents.update', ['user' => $user]);
    }

    //update user data
    public function update(Request $request, $id)
    {
        $updateUser = User::find($id);
        $incomingData = $request->validate([
            'first_name' => 'required|min:2|max:50',
            'last_name' => 'required|min:2|max:50',
            'username' => 'required|min:4|max:50|unique:users,username,' . $id,
            'email' => 'required|min:5|max:50|unique:users,email,' . $id,
            'phone' => 'required|min:5|max:50',
            'password' => 'required|min:6|max:25|confirmed',
            'image' => 'image|mimes:jpeg,png,jpg,gif',
        ]);

        if ($request->hasFile('image')) {
            $year = date('Y');
            $month = date('M');
            $day = date('j');

            //* Check if a directory exists else create it.
            if (!Storage::directories('uploads/' . $year . '/' . $month . '/' . $day)) {
                Storage::makeDirectory('uploads/' . $year . '/' . $month . '/' . $day);
            }

            $file = $incomingData['image'];
            //* Set a variable for the name of the file in the request
            $fileNameImage =  Str::random() . $file->getClientOriginalName();
            //* Set a variable for the path of the file in the request
            $pathLink = $file->storeAs('uploads/' . $year . '/' . $month . '/' . $day, $fileNameImage);
            $incomingData['image'] = $pathLink;
        }

        $updateUser->update([
            'first_name' => $incomingData['first_name'],
            'last_name' => $incomingData['last_name'],
            'username' => $incomingData['username'],
            'email' => $incomingData['email'],
            'phone' => $incomingData['phone'],
            'password' => Hash::make($incomingData['password']),
            'description' => $request->input('description'),
            'image' => $incomingData['image'],
            'icon1' => $request->input('icon1'),
            'icon2' => $request->input('icon2'),
        ]);
        return redirect()->route('agents.index')->with('success', 'User updated!');
    }

    //delete user
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('agents.index')->with('success', 'User deleted!');
    }

    
}
