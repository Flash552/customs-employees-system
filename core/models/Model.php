<?php
class Model{

    protected $table = "";
    protected $primaryKey = "";
    protected $fillable = [];
    protected $guarded = [];

   
    
    
    public function __construct(array $attributes = []){}


    public function select(array $attributes = []){

        if($this->table == "")throw new Exception("set table name frist");
        if($attributes == []) $attributes = $this->fillable;
        $columns=implode(",",$attributes);
        $selectQuery = "select ".$columns." from ".$this->table;
        return $this->SelectQuery($selectQuery);
    }
    private function get(array $attributes = []){

        $attributes = $this->fillable ;
        
        
    }
    private function nonSelectQuery($nonSelectQuery){

        $attributes = $this->fillable ;
        
        
    }
    private function selectQuery($nonSelectQuery){

        $attributes = $this->fillable ;
        
        
    }


}?>