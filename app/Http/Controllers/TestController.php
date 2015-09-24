<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use Illuminate\Http\Request;
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

	public function req(Request $request)
	{
		if ($request->isMethod('post')) {
			$res = $request->input();
			$res['path'] = $request->path();
			$res['url'] = $request->url();
			$res['verb'] = $request->method();
			$res['all'] = $request->all();
			$res['all_except'] = $request->except(['_token']);
			// return response()->json($res);
			var_dump($res);

			if ($request->has('first_name')) {
				var_dump(array('has' => 'First Name'));
			}
		}

		if ($request->isMethod('get')) {
			var_dump(array('post' => 'nothing'));
		}
	}

	public function route($id)
	{
		return response()->json(["id" => $id]);
	}
}