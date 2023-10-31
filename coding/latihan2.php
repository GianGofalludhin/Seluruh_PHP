<?php

// Gian dan Tegar
// kelas xi rpl 1
$nama ="Gian";

if($nama != "Gian"){
    echo("Saya Gian");
    // Jika kondisi Terpenuhi

}else{
    //Jika kondisi  tidak Terpenuhi
    echo("Saya Bukan Gian <br>");
}

echo "<br>";
$User = "Tegar";
$pass = "778";
if ( $User == "tegar" AND $pass = "778"){
echo ("Selamat anda berhasil masuk");

}else{
    echo("Kamu salah<br>");
}
// PAKE AND

echo "<br>";
$User = "Gian";
$pass = "778";
if ( $User == "tegar" OR $pass = "778"){
echo ("Selamat anda berhasil masuk");

}else{
    echo("BODO");
}

echo "<br>";

// pake or

$nilai= 75;

if($nilai > 100 ){
echo("Maaf Inputan Anda Melebihi Batas");

}else if($nilai > 90 ){
echo("A+");
}
else if($nilai > 80 ){
echo("A");
}
else if($nilai > 70 ){
echo("B+");
}
else if($nilai > 60 ){
echo("B");
}
else if($nilai > 50 ){
echo("C");

}
else if($nilai < 0 ){
echo("Maaf Inputan Salah");
}
else {
    echo("maaf kelebihan");
}

echo "<br>";
$umr ="18";
$film = "AVENGER";
$uang = "1000.000";
$paket = "VIP";
if ($umr >= 18){
    if ($film == "AVENGER") {
        if ($paket == "VIP") {
           echo "tiket $film VIP anda berhassil dibeli";
        }
        else if ($paket == "biasa"){
            echo ("tiket $film biasa anda berhassil dibeli");
        }
        else if {
            echo "pilih paket anda";
        }else {
            echo "maaf film belum tayang";
        }else {
            echo "maaf anda masih kecil";
        }
    }
}