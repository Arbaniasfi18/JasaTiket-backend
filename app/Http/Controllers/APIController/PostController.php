<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\HttpEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Configuration\Exceptions;

class PostController extends Controller
{
    use HttpEvent;

    public function addUser(Request $req)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User,email',
            'phone_num' => 'required|min:10',
            'password' =>  'required|min:8',
        ];

        $messages = [
            'min' => ':attribute kurang dari :min',
            'required' => ':attribute harus diisi',
            'email' => ':attribute harus berbentuk email',
            'unique' => ':attribute sudah terdaftar',
        ];

        $validator = Validator::make($req->all(), $rules, $messages, ['email' => "Email", 'password' => "Password", "name" => "Nama", "phone_num" => "Nomor Telepon"]);

        if (!$validator->fails()) {
            $data = $validator->validated();

            User::create($data);

            return $this->success("Berhasil menambah user", $validator->validated());
        }
        else{
            return $this->failed($validator->errors(), 406);
        }
    }

}
