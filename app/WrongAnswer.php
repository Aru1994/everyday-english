<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WrongAnswer extends Model
{
    protected $fillable = [
        'user_id', 'question_id',
    ];
    //DBにどの値を入れさせるのを許可するかを指定する
}
