<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemConfigTable extends Model
{
    use HasFactory;
    public $table = "users";
    public $id = "id";
    public $incrementing = true;
    public $keytype = 'int';
    public $timestamps = true;
}
