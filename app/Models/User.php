<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'users';
    protected $primaryKey = 'userId';
    public $timestamps = true;
    protected $fillable = ['username','password','name','surname','email','phone','role','active','lastLoginDate','image'];
}
