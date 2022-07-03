<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function store(Request $request) {
        $validatedData = $request->validate([
            'name_on_card' => 'required|max:255',
            'card_number' => 'required|max:255',
            'expiring_date' => 'required|max:255',
            'cvc' => 'required|max:255',
            
        ]);

        Payment::create($validatedData);

        return redirect('/order');
    }
}
