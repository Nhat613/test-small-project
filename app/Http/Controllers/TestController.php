<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreRequest;

class TestController extends Controller
{
    public function index()
    {
        $data = DB::table('laravel')->get();
        // dd($data);
        return view('test.index', ['data' => $data]);
    }
    public function create()
    {
        return view('test.create');
    }

    public function store(StoreRequest $request)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();
        // $data['date_trip'] = new \DateTime();

        DB::table('laravel')->insert($data);

        return redirect()->route('index')->with('message', 'Create Successfully');
    }

    public function edit($id)
    {
        // dd($id);
        $data = DB::table('laravel')->where('id', $id)->first();
        // dd($data);
        return view('test.edit', ['data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
        // dd($data);
        $data['created_at'] = new \DateTime();
        DB::table('laravel')->where('id', $id)->update($data);

        return redirect()->route('index')->with('success', "Update Successfully!");
    }

    public function delete($id)
    {
        DB::table('laravel')->where('id', $id)->delete();
        return redirect()->route('index')->with('success', "Delete Successfully!");
    }
}
