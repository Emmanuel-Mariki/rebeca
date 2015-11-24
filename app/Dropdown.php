<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
    protected $fillable = [
        'name','url','keywords','description',
        'created_at','publish','priority','page_id'
    ];

    public function Page()
    {
        return $this->belongsTo('App\Page');
    }
}
