<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        
        /* $data = [
            'level_id' => 2,
            'username' => 'manager_dua',
            'name' => 'Manager 2',
            'password' => Hash::make('12345'),
        ]; */

        $data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'name' => 'Manager 3',
            'password' => Hash::make('12345'),
        ];
        UserModel::create($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);

        //$data = [
       //     'name' => 'Pelanggan Pertama'
       // ];
       // UserModel::where('username', 'customer-1')->update($data); // Update data user 



        /* Coba akses model UserModel
        $user = UserModel::all(); // Ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);*/
    }
}

