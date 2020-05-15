<?php 
include 'Ust.php'
?>

<div class="bır">
<h2>Unity Döndürme Kodları<h2>	

<h3>Arayıp da bulamadığım kodları yazmak zorunda kaldım. <br><br>

Sıkıcıydı.<br><br>

Siz sıkılmadan kullanın.<br><br>

 Bir cismi döndürmek için başka bir cismi onun menteşe noktasına yerleştirip  ana cismi onun içine atın.Kodlar aşağıda: <br><br>

using System.Collections;<br>
using System.Collections.Generic;<br>
using UnityEngine;<br>
public class HareketEttir : MonoBehaviour<br>
{<br>
public int hiz;<br>
Rigidbody yercekimi;<br>
    void Start()<br>
    {<br>
        yercekimi=GetComponent < Rigidbody >();<br>
    }<br>
    void Update()<br>
    {<br>
     if(Input.GetKey(KeyCode.A)){<br>
          transform.Rotate( 0 , 0 , -1);<br>
     }<br>
 if(Input.GetKey(KeyCode.D)){<br>
          transform.Rotate( 0 , 0 , 10);<br>
     }<br>
    }<br>
}<br><br>
Bu da onun butona basılmış hali :<br><br>
public void OnButton()<br>
     {<br>
          transform.Rotate( 0 , 0 , -100);<br>
     }<br>
 </h3>

</div>

<div class="ıkı">
<h2>Eğitim Hayatı Üzerine</h2>
<h3>Şöyle bir hikaye hatırlıyorum :<br><br>

Çocuk okula başlar, ilk günün sonunda bıkkın şekilde eve döner babasına sorar;<br><br>

-Baba, daha kaç gün okula gitmem gerekiyor ?<br>
+İnanmayacaksın oğlum ama daha 20 yıl var.<br><br>

Alın size bir hikaye daha : <br><br>

Sinan Çetin’in oğlu küçük yaşta çok güzel resimler çizer. İlgisini çeker tabi babasının. Hemen bir bilene gidilir : <br><br>

-Hocam, bizim çocuk çok güzel resim çiziyor. Ne yapalım ?<br><br>

+Bol bol kağıt kalem al çizsin. Okula başlayınca zaten körelecek. <br><br>

Devam…<br><br>

Vazgeçtim devam etmiyorum. <br><br>

Anlayana sivrisinek saz….</h3>
</div>

<div class="uc">
	<h2>Unity Puan Hesaplama Kodları</h2>
	<h3>
		Unity ile puan hesaplama, puan toplama ve ekrana puan yazdırma kodları şu şekildedir :<br><br><br>

 

…<br>
public Text puanGoster;<br>
public Text oyunuBitir;<br>
…<br><br>

void OnTriggerEnter(Collider other){<br>
        if (other.gameObject.tag==”altin”)<br>
        {<br>
            puan++;<br>
            Destroy(other.gameObject);<br>
            puanGoster.text = “Puanin =” + puan;<br>
        }<br>
        if (puan == 3 )<br>
        {<br>
            oyunuBitir.text = “Oyun Bitti, Tebrikler tüm altınları topladın.”;<br>
        }
	</h3>
</div>

<div class="dort">
	<h2>Unity Kamera Takip Kodları</h2>
	<h3>
		Unity ile bir cismi (objeyi) kamera ile takip edebilmeniz için kolay ve kısa bir yöntem.<br><br>

Kamera hareket kodları şu şekildedir:<br><br><br>



using System.Collections;<br>
using System.Collections.Generic;<br>
using UnityEngine;<br><br>

public class KameraKontrol : MonoBehaviour<br>
{<br>
public GameObject Sphere;<br>
Vector3 mesafe;<br><br>

void Start()<br>
{<br>
mesafe=transform.position – Sphere.transform.position;<br>
}<br><br>

void Update()<br>
{<br>
transform.position=Sphere.transform.position + mesafe;<br><br>

}<br>
}<br>
	</h3>
</div>
<div class="bes">
	<h2>Unity Hareket Kodları</h2>
	<h3>
		Unity ile objelerin hareket ettirilmesi ile unity ile oyun yapmaya kısa bir giriş videosudur.<br><br>

Ekrana yerleştirilen bir topun ileri geri ve sağa sola hareket ettirilmesi için kodlar şu şekildedir :<br><br><br>



-HareketEt.cs-<br><br>

using System.Collections;<br>
using System.Collections.Generic;<br>
using UnityEngine;<br><br>

public class HareketEt : MonoBehaviour<br>
{<br><br>

Rigidbody yercekimi;<br>
public int guc;<br><br>

void Start()<br>
{<br>
yercekimi = GetComponent<Rigidbody>();<br>
}<br>

void Update()<br>
{<br>
float yatay = Input.GetAxisRaw(“Horizontal”);<br>
float dikey = Input.GetAxisRaw(“Vertical”);<br><br>

Vector3 vec = new Vector3(yatay,0,dikey);<br>

yercekimi.AddForce(vec*guc);<br><br>

}<br>
}<br>
	</h3>
</div>




</div>
</body>
</html>