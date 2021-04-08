<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_Assignment extends Model
{
    public string $table = 'users_assignments';
    protected array $guarded = [];
    use HasFactory;
}
