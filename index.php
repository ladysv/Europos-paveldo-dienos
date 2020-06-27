<?php
    require __DIR__ . '/../bepd/kforma/uzklausa.php';
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europos paveldo dienos</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adaa5eca50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
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
    <section class="hero"> <!-- HERO PRADŽIA -->
            <div class="container flex-container"> 
                <div class="hero-text">
                    <h1>Europos paveldo dienos</h1>
                    <p>2020</p>
                </div>
                <div class="hero-nav">
                    <a href="registracija.php"><span class="blink">Renginio regristracija</span></a>
                </div>
            </div>
    </section> <!-- HERO PABAIGA -->
    <section class="about"> <!-- APIE PRADŽIA -->
            <div class="container">
                <div class="about-intro">
                    <h2>Apie Europos paveldo dienas (EPD)</h2>
                    <p>EPD tai dienos, kurių metu organizuojami visuomenei skirti renginiai, siekiant ją supažindinti su kultūros paveldu, parodyti tai, kas paprastai jai neprieinama arba aktualizuoti vienokią ar kitokią kultūros paveldo sritį.</p>
                </div>
                <div class="about-content flex-container">
                    <div class="about-history">
                        <h3>Istorija</h3>
                            <div class="history-events">
                                <div class="event">
                                <p> 1984  </p> <span> Prancūzijoje gimė idėja pradėti rengti paveldo dienas. <br>Jos autorius - Prancūzijos kultūros ministras Jack Lang;</span>
                                </div>
                                <div class="event">
                                <p> 1991  </p><span> Europos Tarybai inicijavus ir parėmus Europos Sąjungai <br>visoje Europoje imta rengti EPD;</span> 
                                </div>
                                <div class="event">
                                 <p> 1994  </p><span> Lietuvoje surengtos pirmosios EPD, kurių koordinavimų <br> iki šiol rūpinasi Kultūros paveldo departamentas.</span> 
                                </div>
                            </div>
                        </div>
                    <div class="about-expertise">
                        <h3>EPD organizavimas</h3>
                        <p>Europos paveldo dienos renginius Lietuvoje koordinuoja ir organizuoja Kultūros paveldo departamentas prie Kultūros ministerijos, bendradarbiaudamas su miestų bei rajonų savivaldybėmis, kultūros įstaigomis bei kitais kultūros paveldo objektų valdytojais. 2020 metais EPD, kurių tema – „Kultūros paveldas ir edukacija“, vyks rugsėjo 11-20 dienomis.</p>
                    </div>
                </div>
            </div>
    </section> <!-- APIE PABAIGA -->
    <section class="practice"> <!-- EPD ORGANIZAVIMO NAUDA PRADŽIA -->
            <div class="container">
                <div class="practice-intro">
                    <h2>Kodėl verta organizuoti EPD?</h2>
                    <p>Mes suprantame, kad atverti kultūros paveldo objektą nemokamam lankymui ar surengti specialų renginį gali būti sudėtinga, tačiau yra daugybė privalumų, dėl kurių Europos paveldo dienų renginio(ių) organizavimas yra vertinga patirtis.</p>
                </div>
                <div class="practice-content">
                        <div class="practice-top flex-container">
                            <div class="practice-service flex-container">
                                <i class="fas fa-users"></i>
                                <div class="container">
                                    <h3>Vietos bendruomenės ugdymas</h3>
                                    <p>Stiprinkite vietinius bendruomenės ryšius: EPD lankytojai sako, kad dalyvavimas EPD renginiuose skatina pasijusti vietinės bendruomenės dalimi.</p>
                                </div>
                            </div>
                            <div class="practice-labour flex-container">
                                <i class="fas fa-handshake"></i>
                                <div class="container">
                                    <h3>Bendradarbiavimo galimybės</h3>
                                    <p>Prisijunkite prie EPD bendruomenės ir kurkite naujus bendradarbiavimo ryšius. Gaukite papildomą savo organizacijos, bendruomenės, renginio viešumą visuomenės informavimo priemonėse.</p>
                                </div>
                            </div>
                        </div>
                        <div class="practice-bottom flex-container">
                            <div class="practice-cyber flex-container">
                                <i class="fas fa-lightbulb"></i>
                                <div class="container">
                                    <h3>Paveldo aktualizavimas</h3>
                                    <p>Dalinkitės tuo, kas jums svarbu, ir skatinkite pažinti jūsų vietos paveldą. Išbandykite naujas idėjas, koncepcijas bei patirtį.</p>
                                </div>
                            </div>
                            <div class="practice-real flex-container">
                                <i class="fas fa-chart-line"></i>
                                <div class="container">
                                    <h3>Švietimas</h3>
                                    <p>Prisidėkite prie ateities visuomenės švietimo: trečdalis EPD lankytojų yra mokiniai ir studentai.Įkvėpkite potencialius savanorius, partnerius ir rėmėjus.</p>
                                </div>
                            </div>
                        </div>
                </div>    
            </div>
    </section> <!-- EPD ORGANIZAVIMO NAUDA PABAIGA -->
    <section class="attorney"> <!-- FAKTAI PRADŽIA -->
            <div class="container">
                <div class="attorney-intro">
                    <h2>2019 m. pasiekimai</h2>
                    <p>Kasmet Europos paveldo dienų metu suorganizuotų renginių bei juose dalyvaujančių žmonių skaičiai ženkliai auga. 2019 m. EPD pasiekimai: </p>
                </div>
                <div class="member flex-container">
                <div class="attorney-member">
                    <img src="images/faktai/1.jpg" alt="Europos paveldo dienos">
                    <h3>Surengta > 350 </h3>
                    <span>renginių.</span>
                </div>
                <div class="attorney-member">
                    <img src="images/faktai/2.jpg" alt="Europos paveldo dienos">
                    <h3>Pristatyta > 550</h3>
                    <span>kultūros paveldo objektų.</span>
                </div>
                <div class="attorney-member">
                    <img src="images/faktai/3.jpg" alt="Europos paveldo dienos">
                    <h3>Dalyvavo > 15 000</h3>
                    <span>dalyvių.</span>
                </div>
                <div class="attorney-member">
                    <img src="images/faktai/4.jpg" alt="Europos paveldo dienos">
                    <h3>Iš jų > 1/3</h3>
                    <span>mokiniai.</span>
                </div>
                </div>
            </div>
    </section> <!-- FAKTAI PABAIGA -->
    <section class="client"> <!-- CLIENT PRADŽIA -->
            <div class="container">
                <div class="client-intro">
                    <h2>Atsiliepimai</h2>
                    <p>Jūsų nuomonė mums svarbi. Tik Jūsų palaikymo dėka Europos paveldo dienos kasmet džiugina vis didesne renginių įvairove.</p>
                </div>
                <div class="client-content flex-container">
                    <img src="images/Atsiliepimai/2.jpg" alt="Alon Smith">
                    <div class="client-comment flex-container"> 
                        <span>“</span>
                        <div class="client-content">
                            <div class="slideshow-container">
                                <div class="mySlides">
                                    <p>Viskas buvo labai labai gerai! Ir toliau organizuoti tokius renginius, pritraukti vis daugiau mokinių iš mažesnių miestelių ir kviesti tokius pat pozityvius, įdomius, motyvuojančius ir įkvėpiančius žmones. Laukiame kitų kartų! </p>
                                    <h3>Aurimas</h3>
                                    <h5>Plungė</h5>
                                </div>
                                <div class="mySlides">
                                    <p>Europos paveldo dienųkasmet laukiu su nekantrumu. Stengiuosi sudalyvauti visuose Kaune rengiamuose renginiuose. Didelis dėkui organizatoriams ir visiems renginių kūrėjams.  </p>
                                    <h3>Raminta</h3>
                                    <h5>Kaunas</h5>
                                </div>
                                <div class="mySlides">
                                    <p>Dėkui už puikias knygų restauracijos dirbtuves vaikams! Paprastomis priemonėmis pasiekėte neįtikėtinai gero rezultato, skatinančio vaikus kurti ir konstruoti. Vaikams LABAI patiko. Mums irgi!</p>
                                    <h3>Tadas</h3>
                                    <h5>Vilnius</h5>
                                </div>
                                <!-- Dots/bullets/indicators -->
                                <div class="dot-container">
                                    <span class="dot" onclick="currentSlide(1)"></span>
                                    <span class="dot" onclick="currentSlide(2)"></span>
                                    <span class="dot" onclick="currentSlide(3)"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section> <!-- CLIENT PABAIGA -->
    <section class="publications"> <!-- PUBLICATIONS PRADŽIA -->
        <div class="container">
            <div class="publications-intro">
                <h2>Aktualijos</h2>
                <p> Sužinok naujienas pirmas!</p>
            </div>
            <div class="publications-content flex-container">
                <div class="content1"> 
                    <img src="images/Aktualijos/4.png" alt="Publication">
                    <h3>Kūrybinis piešinių konkursas</h3>
                    <div class="data-bio flex-container">
                        <div class="author flex-container">
                        <p>Šaltinis </p>
                        <h4>VKPK</h4>
                        </div>
                        <p> 20 Balandžio, 2020</p>
                    </div>
                    <div class="data-about">
                        <p>„Įdarbink“ vaizduotę, žinias ir nupiešk UNESCO pasaulio paveldo vertybes – Vilniaus istorinį centrą, Kuršių neriją, Kernavės piliakalnius ar Struvės geodezinį lanką! Piešinių konkurse gali dalyvauti kiekvienas vaikas. Plačiau </p>
                    </div>
                    <div class="content-nav flex-container">
                        <div class="content-nav-rigt">
                            <i class="fas fa-comments"></i>
                            <a href="#">68 komentarai</a>
                        </div>
                        <div>
                            <i class="fas fa-share"></i>
                            <a href="#">Pasidalinti</a>
                        </div>
                    </div>
                </div>
                <div class="content1"> 
                    <img src="images/Aktualijos/122.png" alt="Publication">
                    <h3>101 EPD renginio idėja</h3>
                    <div class="data-bio flex-container">
                        <div class="author flex-container">
                        <p>Šaltinis </p>
                        <h4>European Council</h4>
                        </div>
                        <p> 7 Kovo, 2020 </p>
                    </div>
                    <div class="data-about">
                        <p>Vis dar negalite apsispręsti kokį renginį suorganizuoti Europos paveldo dienų metu?Įkvėpimui dalinamės Europos Tarybos siūlomomis idėjomis planuojant Europos paveldo dienų'20 renginius. Plačiau </p>
                    </div>
                    <div class="content-nav flex-container">
                        <div class="content-nav-rigt">
                            <i class="fas fa-comments"></i>
                            <a href="#">27 komentarai</a>
                        </div>
                        <div>
                            <i class="fas fa-share"></i>
                            <a href="#">Pasidalinti</a>
                        </div>
                    </div>
                </div>
                <div class="content1"> 
                    <img src="images/Aktualijos/1.png" alt="Publication">
                    <h3>Pasidalink savo istorija</h3>
                    <div class="data-bio flex-container">
                        <div class="author flex-container">
                            <p>Šaltinis </p>
                            <h4>European Council</h4>
                        </div>
                        <div class="metai"> 
                            <p> 11 Vasario, 2020</p>
                        </div>
                    </div>
                    <div class="data-about">
                        <p>Ar turite paveldo istoriją, apie kurią norėtumėte, kad sužinotų visas pasaulis?Skelbiamas kvietimas teikti #Europospaveldodienos istorijas ir pasidalinti savo paveldo istorija su kitomis Europos bendruomenėmis. Plačiau </p>
                    </div>
                    <div class="content-nav flex-container">
                        <div class="content-nav-rigt">
                            <i class="fas fa-comments"></i>
                            <a href="#">13 komentarų </a>
                        </div>
                        <div>
                            <i class="fas fa-share"></i>
                            <a href="#">Pasidalinti</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- PUBLICATIONS PABAIGA -->
    <section id="faq"> <!-- DUK PRADŽIA -->
        <div class="container">
                <div class="faq-intro">
                    <h2>Dažniausiai užduodami klausimai</h2>
                    <p>Raskite atsakymus į dažniausiai užduodamus klausimus apie Europos paveldo dienų organziavimą.</p>
                </div>
            <div class="container">
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'tab1')">Ar mano renginys turi vykti rugsėjį?</button>
        <button class="tablinks" onclick="openTab(event, 'tab2')">Ar mano renginys turi būti nemokamas?</button>
        <button class="tablinks" onclick="openTab(event, 'tab3')">Ar galiu dalyvauti EPD, jei mano renginys neatitinka EPD temos?</button>
        <button class="tablinks" onclick="openTab(event, 'tab4')">Ar mano renginys gali būti organizuojamas ne EPD metu?</button>
        <button class="tablinks" onclick="openTab(event, 'tab5')">Ar aš galiu pakeisti užregistruoto renginio informaciją?</button>
        <button class="tablinks" onclick="openTab(event, 'tab6')">Ar EPD atributika yra nemokama?</button>
    </div>
    <div id="tab1" class="tabcontent"> <!-- Atsakymas -->
        <p>Taip. Europos paveldo dienų renginiai rengiami rugsėji. Jie gali trukti nuo vienos popietės iki kelių dienų, o jų trukmė priklauso tik nuo renginių organizatorių.</p>
    </div>
    <div id="tab2" class="tabcontent"> <!-- Atsakymas -->
        <p>Taip! Mes skatiname, kad kultūros paveldo pažinimas būtų prieinamas visiems žmonėms, nepriklausomai nuo jų socialinės padėties.</p>
    </div>
    <div id="tab3" class="tabcontent"><!-- Atsakymas -->
        <p>Ne – mes tikimės, kad šių metų temą atsispindės Jūsų renginyje. Jei jums sunku rasti ryšį, nesijaudinkite, kreipkitės į mus el. p. epd.info@kpd.lt ir mes jums padėsime sugeneruoti jūsų renginio idėją.</p>
    </div>
    <div id="tab4" class="tabcontent"><!-- Atsakymas -->
        <p>Taip. Mes džiaugiamės bet kokiomis kultūros paveldo objektų aktualizavimo formomis. Visgi, jei nuspręsite organizuoti savo renginį ne EPD metu, mes jo nelaikysime EPD renginiu, į nacionalinę renginių programą jis nebus įtraukiamas, atributika jam nebus skiriama.</p><!-- Atsakymas -->
    </div>
    <div id="tab5" class="tabcontent"><!-- Atsakymas -->
        <p>Taip. Jei jūsų renginys nesikeičia iš esmės (turinys), apie pakeitimus turėsite informuoti nacionalinį koordinatorių.  renginio pakeitimai nėra priimami. Jeigu kinta renginio turinys jūs turėsite užpildyti naują renginio formą.</p>
    </div>
    <div id="tab6" class="tabcontent"> <!-- Atsakymas -->
        <p> Kultūros paveldo departamentas atsižvelgdamas į savo finansines galimybes kasmet paruošia atitinkamiems metams skirtą atributiką, kuri paskirstoma EPD renginių organizatoriams pagal jų pateiktus poreikius.</p>
    </div>
    <div id="tab7" class="tabcontent"> <!-- Atsakymas -->
        <p> Nenori nuobodžiauti Europos paveldo dienų metu? <br> Organizuok jas tu! <br>  Neišsigąsk, <br> tai – nesunku ir <br> paprasta kaip 2x2!</p>
    </div>
        <!--   MFAQ PRADŽIA -->        
    <button class="collapsible">Ar mano renginys turi vykti rugsėjį?</button> <!-- Mygtukas -->
    <div class="content"> <!-- Atsakymas -->
        <p>Taip. Europos paveldo dienų renginiai rengiami rugsėji. Jie gali trukti nuo vienos popietės iki kelių dienų, o jų trukmė priklauso tik nuo renginių organizatorių.</p>
    </div>
    <button class="collapsible">Ar mano renginys turi būti nemokamas?</button><!-- Mygtukas -->
    <div class="content"> <!-- Atsakymas -->
        <p>Taip! Mes skatiname, kad kultūros paveldo pažinimas būtų prieinamas visiems žmonėms, nepriklausomai nuo jų socialinės padėties.</p>
    </div>
    <button class="collapsible">Ar galiu dalyvauti EPD, jei mano renginys neatitinka šių metų EPD temos?</button><!-- Mygtukas -->
    <div class="content"><!-- Atsakymas -->
        <p>Ne – mes tikimės, kad šių metų temą atsispindės Jūsų renginyje. Jei jums sunku rasti ryšį, nesijaudinkite, kreipkitės į mus el. p. epd.info@kpd.lt ir mes jums padėsime sugeneruoti jūsų renginio idėją.</p>
    </div>
    <button class="collapsible">Ar mano renginys gali būti organizuojamas ne EPD metu?</button> <!-- Mygtukas -->
    <div class="content"><!-- Atsakymas -->
        <p>Taip. Mes džiaugiamės bet kokiomis kultūros paveldo objektų aktualizavimo formomis. Visgi, jei nuspręsite organizuoti savo renginį ne EPD metu, mes jo nelaikysime EPD renginiu, į nacionalinę renginių programą jis nebus įtraukiamas, atributika jam nebus skiriama.</p><!-- Atsakymas -->
    </div>
    <button class="collapsible">Ar aš galiu pakeisti savo renginio informaciją, kai apie renginį jau paskelbta nacionaliniu mastu?</button> <!-- Mygtukas -->
    <div class="content"><!-- Atsakymas -->
        <p>Taip. Jei jūsų renginys nesikeičia iš esmės (turinys), apie pakeitimus turėsite informuoti nacionalinį koordinatorių.  renginio pakeitimai nėra priimami. Jeigu kinta renginio turinys jūs turėsite užpildyti naują renginio formą.</p>
    </div>
    <button class="collapsible">Ar EPD atributika yra nemokama?</button><!-- Mygtukas -->
    <div class="content"> <!-- Atsakymas -->
        <p>Kultūros paveldo departamentas atsižvelgdamas į savo finansines galimybes kasmet paruošia atitinkamiems metams skirtą atributiką, kuri paskirstoma EPD renginių organizatoriams pagal jų pateiktus poreikius.</p>
    </div> <!--   MFAQ PABAIGA -->              
</div>
</div>
    </section><!-- DUK PABAIGA -->
    <section id="contact"> <!-- CONTACT PRADŽIA -->
        <div class="container">
                    <div class="contact-intro">
                    <h2>Susisiekite su mumis</h2>
                    <p>Trūksta informacijos? Nerandate ko ieškote? Užpildykite žemiau pateikiamą formą ir mes atsakysime į visus Jūsų klausimus </p>
                </div>
                <div class="contact-content">
                    <div class="contact-form flex-container">
                        <div class="form flex-container">
                        <form id="contact" action="index.php" method="post">
                            <input class="forma" type="text" name="vardas" placeholder="Jūsų vardas...">
                            <input class="forma" type="text" name="email" placeholder="Jūsų elektroninis paštas...">
                            <input class="forma" type="text" name="phone" placeholder="Jūsų telefono numeris...">
                            <textarea class="forma" name="message" rows="6" placeholder="Jūsų klausimas..."></textarea>
                            <button class="btn-form" name="submit" type="submit">Siųsti</button>
                        </form>
                        </div>
                        <div class="map"> 
                            <a href="https://www.google.com/maps/place/Kult%C5%ABros+paveldo+departamentas+prie+Kult%C5%ABros+ministerijos/@54.6931035,25.276365,17z/data=!3m1!4b1!4m5!3m4!1s0x46dd94044143a4a5:0xfe36a9d1de1c10f6!8m2!3d54.6931035!4d25.2785537" target="_blank">
                            <img src="images/map.png" height="363" width="363" alt="Žemėlapis"></a>
                        </div>
                    </div>
            </div>
        </div>
        </section><!-- CONTACT PABAIGA -->
    <section class="pre-footer"> <!-- PRE-FOOTER PRADŽIA-->
         <div class="container">
		<div class="pre-footer-nav">
		<h4><a href="#top"><i class="fas fa-hand-point-up"></i> Į viršų </a></h4>
        </div>
        </div>
    </section>
        <?php
            include ('footer.php');
        ?>
    <script src="scripts/jquery.min.js"></script>
    <script src="scripts/jq-style.js"></script>
    <script src="scripts/tab.js"></script>
    <script src="scripts/slide.js"></script>
    <script src="scripts/mfaq.js"></script>
</body>
</html>