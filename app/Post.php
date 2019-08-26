<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // table name
    // protected $table = 'posts';

    // primary key
    public $primaryKey = 'id';

    // Timestamps
    public $timestamps = true;

    // tutorial 10
    // A post is belongs to a user.
    public function user(){
        return $this->belongsTo('App\User');
    }

}
