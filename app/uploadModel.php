<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class uploadModel extends Model
{
    protected $table = 'upload_photo';
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    public $incrementing = true;
    public $timestamps = false;
}