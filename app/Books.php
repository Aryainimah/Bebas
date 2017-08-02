<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    protected $table = 'books';
    protected $fillable=['title','author_id','amont','cover'];
    protected $visible=['title','author_id','amont','cover'];
    public $timestamps=true;

    public function author()
    {
    	return $this->belongsTo('App\Author','author_id');
    }
}

