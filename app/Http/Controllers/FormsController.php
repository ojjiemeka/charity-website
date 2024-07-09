<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function donate(Request $request)
    {
        // $validatedData = $request->validate([
        //     'amount' => 'required',
        //     'desc' => 'required',
        //     // Add validation rules for other fields
        // ]);

        $data = $request->all();

        // dd($data);

        return view('pages.payment', [
            'data' => $data
        ]);

    }
}
