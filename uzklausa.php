<?php 
    if(isset($_POST['submit'])){
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $message = trim($_POST['message']);

if(!empty($vardas) && !empty($email) && !empty($phone) && !empty($message)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $from = "$email";
        $to = "aaa@gmail.com";
        $subject = "Nauja zinute";
        $autorius = 'Nuo: ' . $vardas . ', ' . $email;
        $zinute = htmlspecialchars($message);
      //  mail($to, $subject, $autorius, $zinute, $from);
        echo "<script>alert('Dėkojame. Jūsų zinute gauta. Netrukus su jumis susisieksime.');</script>";
    }
}
        include ('db.php');
    }
?>             