<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\ViewErrorBag;

class UserController extends Controller
{

    // data show 

    /* function getUser(){
        // return "Hello, uesr";
        $response = Http::get('https://jsonplaceholder.typicode.com/users/1');
        return $response; // SSL error
    } */

    /*  function quaries(){
        // $result = DB::table('users')->get();
        $result = DB::table('users')->where('name', 'abhishek')->get();
        // return $result;
        return view('users', ['users'=> $result]);
    } */



    // data insert 

    /* function quaries(){
        $result = DB::table('users')->insert([
            'name'=> 'rohan',
            'email'=> 'rohan@gmail.com',
            'password'=> '123',
        ]);
        if($result){
            echo "Data inserted";
        }else{
            echo "Data not inserted";
        }
    } */



    // data update 

    /* function quaries(){
        $result = DB::table('users')->where('email', 'shivam#gmail.com')->update([
            'name'=>'sumit',
            'email'=> 'sumit@gmail.com',
        ]);
        if($result){
            echo "Data updated";
        }else{
            echo "Data not updated";
        }
    } */




    // delete data 

    /* function quaries(){
        $result = DB::table('users')->where('email', 'sumit@gmail.com')->delete();
        if($result){
            echo "Data deleted";
        }else{
            echo "Data not deleted";
        }
    } */




    // Eloquent Model 
    // When we user query builder with model so we called it eloquent model query builder.

    /* function quaries(){
        // $response = User::get();
        $response = User::all();
        // $response = User::find(1);
        // return $response;
        return view('users', ['users'=> $response]);
    } */

    /* function quaries(){
        $response = User::insert([
            'name'=>'Shinchan',
            'email'=>'shinchan#gmail.com',
            'password'=>'123'
        ]);
    } */



    /* function quaries()
    {
        $response = User::where('email', 'shinchan#gmail.com')->update([
            'email' => 'shinchan@gmail.com',
        ]);
    } */



    function quaries()
    {
        $response = User::where('email', 'rohan@gmail.com')->delete();
    }


    // session 
    function login(Request $request){
        // return "login";
        $request->session()->put('user', $request->input('name'));
        $request->session()->put('alldata', $request->input());
        return redirect('profile');
    }

    // session 
    function logout(){
        session()->pull('user');
        return View('login');
    }


    // flash 
    function addUser(Request $request){
        $request->session()->flash('message', 'User has been added successfuly');
        $request->session()->flash('user', $request->input('name'));
        return redirect('welcome');
    }
}
