<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Tambah data user dengan Eloquent Model
        /*$data = [
            'username' => 'Customer-1',
            'name' => 'Pelanggan',
            'password' => Hash::make('12345'),
            'level_id' => 3
        ];*/

        $data = [
            'name' => 'Pelanggan Pertama'
        ];
        UserModel::where('username', 'customer-1')->update($data); // Update data user



        // Coba akses model UserModel
        $user = UserModel::all(); // Ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);
    }
}

