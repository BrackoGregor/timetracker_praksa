<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Role extends Model
{
    public string $table = 'users_roles';

    protected array $fillable = [
        'role'
    ];

    use HasFactory;
}
