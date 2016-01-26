<?php
namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;

class ShopOfTheWeekRequest extends Request
{
    /**
    * DateCreate 2016-01-25
    * Create By golf
    */

    /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
    public function authorize()
    {
        return true;
    }

    /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
    public function rules()
    {
        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            case 'POST':
            {
                return [] ;
            }
            case 'PUT':
            case 'PATCH':
            {
                return [];
            }
            default:break;
        }
    }

    /**
    * Change Language from user choose.
    *
    * @return array
    */
    public function messages()
    {
        if (in_array($this->session()->get('lang'), Config('admin.listTransLang'))) 
        {
            return [] ;
        }

        return [] ;
    }
}