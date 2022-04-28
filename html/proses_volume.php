<?php
// balok
if($_POST["role"] == 1){
    echo $_POST["panjang_balok"] * $_POST["lebar_balok"] * $_POST["tinggi_balok"];
}

// kubus
else if($_POST["role"] == 2){
    echo pow($_POST["sisi_kubus"],3);
}

// limas segiempat
else if($_POST["role"] == 3){
    echo pow($_POST["sisi_luasAlas_limasSegiEmpat"],2) * $_POST["tinggi_limasSegiEmpat"] / 3;
}

// prisma segitiga
else if($_POST["role"] == 4){
    echo ($_POST["alas_segitiga"] * $_POST["tinggi_segitiga"] / 2) * $_POST["tinggi_prisma"];
}

// limas segitiga
else if($_POST["role"] == 5){
    echo (($_POST["alas_segitiga_limas"] * $_POST["tinggi_segitiga_limas"] / 2) * $_POST["tinggi_limasSegiTiga"]) / 3;
}

// tabung
else if($_POST["role"] == 6){
    echo $_POST["pi_tabung"] * $_POST["jari_tabung"]* $_POST["jari_tabung"] * $_POST["tinggi_tabung"] ;
}

//kerucut
else if($_POST["role"] == 7){
    echo $_POST["pi_kerucut"] * $_POST["jari_kerucut"] *  $_POST["jari_kerucut"] * $_POST["tinggi_kerucut"] / 3;
}

//bola
else if($_POST["role"] == 8){
    echo 4 * $_POST["pi_bola"] * $_POST["jari_bola"] *$_POST["jari_bola"] *$_POST["jari_bola"]  / 3;
}

// prisma segilima
else if($_POST["role"] == 9){
    echo 2/3* pow($_POST["jari_BolaSetengahPejal"],3) * 3.14;
}

// prisma segienam
else if($_POST["role"] == 10){
    echo pow($_POST["jari_BolaSeperempatPejal"],3) * 3.14 * 1 / 3;
}


?>