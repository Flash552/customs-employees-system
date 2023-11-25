<?php
include("Model.php");
class City extends Model {

    protected $table = "Cites";
    protected $primaryKey = "id_City";
    protected $fillable = ["id_City","name" , "hi "];


    

    
}
