<?php
include_once("config.php");
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
if(isset($postdata) && !empty($postdata)){
    $nama = mysqli_real_escape_string($mysqli,trim($request->nama));
    $doa = mysqli_real_escape_string($mysqli,trim($request->doa));
    $sql = "INSERT INTO wish (nama,doa) 
    VALUES ('$nama','$doa')";

    if($mysqli->query($sql)==TRUE){
        $authdata = [
            'nama'=>$nama,
            'doa'=>$doa,
            'id'=>mysqli_insert_id($mysqli)
        ];
    }
}
