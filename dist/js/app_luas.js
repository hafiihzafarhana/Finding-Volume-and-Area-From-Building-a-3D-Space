$(document).ready(function(){
      // ajax balok
      $('#button_luaspermukaan_balok').click(function(){
        $.ajax({
          type:'POST',
          url:'proses_luas.php',
          data:{
            panjang_balok:$('#panjang_balok').val() != "" ? ($('#panjang_balok').val()) : 0,
            lebar_balok:$('#lebar_balok').val() != "" ? ($('#lebar_balok').val()) : 0,
            tinggi_balok:$('#tinggi_balok').val() != "" ? ($('#tinggi_balok').val()) : 0,
            role:1
          },
          success:function(data){
            $('#hasil_luaspermukaan_balok').html(Math.round (data));
          }
        });
      });

    // ajax kubus
      $('#button_luas_kubus').click(function(){
          $.ajax({
            type:'POST',
            url:'proses_luas.php',
            data:{
                sisi_kubus:$('#sisi_kubus').val() != "" ? ($('#sisi_kubus').val()) : 0,
                role:2
            },
            success:function(data){
              $('#hasil_luas_kubus').html(Math.round (data));
            }
          });
        });

        // ajax limas segiempat
        $('#button_luaspermukaan_limaspersegi').click(function(){
          $.ajax({
            type:'POST',
            url:'proses_luas.php',
            data:{
              luasalas_limaspersegi:$('#luasalas_limaspersegi').val() != "" ? ($('#luasalas_limaspersegi').val()) : 0 ,
              alas_segitiga1:$('#alas_segitiga1').val() != "" ? ($('#alas_segitiga1').val()) : 0,
              alas_segitiga2:$('#alas_segitiga2').val() != "" ? ($('#alas_segitiga2').val()) : 0,
              alas_segitiga3:$('#alas_segitiga3').val() != "" ? ($('#alas_segitiga3').val()) : 0,
              alas_segitiga4:$('#alas_segitiga4').val() != "" ? ($('#alas_segitiga4').val()) : 0,
              tinggi_segitiga1:$('#tinggi_segitiga1').val() != "" ? ($('#tinggi_segitiga1').val()) : 0,
              tinggi_segitiga2:$('#tinggi_segitiga2').val() != "" ? ($('#tinggi_segitiga2').val()) : 0,
              tinggi_segitiga3:$('#tinggi_segitiga3').val() != "" ? ($('#tinggi_segitiga3').val()) : 0,
              tinggi_segitiga4:$('#tinggi_segitiga4').val() != "" ? ($('#tinggi_segitiga4').val()) : 0,
              role:3
            },
            success:function(data){
              $('#hasil_luaspermukaan_limaspersegi').html(Math.round (data));
            }
          });
        });

        // ajax prisma segitiga
        $('#button_luaspermukaan_prismaTiga').click(function(){
          $.ajax({
            type:'POST',
            url:'proses_luas.php',
            data:{
              alas_segitiga_prismaTiga:$('#alas_segitiga_prismaTiga').val() != "" ? ($('#alas_segitiga_prismaTiga').val()) : 0 ,
              tinggi_segitiga_prismaTiga:$('#tinggi_segitiga_prismaTiga').val() != "" ? ($('#tinggi_segitiga_prismaTiga').val()) : 0,
              panjang_persegi_prismaTiga1:$('#panjang_persegi_prismaTiga1').val() != "" ? ($('#panjang_persegi_prismaTiga1').val()) : 0,
              lebar_persegi_prismaTigas1:$('#lebar_persegi_prismaTigas1').val() != "" ? ($('#lebar_persegi_prismaTigas1').val()) : 0,
              panjang_persegi_prismaTiga2:$('#panjang_persegi_prismaTiga2').val() != "" ? ($('#panjang_persegi_prismaTiga2').val()) : 0,
              lebar_persegi_prismaTigas2:$('#lebar_persegi_prismaTigas2').val() != "" ? ($('#lebar_persegi_prismaTigas2').val()) : 0,
              panjang_persegi_prismaTiga3:$('#panjang_persegi_prismaTiga3').val() != "" ? ($('#panjang_persegi_prismaTiga3').val()) : 0,
              lebar_persegi_prismaTigas3:$('#lebar_persegi_prismaTigas3').val() != "" ? ($('#lebar_persegi_prismaTigas3').val()) : 0,
              role:4
            },
            success:function(data){
              $('#hasil_luaspermukaan_prismasegitiga').html(Math.round (data));
            }
          });
        });


        // ajax limas segitiga
        $('#button_luaspermukaan_limasTiga').click(function(){
          $.ajax({
            type:'POST',
            url:'proses_luas.php',
            data:{
              alas_segitiga1_limasTiga:$('#alas_segitiga1_limasTiga').val() != "" ? ($('#alas_segitiga1_limasTiga').val()) : 0 ,
              alas_segitiga2_limasTiga:$('#alas_segitiga2_limasTiga').val() != "" ? ($('#alas_segitiga2_limasTiga').val()) : 0,
              alas_segitiga3_limasTiga:$('#alas_segitiga3_limasTiga').val() != "" ? ($('#alas_segitiga3_limasTiga').val()) : 0,
              alas_segitiga4_limasTiga:$('#alas_segitiga4_limasTiga').val() != "" ? ($('#alas_segitiga4_limasTiga').val()) : 0,
              tinggi_segitiga1_limasTiga:$('#tinggi_segitiga1_limasTiga').val() != "" ? ($('#tinggi_segitiga1_limasTiga').val()) : 0,
              tinggi_segitiga2_limasTiga:$('#tinggi_segitiga2_limasTiga').val() != "" ? ($('#tinggi_segitiga2_limasTiga').val()) : 0,
              tinggi_segitiga3_limasTiga:$('#tinggi_segitiga3_limasTiga').val() != "" ? ($('#tinggi_segitiga3_limasTiga').val()) : 0,
              tinggi_segitiga4_limasTiga:$('#tinggi_segitiga4_limasTiga').val() != "" ? ($('#tinggi_segitiga4_limasTiga').val()) : 0,
              role:5
            },
            success:function(data){
              $('#hasil_luaspermukaan_limasTiga').html(Math.round (data));
            }
          });
        });

        // ajax tabung
      $('#button_luas_tabung').click(function(){
        $.ajax({
          type:'POST',
          url:'proses_luas.php',
          data:{
            jari_Tabung:$('#jari_Tabung').val() != "" ? ($('#jari_Tabung').val()) : 0,
            tinggi_Tabung:$('#tinggi_Tabung').val() != "" ? ($('#tinggi_Tabung').val()) : 0,
            role:6
          },
          success:function(data){
            $('#hasil_luas_tabung').html(Math.round (data));
          }
        });
      });

      // ajax Keurucut
      $('#button_luas_kerucut').click(function(){
        $.ajax({
          type:'POST',
          url:'proses_luas.php',
          data:{
            jari_Kerucut:$('#jari_Kerucut').val() != "" ? ($('#jari_Kerucut').val()) : 0,
            panjang_sisiKerucut:$('#panjang_sisiKerucut').val() != "" ? ($('#panjang_sisiKerucut').val()) : 0,
            role:7
          },
          success:function(data){
            $('#hasil_luas_kerucut').html(Math.round (data));
          }
        });
      });

       // ajax Bola
       $('#button_luas_bola').click(function(){
        $.ajax({
          type:'POST',
          url:'proses_luas.php',
          data:{
              jari_Bola:$('#jari_Bola').val() != "" ? ($('#jari_Bola').val()) : 0,
              role:8
          },
          success:function(data){
            $('#hasil_luas_bola').html(Math.round (data));
          }
        });
      });

      // ajax Setengah Bola Pejal
      $('#button_luas_bolaSetengahPejal').click(function(){
        $.ajax({
          type:'POST',
          url:'proses_luas.php',
          data:{
            jari_BolaSetengahPejal:$('#jari_BolaSetengahPejal').val() != "" ? ($('#jari_BolaSetengahPejal').val()) : 0,
            role:9
          },
          success:function(data){
            $('#hasil_luas_bolaSetengahPejal').html(Math.round (data));
          }
        });
      });

     // ajax Seperempat Bola Pejal
     $('#button_luas_bolaSeperempatPejal').click(function(){
      $.ajax({
        type:'POST',
        url:'proses_luas.php',
        data:{
          jari_BolaSeperempatPejal:$('#jari_BolaSeperempatPejal').val() != "" ? ($('#jari_BolaSeperempatPejal').val()) : 0,
            role:10
        },
        success:function(data){
          $('#hasil_luas_bolaSeperempatPejal').html(Math.round (data));
        }
      });
    });

    });