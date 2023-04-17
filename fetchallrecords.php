<?php
  
  header("Content-Type:application/json");
  header("Access-Control-Allow-Methods: GET");

  include('config/config.php');

  $config = new Config();

  if($_SERVER['REQUEST_METHOD']=='GET')
  {

     $res = $config->fetchallrecords;

      $data['data'] =$records;

  }else{

    $data['msg'] = "only GET request is allowed.."

  }

    echo json_encode($data);

?>