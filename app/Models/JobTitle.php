<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobTitle extends Model
{
 
    use HasFactory;
    use SoftDeletes;
    protected $table = "jop_title";
    protected $primaryKey   ="id_jop";
    protected $fillable = ['id_jop','title_jop'];
}
