<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //

    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }
    public function addComment($body){
        
        $this->comments()->create(compact('body'));
        
        // Comment::create([
        //     'body' => request('commentBody'),
        //     'post_id'=> $this->id
        // ]);
    }
}
