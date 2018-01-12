<?php

namespace SertxuDeveloper\Voyager\Models;

use Illuminate\Database\Eloquent\Model;
use SertxuDeveloper\Voyager\Facades\Voyager;
use SertxuDeveloper\Voyager\Traits\HasRelationships;

class Role extends Model
{
    use HasRelationships;

    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(Voyager::modelClass('User'), 'user_roles');
    }

    public function permissions()
    {
        return $this->belongsToMany(Voyager::modelClass('Permission'));
    }
}
