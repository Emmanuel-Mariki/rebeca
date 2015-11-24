<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name','url','keywords','description','type',
        'created_at','publish','contents','priority'
    ];

    public function dropdowns()
    {
        return $this->hasMany('App\dropdowns');
    }
}

