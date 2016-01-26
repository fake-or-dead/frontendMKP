<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\Admin\ShopOfTheWeekRequest;
use App\Http\Controllers\Controller;
use App\Model\Admin\ShopOfTheWeek;
use View,Config;

class ShopOfTheWeekController extends Controller
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
    public function index(Request $request)
    {
      if ($request->has('q'))
      {
        $search                 = e($request->input('q')) ;
        $setData['data']        = ShopOfTheWeek::orWhere('id', 'LIKE', '%'.$search.'%')
                                  ->orWhere('group_name', 'LIKE', '%'.$search.'%')
                                  ->orderBy('id', 'desc')
                                  ->paginate(Config::get('admin.defultRecord'));

        $setData['pagination']  = $setData['data']->appends(['q' => $request->input('q')])->links() ;
        $setData['search']      = $request->input('q') ;
      }
      else
      {
        $setData['data']        = ShopOfTheWeek::with('user')->orderBy('id' , 'desc')
                                  ->paginate(Config::get('admin.defultRecord'));

        $setData['pagination']  = $setData['data']->links() ;
      }
      return View::make('admin.shopoftheweek.index', $setData) ;
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
      $setData['actionLink']  = action('Admin\ShopOfTheWeekController@store') ;
      $setData['action']      = 'create' ;
      $setData['data']        = [];
      return View::make('admin.shopoftheweek.add_edit', $setData) ;
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  App\Http\Requests\Admin\ShopOfTheWeekRequest  $request
    * @return \Illuminate\Http\Response
    */
    public function store(ShopOfTheWeekRequest $request)
    {
      d($_POST) ;
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
    * @param  App\Http\Requests\Admin\ShopOfTheWeekRequest  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(ShopOfTheWeekRequest $request, int $id)
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
