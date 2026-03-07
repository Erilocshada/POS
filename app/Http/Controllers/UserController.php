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
            'nama' => 'Pelanggan Pertama'];

            UserModel::where('username', 'customer')->update($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);
    }
}
