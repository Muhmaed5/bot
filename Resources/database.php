<?php
require 'vendor/autoload.php';

class database{
    protected $uri =  '';
    private $status = false;
    private $conn;
    private $result = array();

    public function __construct($uri){
        $this->uri =$uri;
        if($this->status == false ){
            try {
                $conn = new MongoDB\Client($uri);
            }catch (Exception $e) {
                array_push($this->result, $e);
                return false;
            }
            $this->conn = $conn->bot;
            if ($this->conn == true){
                return true;
                $this->status = true;
            }else{
                return false;
            }
        }else{
            return true;
        }
    }

    public function  find(string $collection,array $data, array $insertdata){
        $finded = $this->conn->$collection->findOne($data);
        if($finded == true){
            return $finded->jsonSerialize();
        }else if($this->insert($collection, $insertdata) == true){
            $finded = $this->conn->$collection->findOne($data);
            if ($finded == true) {
                return $finded->jsonSerialize();
            }
        }else{
            return false;
    }}

    public function onlyfind(string $collection, array $data){
        $finded = $this->conn->$collection->findone($data);
        print_r($finded);
        if($finded == true){
            return $finded->jsonSerialize();
        }else{
            return false;
    }}

    public function randomfind($collection){
        $limit = 1;
    $skip = mt_rand(0, $collection->count());
    $options = array(
    "limit" => $limit,
    // "skip" => $skip
    );
// $collection->find('bin', $options );
        $finded = $this->conn->$collection->find(['limit' => 1] );
        print_r($finded);
        if($finded == true){
            return $finded->jsonSerialize();
        }else{
            return false;
    }}

    public function insert(string $collection,array $data){
           $inserted = $this->conn->$collection->insertOne($data);
           if ($inserted == true) {
               return $inserted->getInsertedId();
           }else{
                return false;
           }
    }

    public function delete(string $collection,array $data){
           $inserted = $this->conn->$collection->deleteMany($data);
           return $inserted->getDeletedCount();
    }

    public function update(string $collection,array $filter, array $update){
           $inserted = $this->conn->$collection->updateOne($filter, $update);
           return $inserted->getMatchedCount();
    }

    public function get(){
            $val = $this->result;
            $this->result = array();
            return $val;
        }
        
    public function __call($name, $arguments)
    {
        return $name." is not found. your arguments is ".$arguments;
    }
}

?>