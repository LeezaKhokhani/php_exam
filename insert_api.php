<?php
  


  header("Content-Type:application/json");
  header("Access-Control-Allow-Methos: POST");

  include('config/config.php');

  $config = new Config();

  if($_SERVER['REQUEST_METHOD']=='POST')
  {

     $name = $_POST['name'];
     $moviename = $_POST['moviename'];


     $res = $config->insert($name,$moviename);

      if($res){
        $data['msg'] ="Record insertion successfully";

      }else{
        $data['msg'] ="Record insertion failed";
      }


  }else{
    $data['msg'] = "only post method is allowed.."

  }

  echo json_encode($data);
?>