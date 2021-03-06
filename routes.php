<?php 

include "./vendor/Router.php";



/**
 * -----------------------------------------------
 * PHP Route Things
 * -----------------------------------------------
 */

//define your route. This is main page route. for example www.example.com
Route::add('/', function(){

    //define which page you want to display while user hit main page. 
    include('myindex.php');
});


// route for www.example.com/join
Route::add('/join', function(){
    include('/join.php');
});


Route::add('/login', function(){
    include('./login.php');
   
});

Route::add('/forget', function(){
    include('forget.php');
});



Route::add('/logout', function(){
    include('logout.php');
});

Route::add('/users/user', function(){
    include('user.php');
});

Route::add('/notFound', function(){
    include('notFound.php');
});





//method for execution routes    
Route::submit();