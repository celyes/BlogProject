<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Post extends Model
{
    //
    protected $fillable = ['title', 'body', 'user_id'];
    public function comments(){
        return $this->hasMany(Comment::class)->orderBy('created_at', 'DESC');
    }
    public function addComment($body){
        
        $this->comments()->create(compact('body'));
        
        
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function ScopeFilter($query, $filter){
       
        if(isset($filter['month'])){
            $month = $filter['month'];
            $query->whereMonth('created_at', Carbon::parse($month)->month);
        }
        if(isset($filter['year'])){
            $year = $filter['year'];
            $query->whereYear('created_at', $year);
        }        
    }

}
