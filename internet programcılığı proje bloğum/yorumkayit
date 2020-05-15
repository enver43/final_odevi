<?php include("ayar.php"); ?>

<?php

if ($_POST) 

{
    $Yazar = $_POST["Yazar"];
    $Mail = $_POST["Mail"];
    $Yorumİcerigi = $_POST["Yorumİcerigi"];


   if ( !empty ( $Yazar ) && !empty ( $Mail ) && !empty ( $Yorumİcerigi ) ) 
   {
   
     $ekle = mysql_query("insert into yorumlar (Yazar, Mail, Yorumİcerigi ,OnayDurumu) values ('$Yazar','$Mail','$Yorumİcerigi',0) ");
     if ($ekle) 
     {
       echo "<font color='green'>Veriler basari ile eklendi.</font>";
     }
     else
     {
      echo "<font color='red'>Veriler eklenemedi.</font>.mysql_error()";
     }

   }
   else
   {
     $bul = mysql_query(" select * from yorumlar WHERE onay='0'");

     while ($goster = mysql_fetch_array($bul);) 
     {
          echo "<div class='yazan'>
          <strong> Gönderen: </strong> {$goster["Yazar"]} <br/>
          <strong> Yorum: </strong> {$goster["Yorumİcerigi"]} 
          </div>";
     }
     
   }

}

else

{
header("refresh : yanlisyorum.html");
}

?>