<?php

class DBcontroller
{
    private $host="localhost";
    private $user="root";
    private $pass="";
    private $db="crudmvc";

    private $conn;

    public function __construct()
    {
        $this->conn=$this->connectDB();
    }

    public function connectDB()
    {
        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        
        if($conn->connect_error) {
            return $conn->connect_error;
        } 
        return $conn ;
    }

    public function rawQuery($query, $type="")
    {
        $data=[];
        $result = $this->conn->query($query);
        if($result) {
            if($type === 'select') {
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        $data[] = $row ;
                    }
                    $data = array(
                        "result" => true,
                        "data" => $data
                    );
                    return $data ;
                } else {
                    $data = array(
                        "result" => false,
                        "msg" => "No data Found"
                    );
                }
            } else {
                return true;
            }
        } else {
            $data = array(
                "result" => false,
                "msg" => "Some Error Occured while executing your query"
            );
        }
    }

};
