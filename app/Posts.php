<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    protected $fillable = ['judulbuku','pengarang','sinopsis'];
    protected $dates = ['created_at','updated_at'];
}
