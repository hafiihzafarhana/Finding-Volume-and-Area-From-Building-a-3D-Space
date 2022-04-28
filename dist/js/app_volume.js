$(document).ready(function(){
  // ajax balok
    $('#button_vol_balok').click(function(){
      $.ajax({
        type:'POST',
        url:'proses_volume.php',
        data:{
            panjang_balok:$('#panjang_balok').val() != "" ? ($('#panjang_balok').val()) : 0,
            lebar_balok:$('#lebar_balok').val() != "" ? ($('#lebar_balok').val()) : 0,
            tinggi_balok:$('#tinggi_balok').val() != "" ? ($('#tinggi_balok').val()) : 0,
            role:1
        },
        success:function(data){
          $('#hasil_vol_balok').html(Math.round (data));
        }
      });
    });

    // ajax kubus
    $('#button_vol_kubus').click(function(){
      $.ajax({
        type:'POST',
        url:'proses_volume.php',
        data:{
            sisi_kubus:$('#sisi_kubus').val() != "" ? ($('#sisi_kubus').val()) : 0,
            role:2
        },
        success:function(data){
          $('#hasil_vol_kubus').html(Math.round (data));
        }
      });
    });


  // ajax limas segi empat
    $('#button_vol_limasSegiEmpat').click(function(){
        $.ajax({
          type:'POST',
          url:'proses_volume.php',
          data:{
              sisi_luasAlas_limasSegiEmpat:$('#sisi_luasAlas_limasSegiEmpat').val() != "" ? ($('#sisi_luasAlas_limasSegiEmpat').val()) : 0,
              tinggi_limasSegiEmpat:$('#tinggi_limasSegiEmpat').val() != "" ? ($('#tinggi_limasSegiEmpat').val()) : 0,
              role:3
          },
          success:function(data){
            $('#hasil_vol_limasSegiEmpat').html(Math.round (data));
          }
        });
      });

  // ajax prisma segitiga
  $('#button_vol_prismaSegitiga').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          alas_segitiga:$('#alas_segitiga').val() != "" ? ($('#alas_segitiga').val()) : 0,
          tinggi_segitiga:$('#tinggi_segitiga').val() != "" ? ($('#tinggi_segitiga').val()) : 0,
          tinggi_prisma:$('#tinggi_prisma').val() != "" ? ($('#tinggi_prisma').val()) : 0,
          role:4
      },
      success:function(data){
        $('#hasil_vol_prismaSegitiga').html(Math.round (data));
      }
    });
  });

  // ajax limas segitiga
  $('#button_vol_limasSegiTiga').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          alas_segitiga_limas:$('#alas_segitiga_limas').val() != "" ? ($('#alas_segitiga_limas').val()) : 0,
          tinggi_segitiga_limas:$('#tinggi_segitiga_limas').val() != "" ? ($('#tinggi_segitiga_limas').val()) : 0,
          tinggi_limasSegiTiga:$('#tinggi_limasSegiTiga').val() != "" ? ($('#tinggi_limasSegiTiga').val()) : 0,
          role:5
      },
      success:function(data){
        $('#hasil_vol_limasSegitiga').html(Math.round (data));
      }
    });
  });

  // ajax Tabung
  $('#button_vol_tabung').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          pi_tabung:3.14,
          jari_tabung:$('#jari_tabung').val() != "" ? ($('#jari_tabung').val()) : 0,
          tinggi_tabung:$('#tinggi_tabung').val() != "" ? ($('#tinggi_tabung').val()) : 0,
          role:6
      },
      success:function(data){
        $('#hasil_vol_tabung').html(Math.round (data));
      }
    });
  });

  // ajax Kerucut
  $('#button_vol_kerucut').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          pi_kerucut:3.14,
          jari_kerucut:$('#jari_kerucut').val() != "" ? ($('#jari_kerucut').val()) : 0,
          tinggi_kerucut:$('#tinggi_kerucut').val() != "" ? ($('#tinggi_kerucut').val()) : 0,
          role:7
      },
      success:function(data){
        $('#hasil_vol_kerucut').html(Math.round (data));
      }
    });
  });

  // ajax bola
  $('#button_vol_bola').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          pi_bola:3.14,
          jari_bola:$('#jari_bola').val() != "" ? ($('#jari_bola').val()) : 0,
          role:8
      },
      success:function(data){
        $('#hasil_vol_bola').html(Math.round (data));
      }
    });
  });

  // ajax prisma segi lima
  $('#button_vol_prismasLima').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          jari_BolaSetengahPejal:$('#jari_BolaSetengahPejal').val() != "" ? ($('#jari_BolaSetengahPejal').val()) : 0,
          role:9
      },
      success:function(data){
        $('#hasil_vol_prismaLima').html(Math.round (data));
      }
    });
  });

  // ajax prisma segi enam
  $('#button_vol_prismasEnam').click(function(){
    $.ajax({
      type:'POST',
      url:'proses_volume.php',
      data:{
          jari_BolaSeperempatPejal:$('#jari_BolaSeperempatPejal').val() != "" ? ($('#jari_BolaSeperempatPejal').val()) : 0,
          role:10
      },
      success:function(data){
        $('#hasil_vol_prismaEnam').html(Math.round (data));
      }
    });
  });

  });