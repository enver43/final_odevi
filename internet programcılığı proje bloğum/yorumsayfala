<?php 
include("ayar.php");

$sayfa = @$_GET ["s"];
if (empty($sayfa) || !is_numeric($sayfa)) 
{

$sayfa=1;

}
$kacar = 3 ;
$ksayisi = mysql_num_rows(mysql_query("select id from yorumlar"));
$ssayisi = ceil( $ksayisi / $kacar );
$nereden = ($sayfa * $kacar )-$kacar;

$bul = mysql_query("select * from yorumlar order by id desc limit $nereden , $kacar ");
while ($goster = mysql_fetch_array($bul)) 
{
extract($goster);
echo "<div style=' border : 2px solid #ddd ; padding : 5px ; margin--bottom : 10px  '>
      <strong> Gönderen: </strong> {$Yazar} <br/>
      <strong> Yorum: </strong> {$Yorumİcerigi} <br/>
    

     </div>";
}

for($i=1 ; $i<=$ssayisi ; $i++)
{
	echo "<a href='yorumsayfala.php?s={$i}'";
	if ($i == $sayfa) 
	{
	  echo " class='aktif' ";
	}
	echo "> {$i} </a>";
}





 ?>
