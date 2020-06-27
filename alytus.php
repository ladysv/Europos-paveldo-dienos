<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Europos paveldo dienos</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/adaa5eca50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/basic.css">
    <link rel="stylesheet" href="../css/inside.css">
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
        include('../map/top.php');
    ?>
    <div class="regionas-container">
        <p>Informacija ruošiama.</p>
    </div> 
	
    <?php
		include('../map/bottom.php');        
		include('../footer.php');
    ?>
</body>
</html>