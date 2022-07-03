<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'mobile_number' => 'required|max:255',
            'weight' => 'required|max:255|gt:0',
            'perfume' => 'required|max:255',
            'service' => 'required|max:255',
        ]);
        Form::create($validatedData);

        return redirect('/shipping');
    }

    
}
