<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LAPORAN PETI</title>
    <style>
    .line-title{
      border: 0;
      border-style: inset;
      border-top: 1px solid #000;
    }
  </style>
  </head>

<!-- pengaturan format tanggal -->
<?php
      $tangal = date('d-m-Y') ;
      $tgl = explode("-", $tangal);

      $tgll =  $tgl[0];
      $bln =   $tgl[1];
      $thn =   $tgl[2];
      if ($bln == '01') {
        $bln ="Januari";
      }elseif($bln == '02'){
        $bln ="Februari";
      }elseif($bln == '03'){
        $bln ="Maret";
      }elseif($bln == '04'){
        $bln ="April";
      }elseif($bln == '05'){
        $bln ="Mei";
      }elseif($bln == '06'){
        $bln ="Juni";
      }elseif($bln == '07'){
        $bln ="Juli";
      }elseif($bln == '08'){
        $bln ="Agustus";
      }elseif($bln == '09'){
        $bln ="September";
      }elseif($bln == '10'){
        $bln ="Oktober";
      }elseif($bln == '11'){
        $bln ="November";
      }elseif($bln == '12'){
        $bln ="Desember";
      }
      $all= $tgll." ".$bln." ".$thn;
      $blnthn= $bln." ".$thn;
      ?>

  <body >
  <div class="container">
  <table style="width: 100%;">
    <tr>
       	<td  style="width: 50%; border:none;"></td>
      	<td style ="border:none;">
         <b>Kepada Yth : Bpk. Kapolres Kuantan Singingi</b><br>
         <br>
         Di-<br>
         <br>
         <u>Taluk Kuantan</u> <br><br><br>
        </td>
    </tr>
  </table>

  <table style="width: 100%;">
    <tr>
      <td  style="width: 10%; border:none;vertical-align: top;"><b>Perihal</b></td>
      <td  style="width: 1%; border:none;vertical-align: top;"><b>:</b></td>
      <td  style="width: 89%; border:none;"><b><?=$query['masalah']?></b></td>
    </tr>
  </table>

  <br>
  Dengan Hormat,<br>
  Saya yang bertanda tangan di bawah ini :<br>
  <table style="width: 100%;">
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Nama</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['nama']?></td>
    </tr>
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Tempat/ Tanggal Lahir</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['tanggal_lahir']?></td>
    </tr>
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Pekerjaan</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['pekerjaan']?></td>
    </tr>
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Kebangsaan</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['kebangsaan']?></td>
    </tr>
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Agama</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['agama']?></td>
    </tr>
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Alamat</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['alamat']?></td>
    </tr>
    <tr>
      <td  style="width: 5%; border:none;">
      <td  style="width: 25%; border:none;">Nomor HP</td>
      <td  style="width: 1%; border:none;">:</td>
      <td  style="width: 69%; border:none;"><?=$query['no_hp']?></td>
    </tr>
  </table>
  <br>
  <?=$query['deskripsi']?>
  <br><br>
  <table style="width: 100%;">
    <tr>
      <td  style="width: 60%; border:none;" align="center"></td>

      <td style ="width: 40%;  border:none;"  align="center">
       <!--  PT. CSB Kebun II, <?php echo $all;?><br>
        Saya Selaku Pengadu<br>
        <br><br><br><br>
        <u><b>RICHIE LUKITO</b></u> -->
      </td>
    </tr>

  </table>




</div>

  </body>
</html>