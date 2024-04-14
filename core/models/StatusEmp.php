<?php 
class StatusEmp extends Model {

    protected $table = "status_emp";
    protected $primaryKey = "id_status";
    protected $fillable = ["id_status" , "title_status"  ];
}