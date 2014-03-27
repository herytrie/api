<?php

// membaca username dari form login
$username = $_POST['username'];
// membaca password dari form login
$password = $_POST['password'];

// membuat URL GET request ke server
$url = "http://localhost/apiserver/apiservice.php?username=".$username."&password=".$password."&api=1234"; 

// mengirim GET request ke server dan membaca respon XML dari server
$bacaxml = simplexml_load_file($url);

// membaca data XML hasil dari respon server
foreach($bacaxml->response as $respon)
{
  // jika responnya TRUE maka login sukses
  // jika FALSE maka login gagal
  if ($respon == "TRUE") echo "Login Sukses";
  else if ($respon == "FALSE") echo "Login Gagal";
}  

?>