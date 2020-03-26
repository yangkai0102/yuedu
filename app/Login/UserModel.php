<?php

namespace App\Login;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //
    public $primaryKey='id';
    public $table='user';
    public $timestamps=false;
}
