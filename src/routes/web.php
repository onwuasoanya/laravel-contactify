<?php
use \Illuminate\Http\Request;


$contactify_url = "contactify";

Route::get("$contactify_url", "ContactifyController@embed");

Route::post('/postContact', "ContactifyController@postContact")->name("contactify_post");

?>