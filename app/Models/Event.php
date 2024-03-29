<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $fillable = ['title', 'category_id', 'description', 'link', 'begin_at', 'end_at', 'count_subscriber', 'address', 'price'];
    protected $dates = ['begin_at' , 'end_at'];
    //protected $with = ['categories'];

    public function category(){
        return $this->belongsTo('App\Models\Category', 'category_id');
    }
}
