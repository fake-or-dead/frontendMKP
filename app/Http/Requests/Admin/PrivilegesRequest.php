<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\Request;
use Config;

class PrivilegesRequest extends Request
{
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
        switch ($this->method())
        {
            case 'GET':
            case 'DELETE':
            case 'POST':
            {
                return [
                        'name'          => ['required', 'string'],
                        'link_url'      => ['required', 'string'],
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                        'name'          => ['required', 'string'],
                        'link_url'      => ['required', 'string'],
                ];
            }
            default:break;
        }
    }

    public function messages()
    {
        if (in_array($this->session()->get('lang'), Config('admin.listTransLang')))
        {
            return [
                'required' => 'The :attribute field is required.',
            ];
        }

        return [];
    }
}
