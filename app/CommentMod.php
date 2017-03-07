<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentMod extends Model
{
    // Map Post To comment
    protected $fillable=[
        'body','article_id','user_id'
    ];

    public function Article(){

    	return $this->belongsTo(Article::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
//        return $this->belongsTo('\App\User','id','user_id');
    }

}
