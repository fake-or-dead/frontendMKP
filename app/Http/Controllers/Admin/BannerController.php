<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Admin\BannerRequest;
use App\Http\Controllers\Controller;
use View;

class BannerController extends Controller
{
    /**
    * DateCreate 2016-01-25
    * Create By golf
    */

    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        return View::make('\admin.banner.index') ;
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
    * @param  App\Http\Requests\Admin\BannerRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(BannerRequest $request)
    {
        //
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(int $id)
    {
        //
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(int $id)
    {
        //
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  App\Http\Requests\Admin\BannerRequest  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(BannerRequest $request, int $id)
    {
        //
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy(int $id)
    {
        //
    }
}