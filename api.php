<?php

function bacaHTML($url){
  $data = curl_init();
  curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($data, CURLOPT_URL, $url);
  $hasil = curl_exec($data);
  curl_close($data);
  return $hasil;
}
$key='id';
$pesan='Hello';
$q=urlencode($pesan);
$json=bacaHTML('https://fat-cell.000webhostapp.com/go/index.php?to='.$key.'&text='.$q);
$jsonen=json_decode($json,true);
$message=$jsonen;
echo $message;

?>