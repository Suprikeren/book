<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'role';

    protected $guarded = ['id'];


    public function users()
    {
        return $this->hasMany(User::class);
    }
}
