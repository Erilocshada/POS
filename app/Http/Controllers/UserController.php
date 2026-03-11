<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        //tambah data user dengan eloquent Model
        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'nama' => 'Manager Tiga',
            'password' => Hash::make('12345')
            ];

        UserModel::create($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
