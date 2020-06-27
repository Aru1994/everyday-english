<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnswerHistory extends Model
{
    protected $fillable = [
        'user_id', 'question_id', 'answer',
    ];

}
