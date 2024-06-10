<?php

namespace App\Http\Controllers\APIController;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\HttpEvent;
use Illuminate\Http\Request;


class GetController extends Controller
{

    use HttpEvent;

    public function getUsers()
    {
        return $this->success("Berhasil mengambil data user", User::all());
    }
}
