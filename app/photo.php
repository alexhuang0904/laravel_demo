<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
}