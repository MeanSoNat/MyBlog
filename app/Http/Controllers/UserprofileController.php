<?php

namespace App\Http\Controllers;

use App\Models\userprofile;
use App\Http\Requests\StoreuserprofileRequest;
use App\Http\Requests\UpdateuserprofileRequest;

class UserprofileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreuserprofileRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreuserprofileRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\userprofile  $userprofile
     * @return \Illuminate\Http\Response
     */
    public function show(userprofile $userprofile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\userprofile  $userprofile
     * @return \Illuminate\Http\Response
     */
    public function edit(userprofile $userprofile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateuserprofileRequest  $request
     * @param  \App\Models\userprofile  $userprofile
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateuserprofileRequest $request, userprofile $userprofile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\userprofile  $userprofile
     * @return \Illuminate\Http\Response
     */
    public function destroy(userprofile $userprofile)
    {
        //
    }
}
