<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Purchase;
use App\Http\Requests;

class PurchaseController extends Controller
{
    public function index()
    {
      $purchases = Purchase::get();

      return view('welcome', compact('purchases'));
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'description' => 'required',
        'cost' => 'required|integer',
        'merchant' => 'required',
        'purchase_date' => 'required|date',
      ]);

      $purchase = new Purchase($request->all());
      $purchase->save();

      return redirect('/');
    }
}
