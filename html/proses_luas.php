<?php
// balok
if($_POST["role"] == 1){
    echo 2 * ($_POST["panjang_balok"] * $_POST["lebar_balok"] + $_POST["panjang_balok"] * $_POST["tinggi_balok"]
    + $_POST["lebar_balok"] * $_POST["tinggi_balok"]);
}
// kubus
else if($_POST["role"] == 2){
    echo pow($_POST["sisi_kubus"],2) * 6;
}

// limas segiempat
else if($_POST["role"] == 3){
    echo pow($_POST["luasalas_limaspersegi"],2) + ($_POST["alas_segitiga1"] * $_POST["tinggi_segitiga1"] / 2) + ($_POST["alas_segitiga2"] * $_POST["tinggi_segitiga2"] / 2) + ($_POST["alas_segitiga3"]* $_POST["tinggi_segitiga3"] / 2) + ($_POST["alas_segitiga4"] * $_POST["tinggi_segitiga4"] / 2);
}

// prisma segitiga
else if($_POST["role"] == 4){
    echo ($_POST["alas_segitiga_prismaTiga"] * $_POST["tinggi_segitiga_prismaTiga"]) + (($_POST["panjang_persegi_prismaTiga1"] * $_POST["lebar_persegi_prismaTigas1"]) + ($_POST["panjang_persegi_prismaTiga2"] * $_POST["lebar_persegi_prismaTigas2"]) + ($_POST["panjang_persegi_prismaTiga3"] * $_POST["lebar_persegi_prismaTigas3"]));
}

// limas segitiga
else if($_POST["role"] == 5){
    echo ($_POST["alas_segitiga1_limasTiga"] * $_POST["tinggi_segitiga1_limasTiga"] / 2) + ($_POST["alas_segitiga2_limasTiga"] * $_POST["tinggi_segitiga2_limasTiga"] / 2) + ($_POST["alas_segitiga3_limasTiga"]* $_POST["tinggi_segitiga3_limasTiga"] / 2) + ($_POST["alas_segitiga4_limasTiga"] * $_POST["tinggi_segitiga4_limasTiga"] / 2);
}

// Tabung
else if($_POST["role"] == 6){
    echo (pow($_POST["jari_Tabung"],2) * 2 * 3.14) + ( 2 * 3.14 * $_POST["jari_Tabung"] * $_POST["tinggi_Tabung"]) ;
}

// Kerucut
else if($_POST["role"] == 7){
    echo (pow($_POST["jari_Kerucut"],2) * 3.14) + ( 3.14 * $_POST["jari_Kerucut"] * $_POST["panjang_sisiKerucut"]) ;
}

// Bola
else if($_POST["role"] == 8){
    echo pow($_POST["jari_Bola"],2) * 3.14 * 4;
}

// Setengah Bola Pejal
else if($_POST["role"] == 9){
    echo pow($_POST["jari_BolaSetengahPejal"],2) * 3.14 * 3;
}

// Seperempat Bola Pejal
else if($_POST["role"] == 10){
    echo pow($_POST["jari_BolaSeperempatPejal"],2) * 3.14 * 2;
}

?>