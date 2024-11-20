<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return 'userindex';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return 'usercreate';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return 'userstore';
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return 'usersshow';
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'usersedit';
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return 'usersupdate';
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return 'usersdestroy';
        //
    }
}
