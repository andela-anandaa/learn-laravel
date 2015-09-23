<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Support\Facades\View;

use Log;

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
		Log::info('Loading basic template');
		return view('test.temp_');
	}
}