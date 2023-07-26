<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersActionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function dashboard(){
        return view('users.dashboard');
    }

    public function users(){

        return view('users.users', ['usersList' => User::all()]);
    }

    public function createUserForm(){

        return view('users.create');
    }

    public function createUserFormPost(Request $request){

        // dd($request->all());

        $user = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>['required', 'email', Rule::unique('users','email')],
            'password'=>'required|min:6'
        ]);

        $user['password'] = bcrypt($user['password']);

        User::create($user);

        return redirect()->back()->with('success', 'User successfully created');
    }

    public function tasks(){
        return view('tasks.tasks');
    }
}
