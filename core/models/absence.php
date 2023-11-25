<?php 
include("Model.php");
class absence extends Model {

    protected $table = "absence";
    protected $primaryKey = "id_absence";
    protected $fillable = ["id_absence" , "id_emp","from_date"  ];
}