<?php include("ayar.php"); ?>
<?php

if ($_POST) 
{

$Ad = $_POST[Ad];
$Soyad = $_POST[Soyad];
$KullaniciAdi = $_POST[KullaniciAdi];
$Sifre = $_POST[Sifre];
$TelNo = $_POST[TelNo];
$Mail = $_POST[Mail];
$Yetkilendirme = $_POST[Yetkilendirme];

   if ( !empty($Ad) && !empty($Soyad) && !empty($KullaniciAdi) && !empty($Sifre) && !empty($Mail) && !empty($TelNo) && !empty($Yetkilendirme)  ) 
   {





   	$ekle = mysql_query("insert into kullanici (Ad , Soyad , KullaniciAdi , Sifre , TelNo , Mail , Yetkilendirme ) values (' $Ad ' , ' $Soyad ' , ' $KullaniciAdi ' , ' $Sifre ' , ' $TelNo ' , ' $Mail ' , ' $Yetkilendirme ' ) ");
   
   	if ($ekle) 
   	{
   		
      echo "<font color='green'> Veriler basariyla eklendi </font>";
      header("Location : Giriş.html ");

   	}
   else
   {
   	echo "<font color='red'> Veriler eklenemedi </font>.mysql_error()";
   }


   }


}
else
{
}
?>