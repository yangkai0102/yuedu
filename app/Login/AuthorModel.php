<?php

namespace App\Login;

use Illuminate\Database\Eloquent\Model;

class AuthorModel extends Model
{
    //
    public $primaryKey='id';
    public $table='author';
    public $timestamps=false;
}
