<?php

     class Config{
        public $HOST = "127.0.0.1";
        public $USERNAME = "root";
        public $PASSWORD = "";
        public $DB_NAME = "php_api";
        public $conn;
        public $Movie_customre = "movei_custmore";



        public function connect(){
            $this->conn = mysqli_connect($this->HOST,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
         }


         public function insert($name,$moviename){
            $this->connect();

            $query = "INSERT INTO $this->Movie_customre(name,moviename) VALUES ('$name',$moviename');";
           
            $res = mysqli_query($this->conn, $query); //bool

            return $res;
      }
         public function fetchallrecords(){

          $this->connect();

          $query ="SELECT * FROM $this->Movie_customre;";

          $res =mysql_query($this->conn,$query);

          $records =[];
            while ($records= mysqli_fetch_assoc($res))
            {
               array_push($records,$records);
            }
            return $records;

      }
      public function fetchSinglerecords(){

          $this->connect();

          $query ="SELECT * FROM $this->Movie_customre WHERE id=$id;";

          $res =mysql_query($this->conn,$query);

          $records = mysqli_fetch_assoc($res);
             
          if ($records != null){
               return true;
          }
          else{
               return false;
          }
     }
       
     public function delete($id){

          $this->connect();
          $isRecordAvailable = $this->fetchSinglerecords($id);

          if($isRecordAvailable){

          $query ="DELETE FROM $this->Movie_customre WHERE id=$id;";

          $res =mysql_query($this->conn,$query);

             return true;
          }    
          else{

               return false;
          }


     }

     public function insert($name,$moviename ,$id){
          $this->connect();

          $query = "UPDATE $this->Movie_customre SET name='$name', moviename = '$moviename' WHERE id =$id;";
         
          $res = mysqli_query($this->conn, $query); //bool

          return $res;
     }
  }
?>