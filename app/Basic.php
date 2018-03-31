<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Basic extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'basics_info';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'sitio',
        'link_fb',
        'link_tw',
        'link_yt',
        'email',
        'address',
        'telephone',
        'objective',
        'about_us',
        'biography',
    ];

}
