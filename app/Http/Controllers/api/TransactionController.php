<?php

namespace App\Http\Controllers\api;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function index()
    {
        return Transaction::all();
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        Transaction::create($request->all());
    }


    public function show($id)
    {
        return Transaction::findOrFail($id);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->update($request->all());
    }


    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();
    }
}
