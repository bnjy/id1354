<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  // Table name
  protected $table = 'comments';

  // primary key
  public $primarykey = 'id';

  //timestamps

  public $timestamps = true;

  // A single comment belongs to a user.
  public function user(){
    return $this->belongsTo('App\User');
  }
}
