<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User_Assignment extends Model
{
    public string $table = 'users_assignments';

    protected array $fillable = [
        'id_users',
        'id_assignments'
    ];

    use HasFactory;

    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id_users', 'id');
    }

    public function assignment(): HasOne
    {
        return $this->hasOne(Assignment::class,'id_assignments', 'id');
    }
}
