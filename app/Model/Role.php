<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    protected $fillable = [
        'name','display_name','description'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}