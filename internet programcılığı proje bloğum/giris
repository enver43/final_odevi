<?php include("ayar.php"); ?>
<?php

if ($_POST) 
{

 $KullaniciAdi = $_POST[KullaniciAdi];
 $Sifre = $_POST[Sifre];


   if  ( !empty($KullaniciAdi) && !empty($Sifre)  ) 
   {

        echo "Lütfen boş alan bırakmayınız";

   }
   else
   {
      $kontrol == mysql_query("SELECT * FROM kullanici WHERE KullaniciAdi = 'KullaniciAdi'");
      
       if (mysql_num_rows($kontrol) > 0) 
       {

         $parcala = mysql_fetch_array($kontrol);
         $gSifre = $parcala['Sifre']

         if ($gSifre == $sifre ) 
         {
          echo "Giriş başarılı";
          header("Location : Yorum Ve Öneri.html ");
         }
         else
         {
            echo "girdiginiz sifre yanlis";
            header("Location:yanlis.php");
         }
         
       }
       else
       {
         echo "Böyle bir kullanıcı bulunamadı.";
       }
   



   }


}

else
{
}

?>
