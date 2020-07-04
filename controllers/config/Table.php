<?php

class Table
{
    protected $db=null;
    public function __construct(DataAccessHelper $db)
    {
        if (!isset($db->con)) return null;
        $this->db = $db;
    }
    public function getTable($table = 'hocsinh'){
        $result = $this->db->conn->query("SELECT * FROM {$table}");

        $resultArray = array();

        // fetch product data one by one
        while ($item = mysqli_fetch_array($result, MYSQLI_ASSOC)){
            $resultArray[] = $item;
        }

        return $resultArray;
    }
}