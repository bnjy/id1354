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
}
