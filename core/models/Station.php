<?php 
include("Model.php");
class Station extends Model {

    protected $table = "stations";
    protected $primaryKey = "id_station";
    protected $fillable = ["id_station" , "title_station","id_city"  ];
}