<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PrivilegesRequest;
use App\Model\Admin\Privilege;
use View,Config;

class PrivilegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $setData['data'] = Privilege::where('location_id', 2)->get();

        return View::make('admin.location.privileges.privileges', $setData) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setData['actionLink']      = action('Admin\PrivilegesController@store') ;
        $setData['action']          = 'create' ;
        $setData['data']            = [];
        return View::make('admin.location.privileges.create_privileges', $setData) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrivilegesRequest $request)
    {

        $dataInsert                     = $request->except(['_token','width','height']) ;
        $file = $request->file('image_url');
        if ($file != "")
        {
          $image_name = "privileges-".time().".".$file->guessExtension();
          $file->move('images', $image_name);
          $dataInsert['image_url']      = $image_name;
        }

        $dataInsert['location_id']      = "2";
        $dataInsert['user_id']          = "1" ;
        $dataInsert['status']           = "1";
        $dataInsert['sort_order']       = Privilege::where(['location_id' => 2, 'status' => 1])->max('sort_order')+1;
        $dataInsert['created_at']       = time();
        Privilege::create(beforeSql($dataInsert));

        return redirect()->action('Admin\PrivilegesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setData['data']                = Privilege::where('id', $id)->get() ;
        // $cutData                        = explode(',', $setData['data'][0]['size_display']);

        // $setData['data'][0]['width']    = $cutData[0];
        // $setData['data'][0]['height']   = $cutData[1];

        // d($setData['data']->toArray()) ;
        $setData['actionLink']      = action('Admin\PrivilegesController@update',['id'=>$id]) ;

        if ($setData['data'])
        {
            $setData['action']      = 'edit' ;
            return View::make('admin.location.privileges.create_privileges', $setData) ;
        }
        else
        {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrivilegesRequest $request, $id)
    {
        $dataUpdate                  = $request->except(['_token','_method']) ;
        $file = $request->file('image_url');

        if ($file != "")
        {
          $image_name = "privileges-".time().".".$file->guessExtension();
          $file->move('images', $image_name);
          $dataUpdate['image_url']     = $image_name;
        }
        Privilege::where('id',$id)->update($dataUpdate);

        return redirect()->action('Admin\PrivilegesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        privilege::find($id)->delete();
        return 1; /* === true */
    }
}
