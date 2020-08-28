<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class visitorModel extends Model
{
    protected $table = 'visitor';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
