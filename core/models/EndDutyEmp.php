<?php 
include("Model.php");
class EndDutyEmp extends Model {

    protected $table = "end_duty_emp";
    protected $primaryKey = "id_duty";
    protected $fillable = ["id_duty" , "id_emp","end_duty_resson" ,"end_date" ];
}