<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
<<<<<<< HEAD

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Admin\Banner;
use App\Model\Admin\Location;
use View,Config;
=======
use App\Http\Requests;
use App\Http\Requests\Admin\BannerRequest;
use App\Http\Controllers\Controller;
use View;
>>>>>>> ShopOfTheWeek

class BannerController extends Controller
{
    /**
<<<<<<< HEAD
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::with('subBanners.pageContents')->with('pageContents')->first();
        return view('admin.banner.index', [
            'banner' => $banner
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
=======
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
>>>>>>> ShopOfTheWeek
    public function create()
    {
        //
    }

    /**
<<<<<<< HEAD
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
=======
    * Store a newly created resource in storage.
    *
    * @param  App\Http\Requests\Admin\BannerRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(BannerRequest $request)
>>>>>>> ShopOfTheWeek
    {
        //
    }

    /**
<<<<<<< HEAD
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
=======
    * Display the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function show(int $id)
>>>>>>> ShopOfTheWeek
    {
        //
    }

    /**
<<<<<<< HEAD
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
=======
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function edit(int $id)
>>>>>>> ShopOfTheWeek
    {
        //
    }

    /**
<<<<<<< HEAD
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
=======
    * Update the specified resource in storage.
    *
    * @param  App\Http\Requests\Admin\BannerRequest  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(BannerRequest $request, int $id)
>>>>>>> ShopOfTheWeek
    {
        //
    }

    /**
<<<<<<< HEAD
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
=======
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
>>>>>>> ShopOfTheWeek
