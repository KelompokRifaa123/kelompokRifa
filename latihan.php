<?php
//nomor 1
$b=80 ;
if($b % 2 == 0){   
    echo"$b adalah bilangan genap";
}else{
    echo"$b adalah bilangan ganjil";
}
echo"<br>";
$a = 81;
if($a % 2==0){
    echo"$a adalah bilangan genap";
}else{
    echo"$a adalah bilangan ganjil";
}

//nomor 2
$a=6 ;  
$b=10 ;
if($a>$b) {
    echo"$a lebih besar dari b";
}
if($a<$b) {
    echo"$a lebih kecil dari b";
}

//nomor 3
$username = "admin"; 
if($username == "admin" && $password == "qwerty") {
    echo"username dan password sesuai, hak akses diberikan";
}else{
    echo"username dan password tidak sesuai";
}

//nomor 4
$username = "admin";
$password = "qwerty";
if($username == "admin" && $password == "qwerty"){
    echo"username dan password sesuai, hak akses diberikan";
}elseif($username == "admin" && $password != "qwerty"){
    echo"username sesuai, password tidak sesuai";
}elseif($username != "admin" && $password == "qwerty"){
    echo"username tidak sesuai, password sesuai";
}elseif($username != "admin" && $password != "qwerty"){
    echo"username tidak sesuai, password tidak sesuai";
}else{
    echo"error";
}
?>