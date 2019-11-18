<?php
header("Content-Type:application/json");
if (isset($_GET['id']) && $_GET['id']!="") {
 include('conn.php');
 $id = $_GET['id'];
 $result = mysqli_query(
 $con,
 "SELECT * FROM `restaurants` WHERE id=$id");
 if(mysqli_num_rows($result)>0){
 $row = mysqli_fetch_array($result);
 $name = $row['name'];
 $addr =$addr['addr'];
 response($id, $name, $addr);
 mysqli_close($con);
 }
}
function response($id,$name,$addr){
 $response['id'] = $id;
 $response['name'] = $namet;
 $response['addr'] = $addr;
 
 $json_response = json_encode($response);
 echo $json_response;
}
?>