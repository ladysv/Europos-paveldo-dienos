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
        <section class="programa">
            <div class="container">
                <h2>Pasirinkite Lietuvos regioną</h2>
                <div class="lietuva">
                    <img src="inside-images/LT.jpg"  width="674" height="518" alt="Žemėlapis" usemap="#lt">
                    <map name="lt">
                        <area title="Alytaus regionas" alt="Alytaus regionas" coords="475,408,475,418,464,425,467,436,454,450,464,486,439,500,414,511,402,510,386,501,340,513,307,496,311,481,287,438,294,416,312,403,325,393,337,401,356,400,363,390,375,387,394,385,408,392,415,408,427,411,436,407,447,416,361,445" shape="poly" href="../bepd/map/alytus.php" target="_blank">
                        <area title="Kauno regionas" alt="Kauno regionas" coords="286,176,333,191,358,177,382,198,404,195,415,211,439,276,430,286,456,303,453,318,436,321,417,375,379,374,356,388,342,385,328,357,303,293,321,283,306,272,312,246,268,237,247,227,227,201,225,191,235,184,245,187,247,197,267,187,272,177" shape="poly" href="../bepd/map/kaunas.php" target="_blank">
                        <area title="Klaipėdos regionas" alt="Klaipėdos regionas" coords="26,74,40,72,43,58,81,28,119,17,123,53,113,70,92,77,80,110,78,127,92,137,106,169,104,200,117,200,120,210,103,229,104,241,67,246,41,233,9,223" shape="poly" href="../bepd/map/klaipeda.php" target="_blank">
                        <area title="Marijampolės regionas" alt="Marijampolės regionas" coords="199,276,205,281,242,270,276,276,295,283,293,290,279,299,298,313,303,349,313,375,309,381,297,377,282,397,268,417,256,417,212,397,203,368,209,339,221,323,216,305,200,296,196,285" shape="poly" href="../bepd/map/marijampole.php" target="_blank">
                        <area title="Panevėžio regionas" alt="Panevėžio regionas" coords="462,4,482,47,536,51,570,83,550,116,539,124,503,122,484,131,452,129,442,170,418,181,383,171,368,153,382,139,384,125,376,109,388,97,383,86,392,58,391,40,410,30,424,36,432,32,434,18" shape="poly" href="../bepd/map/panevezys.php" target="_blank">
                        <area title="Šiaulių regionas" alt="Šiaulių regionas" coords="365,149,368,127,357,114,369,106,371,97,362,91,380,61,371,36,340,21,319,28,299,19,283,20,276,32,268,27,266,13,225,22,227,56,219,59,227,70,229,79,225,91,234,99,227,108,224,117,214,123,217,137,211,142,228,177,250,177,262,176,271,168,277,164,286,163,293,169,309,175,328,178,349,165" shape="poly" href="../bepd/map/siauliai.php" target="_blank">
                        <area title="Tauragės regionas" alt="Tauragės regionas" coords="184,173,221,228,229,228,260,241,273,250,274,264,262,270,234,265,198,270,152,273,133,268,110,251,119,239,127,235,144,217,132,211,128,198,131,184,150,176,169,170" shape="poly" href="../bepd/map/taurage.php" target="_blank">
                        <area title="Telšių regionas" alt="Telšių regionas" coords="150,17,212,27,210,55,215,74,218,87,212,100,216,107,208,120,198,148,187,156,170,149,157,154,148,163,133,164,122,155,120,138,109,137,96,124,105,94,123,73,130,69,139,69,145,56,143,43,141,34" shape="poly" href="../bepd/map/telsiai.php" target="_blank">
                        <area title="Utenos regionas" alt="Utenos regionas" coords="531,132,543,134,558,127,581,99,637,141,636,181,626,190,655,194,656,202,624,215,596,212,586,205,562,205,559,218,567,225,562,240,518,241,510,227,510,213,491,197,475,191,464,170,462,145,469,135,493,134,507,137" shape="poly" href="../bepd/map/utena.php" target="_blank">
                        <area title="Vilniaus regionas" alt="Vilniaus regionas" coords="558,277,559,255,572,234,669,238,666,257,627,274,618,292,575,326,577,361,565,402,580,414,582,436,567,446,548,435,553,419,528,424,508,445,483,442,472,427,489,411,488,401,471,400,438,393,437,361,446,335,452,322,470,321,470,307,453,292,461,282,439,249,436,237,442,220,451,210,461,201,478,210,481,227,495,228,506,237,515,246,524,256,519,276,527,282" shape="poly" href="../bepd/map/vilnius.php" target="_blank">
                    </map>
                </div>
                <div class="regionai">
                    <div class="regionai1 flex-container">
                        <a href="../bepd/map/alytus.php"><img src="inside-images/regionai/alytus.jpg" alt="Alytus"></a>
                        <a href="../bepd/map/kaunas.php"><img src="inside-images/regionai/kaunas.jpg" alt="Kaunas"></a>
                        <a href="../bepd/map/klaipeda.php"><img src="inside-images/regionai/klaipeda.jpg" alt="Klaipėda"></a>
						<a href="../bepd/map/marijampole.php"><img src="inside-images/regionai/marijampole.jpg" alt="Marijampolė"></a>
                    </div>
                    <div class="regionai2 flex-container">
                        <a href="../bepd/map/panevezys.php"><img src="inside-images/regionai/panevezys.jpg" alt="Panevėžys"></a>
                        <a href="../bepd/map/siauliai.php"><img src="inside-images/regionai/siauliai.jpg" alt="Šiauliai"></a>
						<a href="../bepd/map/taurage.php" ><img src="inside-images/regionai/taurage.jpg" alt="Tauragė"></a>
                        <a href="../bepd/map/telsiai.php" ><img src="inside-images/regionai/telsiai.jpg" alt="Telšiai"></a>
                    </div>
                    <div class="regionai3 flex-container">
                        <a href="../bepd/map/utena.php" ><img src="inside-images/regionai/utena.jpg" alt="Utena"></a>
						<a href="../bepd/map/vilnius.php"><img src="inside-images/regionai/vilnius.jpg" alt="Vilnius"></a>
                    </div>  
                        <div class="regionai4 flex-container">
                    </div>
                </div>
            </div>
        </section>
    <?php
		include ('pre-footer.php');        
		include ('footer.php');
    ?>
    <script src="jquery.min.js"></script>
    <script src="jq-style.js"></script>
</body>
</html>