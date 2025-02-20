<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Veteriner</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <!--Fonts Google-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="global.css">
	<link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="(max-width:1500px)" href="tablet.css">
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/jquery-ui-timepicker-addon.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.6.3/i18n/jquery-ui-timepicker-tr.js"></script>
    
    <meta name="keywords" content="e-veteriner,veteriner">
    
    <style>
.button {
  border: none;
  color: white;
  padding: 2px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #646464;
}

.button2:hover {
  background-color: #646464;
  color: white;
}

.ornek {
  -moz-box-shadow: 5px 5px  #3b7ca1;
  -webkit-box-shadow: 5px 5px  #3b7ca1;
  box-shadow: 5px 5px  #3b7ca1;
;
  padding: 10px;
  border-radius: 5px;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border: 1px solid gray;
  width: 500;
  position: absolute;
  left: 33%;
  top: 40%;
}

</style>
</head>
<body>
    <header class="bg-dark-blue">
        <div class="container">
             <nav id="navbar">
            <h1 class="heading-big">E-Veteriner</h1>
            <ul>
                <li><a href="index.php">Ana Sayfa</a></li>
                <li><a href="hizmetler.php">Hizmetlerimiz</a>
                    <ul>
					
                        <li><a href="randevu.php" title=""> 1.Randevu Yönetimi</a></li>
					
                        <li><a href="asitakvimi.php" title=""> 2.Aşı Takvimi Takibi</a></li>
					
                        <li><a href="yatanhasta.php" title="">3.Yatan Hasta Konaklama Takibi</a></li>
					
                        <li><a href="gonullusahiplendirme.php" title="">4.Gönüllü Sahiplendirme</a></li>
					
					
                        <li><a href="evcilhayvan.php" title="">5.Evcil Hayvan Yönetimi</a></li>
					
                        <li><a href="akillibildirim.php" title="">6.Akıllı Bildirimler</a></li>
					
                        <li><a href="mamalar.php" title="">7.Mamalar</a></li>
					
                        <li><a href="faturaveodeme.php" title="">8.Fatura ve Ödeme Takibi</a></li>
					
                    </ul>
                </li>
                <li><a href="nobetci.php">Nöbetci veterinerler</a></li>
                <li><a href="iletisim.php">İletişim</a></li>
                <li><a href="welcome.php">Giriş</a></li>
                <li><a href="kaydol.php">Kaydol</a></li>
            </ul>
        </nav>
    </div>
    </header>

    <div class="logo">
        <img src="images/asa.png">
    </div>
    <div class="resim2">
        <img src="images/animal.png">
    </div>
    <div class="resim">
        <img src="images/veteriner.png">
    </div>

    <div id="clock">
        <h2>saat</h2>
        <div id="time">
            <div><span id="hour">00</span><span>Hours</span></div>
            <div><span id="minutes">00</span><span>Minutes</span></div>
            <div><span id="seconds">00</span><span>Seconds</span></div>
        </div>
         </div>
         <script type="text/javascript">
        function clock(){
            var hours=document.getElementById('hour');
            var minutes=document.getElementById('minutes');
            var seconds=document.getElementById('seconds');
    
            var h=new Date().getHours();
            var m=new Date().getMinutes();
            var s=new Date().getSeconds();
    
            hours.innerHTML=h;
            minutes.innerHTML=m;
            seconds.innerHTML=s;
        }
        var interval=setInterval(clock,1000);
        </script>

    <div class="middlee">
        <div class="menuu">
            <li class="itemm" id='profile'>
                <a href="#profile" class="btnn"><i class="fas fa-dog"></i>Köpekler Hakkında</a>
                <div class="smenu">
                  <a href="kopekbeslenme.php">Köpeklerde Beslenme</a>
                  <a href="kopekhastalık.php">Köpekler Hastalıkları</a>  
                </div>
            </li>
            <li class="itemm"id='messages'>
             <a href="#messages" class="btnn"><i class="fas fa-cat"></i>Kediler Hakkında</a>
             <div class="smenu">
               <a href="kedibeslenme.php">Kedilerde Beslenme</a>
               <a href="kedihastalık.php">Kedi Hastalıkları</a>
               
             </div>
         </li>
         <li class="itemm" id="settings">
             <a href="#settings" class="btnn"><i class="fas fa-paw"></i>Hamsterler Hakkında</a>
             <div class="smenu">
               <a href="hamsterbeslenme.php">Hamsterlarda Beslenme</a>
               <a href="hamsterhastalık.php">Hamster Hastalıkları</a>  
             </div>
         </li>
         
        </div>
    </div>
   <div class="slider">
       <h1>Veterinerlere Özel Randevu Programı</h1>
       <br>
        <br>
        <p>E-veteriner randevularınızı hızlı ve kolay bir şekilde planlamanızı sağlar. Randevular ile ilgili müşterinizi bilgilendirir ve akıllı bildirimler ile müşterinize hatırlatmalar yapar. Randevu durumuna göre randevunuzu işaretleyerek ve not girerek hangi randevunun ne için ne sebeple oluşturulduğunu yada iptal edildiğini kaydedin.
</p>
    </div
    </div>

    <script type="text/javascript">
    var counter =1;
    setInterval(function(){
document.getElementById('radio'+counter).checked=true;
counter++;
if(counter>4){
    counter=1;
}
    },5000);
    </script>
	 
   
  
</body>
</html>