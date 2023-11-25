<?php 
include("Model.php");
class JobTitle extends Model {

    protected $table = "job_title";
    protected $primaryKey = "id_job";
    protected $fillable = ["id_job" , "title_job"  ];
}