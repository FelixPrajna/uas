<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    // Tidak menggunakan auto-increment ID karena MongoDB menggunakan ObjectID
    public $incrementing = false;

    protected $keyType = 'string';

    // Tentukan koneksi MongoDB
    protected $connection = 'mongodb';

    // Nama collection MongoDB
    protected $collection = 'users';

    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Override boot untuk menggunakan ObjectID MongoDB
    protected static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->_id = (string) new \MongoDB\BSON\ObjectId();
        });
    }
}
