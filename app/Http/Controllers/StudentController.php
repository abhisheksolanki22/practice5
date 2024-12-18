<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class StudentController extends Controller
{
    function get(){
        echo "GET Request";
    }
    
    function post(){
        echo "POST Request";
    }
    
    function put(){
        echo "PUT Request";
    }
    
    function delete(){
        echo "DELETE Request";
    }

    // any 
    function any(){
        echo "any function";
    }
    
    function group1(){
        echo "group1 function";
    }
    
    function group2(){
        echo "group2 function";
    }


    // Http request class 

    function login(Request $request){
/*         echo "Request method is ". $request->method();
        echo "<br>";
        echo "Request path is ". $request->path();
        echo "<br>";
        echo "Request url is ". $request->uri();
        echo "<br>";
        echo "Request url is ". $request->url();
        echo "<br>";
        print_r($request->input());
        echo "<br>";
        print_r($request->input('name'));
        echo "<br>";
        print_r($request->collect()); */

        /* if($request->isMethod('post')){
            echo "execute code for post request";
        }else{
            echo "execute code for other request";
        } */
        
        if($request->is('studentdata')){
            echo "execute code for user path";
        }else{
            echo "execute code for other path";
        }

        echo "<br>";

        echo $request->ip();
    }
}
