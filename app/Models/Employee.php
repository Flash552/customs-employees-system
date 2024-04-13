<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;


class Employee extends Model implements HasMedia
{

    use HasFactory;
    use SoftDeletes;
    use InteractsWithMedia;
    protected $table = "employees";
    protected $primaryKey   = "id_emp";
    // الرقم	الإسم	الحالة الإجتماعية	الجنس
    // اسم الأم	الدرجة الوظيفية	المؤهل العلمي	الرتبة	حالة العمل	جهة العمل
    // 	تاريخ التعيين	تاريخ الميلاد	تاريخ اخر ترقية	رقم البطاقة	رقم الجواز
    // 	الرقم الوطني	تاريخ المباشرة	الشريحة	مدة الإستحقاق	الاستحقاق القادم
    // تاريخها	سببها	تاريخ القرار	رقم القرار	صورة شخصية	الصفة	ملاحظة
    protected $fillable = [

        'id_emp',
        'PID_emp',
        'name',
        'phone',
        'id_jop',
        'id_state',
        'id_type_emp',
        'id_rank',
        // 'image',
        'id_station',
        'isDeleted',
        'premotion_date',
        'last_premotion_date',
        'start_duty_date',
        'start_date',
        'end_duty_resson',
        'id_marital_state',
        'sex',
        'decision_number',
        'decision_date',
        'mother_name',
        'national_number',
        'id_number',
        'passport_number',
        'birthdate',
        'email',
        'bank_name',
        'bank_branch',
        'bank_account_id',
        'expertise',
        'expertise_start_date'


    ];

    public function jobTitle()
    {
        return $this->belongsTo(JobTitle::class, 'id_jop')->withDefault();
    }
    public function stateEmp()
    {
        return $this->belongsTo(StateEmp::class, 'id_state')->withDefault();
    }
    public function typeEmp()
    {
        return $this->belongsTo(TypeEmp::class, 'id_type_emp')->withDefault();
    }
    public function rank()
    {
        return $this->belongsTo(RankEmp::class, 'id_rank')->withDefault();
    }
    public function station()
    {
        return $this->belongsTo(Station::class, 'id_station')->withDefault();
    } public function marital_status()
    {
        return $this->belongsTo(Marital_status::class, 'id_marital_state')->withDefault();
    }
}
