<?php

//Function to print and call from API
function reqresApi(){
  $link = "https://reqres.in/api/users";
  $curlHandle = curl_init();
  $table = array(
    CURLOPT_URL=>$link,
    CURLOPT_RETURNTRANSFER=>true,
  );
  curl_setopt_array($curlHandle,$table);
  $resp = curl_exec($curlHandle);
  $data = json_decode($resp,true);
  foreach($data["data"] as $key => $val){
    echo "<tr>";
    echo "<td>".$val["id"]."</td>";
    echo "<td>".$val["first_name"] ." ". $val["last_name"]."</td>";
    echo "<td>".$val["email"]."</td>";
    echo "<td><img src=\"".$val["avatar"]."\"></td>";
    echo "</tr>";
  }
  curl_close($curlHandle);
}
?>