<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'msg' => $request->hello,
        ];
        return view('hello.index', $data);
    }

    public function other(Request $request)
    {
        $data = [
            'msg' => $request->bye,
        ];
        return view('hello.index', $data);
    }

    public function person($person)
    {
        $data = [
            'msg' => $person,
        ];
        return view('hello.index', $data);
    }
}
