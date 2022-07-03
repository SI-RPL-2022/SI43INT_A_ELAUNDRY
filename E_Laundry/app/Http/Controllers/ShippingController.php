<?php

namespace App\Http\Controllers;

use App\Models\Shipping;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'delivery' => 'required|max:255',
            'address' => 'required|max:255',
            'street' => 'required|max:255',
            'post_code' => 'required|max:255',
            
        ]);
        Shipping::create($validatedData);

        return redirect('/payment');
    }
}
