<?php

namespace App\Http\Controllers;

// jobsheet 2 praktikum 2

use Illuminate\Http\Request; 

class WelcomeController extends Controller
{
public function hello(){
return('Hello World');
}
// jobsheet 2 praktikum 3
// public function greeting(){
// return view('blog.hello', ['name' => 'Andi']);
// }

public function greeting(){
return view('blog.hello')
->with('name','Andi')
->with('occupation','Astronaut');
}

}