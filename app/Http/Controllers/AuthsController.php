<?php

namespace App\Http\Controllers;

use App\User;
use App\Mail\welcome;
use Illuminate\Http\Request;

class AuthsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('user.login');
    }

    public function session()
    {
        if (auth()->attempt(request(['email', 'password'])));
        {
            session()->flash('message', 'Welcome back..');
            return redirect('/');
        }

        return redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        return view('user.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate(request(),[
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name'     => request('name'),
            'email'    => request('email'),
            'password' => \Hash::make(request('password')) 
        ]);

        session()->flash('message', 'You have registered successfully');

        auth()->login($user);

        return redirect()->home();
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
    public function destroy()
    {
        auth()->logout();

        return redirect('/login');
    }
}
