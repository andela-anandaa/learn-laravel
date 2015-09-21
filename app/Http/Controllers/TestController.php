<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Support\Facades\View;

class TestController extends BaseController {
	
	public function index()
	{
		$data = [
			"name" => "Laravel",
			"location" => "Laraland"
		];
		return view('test.index', $data);
	}

	public function temp()
	{
		return view('test.temp_');
	}
}