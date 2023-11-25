<?php
class EmpTrans extends Model
{

    protected $table = "emp_trams";
    protected $primaryKey = "id_certs";
    protected $fillable = ["id_tran", "id_emp", "id_from_station", "id_to_station", "confirm_first", "confirm_date_first", "confirm_two", "confirm_date_two"];
}
