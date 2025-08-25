<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = ['date'];

    // Permite que eu possa atualizar tudo
    protected $guarded = [];

    // Pertence a um usuario
    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    // Pertence a muitos
    public function users() {
        return $this->belongsToMany('App\Models\User');
    }
}
