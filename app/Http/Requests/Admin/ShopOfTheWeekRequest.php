<?php
namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use App\Model\Admin\ShopOfTheWeek;
use Config;

class ShopOfTheWeekRequest extends Request
{
  /**
  * DateCreate 2016-01-25
  * Create By golf
  */
  private static $width ;
  private static $height ;
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
        self::setSize();
        return [
                'name'      => 'required',
                'link_url'  => 'required',
                'image'     => 'required|image|image_size:'.self::$width.','.self::$height.'|mimes:'.Config::get('admin.upload.admin.mimes').'|max:'.Config::get('admin.upload.admin.storage'),
        ];
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

  /**
  * Change Language from user choose.
  *
  * @return size width height
  */
  private static function setSize()
  {
    $dataSelect     = ShopOfTheWeek::first();
    self::$width    = $dataSelect->width;
    self::$height   = $dataSelect->height;
  }
}
