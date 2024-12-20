<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Casts\Attribute;


class UserModel extends Authenticatable implements JWTSubject
{
    use HasFactory;

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    public function getJWTCustomClaims()
    {
        return [];
    }

    protected $table = 'm_user'; // Mendefinisikan nama tabel yang digunakan oleh model ini
    protected $primaryKey = 'user_id'; // Mendifinisikan primary key dari tabel yang digunakan

    protected $fillable = ['username', 'password', 'name', 'level_id', 'avatar', 'image', 'created_at', 'updated_at'];

    protected $hidden = ['password']; // Tidak ditampilkan saat select
    protected $casts = ['password' => 'hashed']; // Password akan di-hash secara otomatis

    // Relasi ke tabel level
    public function level()
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }

    // JS 11 API 2
    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn($image) => asset('/storage/posts/' . $image),
        );
    }
    //mendapatkan nama role
    public function getRoleName()
    {
        return $this->level->level_nama;
    }
    //cek apakah user memiliki role tertentu
    public function hasRole($role): bool
    {
        return $this->level->level_kode == $role;
    }

    // Mendapatkan kode role
    public function getRole()
    {
        return $this->level->level_kode;
    }
}