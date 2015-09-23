<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
// use Illuminate\Support\Facades\View;

use Log;

class TestController extends Controller
{
	
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