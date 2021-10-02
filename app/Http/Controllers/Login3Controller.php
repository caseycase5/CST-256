<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Business\OrderService;

class Login3Controller extends Controller {
	public function index(Request $request) {
		$firstName = $request->input('firstName');
		$lastName = $request->input('lastName');
		$product = $request->input('product');
		$this->validateForm($request);
		
		$service = new OrderService();
		$service->createOrder($firstName, $lastName, $product);
		
		$data = ['firstName' => $firstName, 'lastName' => $lastName, 'product' => $product];
		return view("loginpassed2")->with($data);


	}
	
	private function validateForm(Request $request) {
		// Setup Validation Rules
		$rules = ['firstName'=>'Required | Between:4,10|Alpha', 'lastName'=>'Required | Between:4,10'];
		$this->validate($request, $rules);
	}
}