<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /*
    public function getRouteKeyName()
    {
        return 'slug';
    }
    */

    protected $table = 'roles';

    protected $guarded = [];

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
