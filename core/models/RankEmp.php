<?php 
include("Model.php");
class RankEmp extends Model {

    protected $table = "rank_emp";
    protected $primaryKey = "title_rank";
    protected $fillable = ["title_rank" , "title_rank","id_type_emp" ];
}