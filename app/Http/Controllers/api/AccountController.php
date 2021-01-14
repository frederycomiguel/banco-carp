<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Account::all();
    }


    public function create()
    {

    }


    public function store(Request $request)
    {
        Account::create($request->all());
    }


    public function show($id)
    {
        return Account::findOrFail($id);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $account = Account::findOrFail($id);
        $account->update($request->all());
    }


    public function destroy($id)
    {
        $account = Account::findOrFail($id);
        $account->delete();
    }
}
