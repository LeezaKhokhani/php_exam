<?php

     class Config{
        public $HOST = "127.0.0.1";
        public $USERNAME = "root";
        public $PASSWORD = "";
        public $DB_NAME = "php_api";
        public $data;
        public $Movie_customre = "movei_custmore";



        public function connect(){
            $this->data = mysqli_connect($this->HOST,$this->USERNAME,$this->PASSWORD,$this->DB_NAME);
         }


         public function insert($name,$age,$course){
            $this->connect();

            $query = "INSERT INTO $this->STUDENTS_TABLE(name,age,course) VALUES ('$name',$age,'$course');";
           
            $res = mysqli_query($this->data, $query); //bool

            return $res;
      }


     }
?>