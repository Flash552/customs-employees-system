<?php 
include("Model.php");
class User extends Model {

    protected $table = "users";
    protected $primaryKey = "id_user";
    protected $fillable = ["id_user" , "id_emp" , "username" ];
}