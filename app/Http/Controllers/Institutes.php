<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\Institure; 
class Institutes extends Controller
{
    public function register(Request $request)
    {
        $institute = new Institure();
        $institute->name = $request->input('name');
        $institute->location = $request->input('location');

        $institute->save();
        return response()->json($institute);
    }
}
