<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone',
        'id_client'
    ];

    public function assignment(): HasMany
    {
        return $this->hasMany(Assignment::class, 'id_client', 'id');
    }

    use HasFactory;
}
