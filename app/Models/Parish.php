<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Parish extends Model
{
   use HasFactory;

    public $table = "parishes";
    protected $guarded = ['id'];
    use SoftDeletes;
    protected $dates = ['deleted_at'];

}
