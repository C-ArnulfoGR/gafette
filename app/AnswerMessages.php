<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerMessages extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'answer_messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'community_email',
        'answer_body',
        'message_id',
    ];
}
