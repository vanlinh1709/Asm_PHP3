<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $rules = [];
//        dd(123);
        //lay ra ten phuong thuc dang hoat dong.
        $currentAction = $this->route()->getActionMethod();
        switch ($this->method()) :
            case 'POST':
                switch ($currentAction) {
                    case 'add':
                        $rules = [

                        ];
                        break;
                    case 'update':
                        $rules = [

                        ];
                    default:
                        break;
                }
        endswitch;
        return $rules;
    }//end rules()
    public function messages() {
        return [

        ];
    }//
}
