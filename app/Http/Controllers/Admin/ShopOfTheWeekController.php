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
        $setData['data']        = ShopOfTheWeek::with('user')->orWhere('id', 'LIKE', '%'.$search.'%')
                                  ->orWhere('name', 'LIKE', '%'.$search.'%')
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
      $nameImage                  = 'ShopOfTheWeek-'.date('YmdHis').'.'.$request->file('imageupload')->guessExtension() ;

      $request->file('imageupload')->move(Config('admin.upload.admin.path'), $nameImage);

      $dataInsert                 = $request->except(['_token','imageupload']) ;
      $dataInsert['user_id']      = $request->session()->get('backoffice')['id'] ;
      $dataInsert['image_url']    = $nameImage ;

      ShopOfTheWeek::create(beforeSql($dataInsert));
      return redirect()->action('Admin\ShopOfTheWeekController@index');
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
      $setData['data']                = ShopOfTheWeek::where('id', $id)->first() ;
      $setData['actionLink']          = action('Admin\ShopOfTheWeekController@update',['id'=>$id]) ;

      if ($setData['data'])
      {
        $setData['action']            = 'edit' ;
        return View::make('admin.shopoftheweek.add_edit', $setData) ;
      }
      else
      {
        return abort(404);
      }
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
      // if()
      // {

      // }

      $dataUpdate                 = $request->except(['_token','imageupload','_method']) ;
      // $dataUpdate['image_url']    = $nameImage ;

      // ShopOfTheWeek::where('id', $id)->update(beforeSql($dataUpdate));

      ShopOfTheWeek::where('id', $id)->save();

      d(232) ;








      // return redirect()->action('Admin\ShopOfTheWeekController@index');


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
