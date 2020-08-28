<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contractModel extends Model
{
    protected $table = 'contract';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}
