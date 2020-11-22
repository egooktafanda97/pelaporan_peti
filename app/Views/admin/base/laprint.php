<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>LAPORAN</title>

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


$blnn = $ex["bulan"];
if ($blnn == '01') {
$blnn ="Januari";
}elseif($blnn == '02'){
$blnn ="Februari";
}elseif($blnn == '03'){
$blnn ="Maret";
}elseif($blnn == '04'){
$blnn ="April";
}elseif($blnn== '05'){
$blnn ="Mei";
}elseif($blnn == '06'){
$blnn ="Juni";
}elseif($blnn == '07'){
$blnn ="Juli";
}elseif($blnn == '08'){
$blnn ="Agustus";
}elseif($blnn == '09'){
$blnn ="September";
}elseif($blnn == '10'){
$blnn ="Oktober";
}elseif($blnn == '11'){
$blnn ="November";
}elseif($blnn == '12'){
$blnn ="Desember";
}
?>

<body >
  <div class="container">
    <table style="width: 100%;">
      <tr>
        <td style ="border:none;">
          <div style="width:15%">
            <img src="<?=$img?>" style="width: 60px;">
          </div>
        </td>
        <td  style="width: 85%; border:none; text-align: left; padding-left: 20px;">
          <h4>POLRES KUANTAN SINGINGI</h4>
        </td>
      </tr>
    </table>

    <hr class="line-title">

    <table style="width: 100%;">
      <tr>
        <td align="center">
          <h3 size="16">
            Data Laporan Di <?=$ex["status"]?></h3>
          </td>
        </tr>
      </table>

      <h5 size="14" style="margin-bottom: 20px">Bulan : <?php echo $blnn.' '.$ex["tahun"];?></h5>
      <table align="center" width="100%" border="1" cellspacing="0">
        <thead>
          <tr>
            <td align="center" style="border : 1px solid #0000;">No.</td>
            <td align="center" style="border : 1px solid #0000;">Nama Pelapor</td>
            <td align="center" style="border : 1px solid #0000;">Laporan</td>
            <td align="center" style="border : 1px solid #0000;">Status Laporan</td>
            <td align="center" style="border : 1px solid #0000;">Tanggal</td>
          </tr>

        </thead>

        <tbody>
         <?php 
         $no = 1;
         foreach ($lap as $isi) {
         $no++;
         ?>
         <tr>
          <td align="center" style="border : 1px solid #000;"><?=$no;?></td>
          <td align="center" style="border : 1px solid #0000;"><?=\App\Models\Tb_user_Model::wherekode($isi['kode_user'])->first()->nama?></td>
          <td align="center" style="border : 1px solid #0000;"><?=$isi['masalah']?></td>
          <td align="center" style="border : 1px solid #0000;"><?=$isi['status']?></td>
          <td align="center" style="border : 1px solid #0000;"><?=$isi['created_at']?></td>        
        </tr>
        <?php } ?>
      </tbody>
    </table>

    <br><br>
    <table style="width: 100%;">
      <tr>
        <td  style="width: 70%; border:none;" align="center"></td>

        <td style ="width: 30%;  border:none;"  align="center">
          Teluk Kuantan, <?php echo $all;?><br><br>
          Kapolres<br>
          <br><br><br><br>
          <u><b>.................................</b></u>
        </td>
      </tr>
    </table>
  </div>

</body>
</html>