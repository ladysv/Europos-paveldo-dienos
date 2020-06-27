<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europos paveldo dienos</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adaa5eca50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/basic.css">
    <link rel="stylesheet" href="css/inside.css">
    <script>
        function myFunction() {
            var x = document.getElementById("mMenu");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
                }
            }
    </script>
</head>
<body>
    <?php
        include ('header.php');
    ?>
        <section class="galerija">
        <div class="container">
            <h2>Nuotraukų galerija</h2>
            <div class="slideshow-container">
            <div class="mySlides fade">
                <img src="images/Galerija/1.jpg" style="width:100%" alt="EPD renginio Betygaloje akimirka">
                <div class="text">„Betygalos piliakalnio ir Aukos (Alkos) sutvarkymo ir pritaikymo lankymui“ projekto pristatymas visuomenei. </div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/2.jpg" style="width:100%" alt="EPD renginio Molėtuose akimirka">
                <div class="text">Renginys „Europos paveldo dienos’19 „Kultūros paveldas: pažink ir pramogauk“.</div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/11.jpg" style="width:100%" alt="EPD renginio Žemaitijoje akimirka">
                <div class="text">Išvykstamoji ekskursija „Pažink Žemaitijos paveldą pramogaudamas: Mažeikiai“ </div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/4.png" style="width:100%" alt="EPD renginio Rietave akimirka">
                <div class="text">2019 m. Europos paveldo dienų renginys Rietave</div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/5.jpg" style="width:100%" alt="EPD renginio Panevėžyje akimirka">
                <div class="text">Pėsčiųjų žygis skirtas Laisvės kovoms</div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/6.jpg" style="width:100%" alt="EPD atidarymo renginio akimirka">
                <div class="text">Europos paveldo dienų atidarymo renginys Vilniuje.</div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/7.jpg" style="width:100%" alt="EPD renginio Vilniuje akimirka">
                <div class="text">Ekskursija po Sapiegų rūmus Vilniuje.</div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/8.jpg" style="width:100%" alt="EPD renginio Kaune akimirka">
                <div class="text">Orientacinis-pažintinis žaidimas dviračiais „įMINK kultūros paveldo paslaptis“ 
                </div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/9.jpg" style="width:100%" alt="EPD renginio Baublių muziejuje akimirka">
                <div class="text">Ekskursija D. Poškos Baublių muziejuje
                </div>
            </div>
            <div class="mySlides fade">
                <img src="images/Galerija/12.jpg" style="width:100%" alt="EPD renginio Rėkyvoje akimirka">
                <div class="text">Interaktyvi ekskursija „Rėkyvos lobių paieška“</div>
            </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
            <br>
            <div style="text-align:center">
              <span class="dot" onclick="currentSlide(1)"></span> 
              <span class="dot" onclick="currentSlide(2)"></span> 
              <span class="dot" onclick="currentSlide(3)"></span> 
              <span class="dot" onclick="currentSlide(4)"></span> 
              <span class="dot" onclick="currentSlide(5)"></span> 
              <span class="dot" onclick="currentSlide(6)"></span> 
              <span class="dot" onclick="currentSlide(7)"></span> 
              <span class="dot" onclick="currentSlide(8)"></span> 
              <span class="dot" onclick="currentSlide(9)"></span> 
              <span class="dot" onclick="currentSlide(10)"></span> 
            </div>
            </div>
	</section>
    <?php
		include ('pre-footer.php');        
		include ('footer.php');
    ?>
    <script src="scripts/galerija.js"></script>
    <script src="jquery.min.js"></script>
    <script src="jq-style.js"></script>
</body>
</html>