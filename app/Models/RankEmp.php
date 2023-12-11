<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RankEmp extends Model
{
    use HasFactory;
    protected $table = "rank_emp";
    protected $primaryKey = 'id_rank';

    protected $fillable = ['id_rank','title_rank' , 'id_type_emp'];


    public function getEmpType(): BelongsTo
    {
        return $this->belongsTo(TypeEmp::class,'id_type_emp');
    }
}
