<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $tables = 'roles';

    protected $fillable = [
        'name','display_name','description'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function permissions(){
        return $this->belongsToMany('App\Permission');
    }

    public function getPermissionListAttribute(){
        return $this->permissions->lists('id')->toArray();
    }
}
