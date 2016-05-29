<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\CounterTransaksi;

class CounterTransaksiController extends Controller
{
    public function __construct()
    {
    	//FIXME: Enable this
    	//$this->middleware('auth');
    }

    public function index()
    {
    	$this->show();
    }

    public function store(Request $request)
    {
    	$this->customValidate($request);

    	$data = $request->all();
    	CounterTransaksi::create ($data);

    	//FIXME: Use this or return to another view
    	return redirect()->back();
    }

    public function create()
    {
    	//Put view here
    }

    // $id is used to determine which record will be changed
    public function update(Request $request, $id)
    {
    	$this->customValidate($request);

    	$data = CounterTransaksi::find($id);
    	$data->update($request->all());

    	//FIXME: Use this or return to another view
    	return redirect()->back();
    }

    public function show()
    {
    	//Put view here
    }

    public function destroy($id)
    {
    	$data = CounterTransaksi::find($id);
    	$data->delete();

    	//FIXME: Use this or return to another view
    	return redirect()->back();
    }

    public function edit()
    {
    	//Put view here
    }

    private function customValidate (Request $request)
    {
    	$this->validate ($request, [
    		'id_counter' => 'required',
    	]);
    }
}
