<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'tbl_users';
    protected $primaryKey = 'userid';

}

// protected $fillable = 'post_name', 'post_mobile';
 
