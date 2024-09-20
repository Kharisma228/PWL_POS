<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {   

        // JS 4 PRAKTIKUM 2.5
         $user = UserModel::Create([
            'username' => 'manager11',
            'name' => 'Manager11',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager12';

        $user->save();

        $user->wasChanged();//true
        $user->wasChanged('username');//true
        $user->wasChanged(['username', 'level_id']);//true
        $user->wasChanged('name');//false
        dd($user->wasChanged(['name', 'username']));//true


        /*$user = UserModel::create([
            'username' => 'manager55',
            'name' => 'Manager55',
            'password' => Hash::make('12345'),
            'level_id' => 2,
        ]);

        $user->username = 'manager56';

        $user->isDirty();//true
        $user->isDirty('username');//true
        $user->isDirty('name');//false
        $user->isDirty('name', 'username');//true

        $user->isClean();//false
        $user->isClean('username');//false
        $user->isClean('name');//true
        $user->isClean('name', 'username');//false

        $user->save();

        $user->isDirty();//false
        $user->isClean();//true
        dd($user->isDirty());*/
        
        



        // JS 4 PRAKTIKUM 2.4
        /*$user = UserModel::firstOrNew(
            [
                            'username' => 'manager33',
                            'name' => 'Manager Tiga Tiga',
                            'password' => Hash::make('12345'),
                            'level_id' => 2
                        ],                        
                    );
                    $user->save();

                    return view('user', ['data' => $user]);*/
                
        /*$user = UserModel::firstOrNew(
            [
                'username' => 'manager33',
                'name' => 'Manager Tiga Tiga',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],                        
        );
        return view('user', ['data' => $user]);*/
        
        /*$user = UserModel::firstOrNew(
            [
                'username' => 'manager',
                'name' => 'Managerr',
            ],                        
        );
        return view('user', ['data' => $user]);*/

        /*$user = UserModel::firstOrCreate(
            [
                'username' => 'manager22',
                'name' => 'Manager Dua Dua',
                'password' => Hash::make('12345'),
                'level_id' => 2
            ],                        
        );
        return view('user', ['data' => $user]);*/

        /*$user = UserModel::firstOrCreate(
            [
                'username' => 'manager',
                'name' => 'Managerr',
            ],
            
        );
        return view('user', ['data' => $user]);*/


        // JS 4 PRAKTIKUM 2.3

        /*$userCount = UserModel::where('level_id', 2)->count();
        //dd($userCount);
        return view('user', ['userCount' => $userCount]);*/

        /*$user = UserModel::where('level_id', 2)->count();
        dd($user);
        return view('user', ['data' => $user]);*/     
                
        
        // JS 4 PRAKTIKUM 2.2

        /*$user = UserModel::where('username', 'managers9')->firstOrFail();
        return view('user' , ['data' => $user]);*/

        /*$user = UserModel::findOrFail(1);
        return view('user' , ['data' => $user]);*/


        // JS 4 PRAKTIKUM 2.1
        /*$user = UserModel::findOr(20, ['username', 'name'], function() {
            abort(404);
        });

        return view('user', ['data' => $user]);*/

        /*$user = UserModel::findOr(1, ['username', 'name'], function() {
            abort(404);
        });

        return view('user', ['data' => $user]);*/
        
        /*$user = UserModel::firstWhere('level_id', 1);
        return view('user', ['data' => $user]);*/

        /*$user = UserModel::where('level_id', 1)->first();
        return view('user', ['data' => $user]);*/
        
        /*$user = UserModel::find(1);
        return view('user', ['data' => $user]);*/
        

        // JS 4 PRAKTIKUM 1
        /* $data = [
            'level_id' => 2,
            'username' => 'manager_dua',
            'name' => 'Manager 2',
            'password' => Hash::make('12345'),
        ]; */

        /*$data = [
            'level_id' => 2,
            'username' => 'manager_tiga',
            'name' => 'Manager 3',
            'password' => Hash::make('12345'),
        ];
        UserModel::create($data);

        $user = UserModel::all();
        return view('user', ['data' => $user]);*/


        // JS 2 PRAKTIKUM

        /*$data = [
        'name' => 'Pelanggan Pertama'
        ];
        UserModel::where('username', 'customer-1')->update($data); // Update data user */

        /* Coba akses model UserModel
        $user = UserModel::all(); // Ambil semua data dari tabel m_user
        return view('user', ['data' => $user]);*/
    }
}