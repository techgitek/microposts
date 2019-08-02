<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OkiniiriController extends Controller
{
    public function store(Request $request, $id)
    {
        \Auth::user()->okiniiri($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::user()->unokiniiri($id);
        return back();
    }
}