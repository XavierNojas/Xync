<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;
    protected $fillable = ['first_name','middle_name', 'last_name', 'birthdate',
    'full_address', 'user_type_id', 'email', 'password', 'branch_assigned'];

}