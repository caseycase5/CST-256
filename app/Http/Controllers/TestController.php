<?php
namespace App\Http\Controllers;


class TestController extends Controller
{
  public function test() {
  	echo "Hello World from Test Controller";
  }
  
  public function test2() {
  	return view('helloworld');
  }
}