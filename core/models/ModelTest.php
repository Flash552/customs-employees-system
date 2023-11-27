<?php
include("City.php");


class ModelTest extends Model {

    protected $table = "emps";
    protected $primaryKey = "id";
    protected $fillable = ["id","name" , "phone"];


    

    
}

 $obj =new ModelTest();
 echo $obj->select();
 echo '     ' ;
echo $obj->where("id" , 5);

?>