<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
class User extends Model
{ 
   public $timestamps=false;
public $table= 'users';
    public $fillable = [
        'username',
        'email_id',
        'password',
        'first_name',
        'last_name',
        'status',
    ];

    use HasFactory;
}
