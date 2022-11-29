<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignUpRequest extends FormRequest
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
                    case 'index':
                        $rules = [
                            'name' => 'required',
                            'email' => 'required|email|unique:users',
                            'password' => 'required'
                        ];
                        break;

                    default:
                        break;
                }
        endswitch;
        return $rules;
    }
    public function messages()
    {
        return [
            'name.required' => 'Chưa nhập tên',
          'email.required' => 'Chưa nhập email',
          'email.email' => 'Nhập sai định dạng email',
          'password.required' => 'Chưa nhập mật khẩu'
        ];
    }
}
