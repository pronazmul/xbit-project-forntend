<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userResistration extends Model
{
    protected $table = 'user_resistration';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
