<?php 
include("Model.php");
class certificateEmp extends Model {

    protected $table = "certs_emp";
    protected $primaryKey = "id_certs";
    protected $fillable = ["id_certs" , "id_emp","title_certs" , "id_type_certs","certs_file" ];
}