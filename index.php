<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $nom= "alin";
    $Prenom= "mans";
    $number1= 100;
    $number2= 100;
    $bool= true;
    $rab=["alpha"=>"alin","alpha2"=>"alin2"]; 
    $age=22;

    // $nomComplet =$nom. " ". $Prenom;
    // echo "<p> Bonjour Je suis ".$nom. " " .$Prenom.  "</p>";
    if ($age>=18) {
         echo "<p class=success> vous pouvez suivre </p>";
    }
    else{
        echo "<p class= text> vous ne pouvez pas suivre </p>";
    }

    // ..................avec le formulaire..........................



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $mdp = $_POST["mdp"];

}
if ($firstname === "utilisateur" && $mdp === "motdepasse") {
        echo "Connexion réussie !";
    } else {
        echo "Échec de la connexion.";
    }

    ?>


    <style>
        .text{
            color:bleu;
        }
        .success{
            color:red;
        }

        /* ........ */

        body{
    /* background-color: pink; */
    background: linear-gradient(to right, #ad5e5e, #71ad71);
}
/* "php.validate.exeucutablePath":"c:xampp/php:php.exe" */
.form1{
    width: 25%;
   border: 1px rgb(90, 133, 162) solid;
   height: 300px;
   margin: auto;
background-image: url(../img/deco3.png);
background-repeat: no-repeat;
background-size: cover;
margin-top: 30px;
    position: relative;
}
form{
    margin-left: 40px;
    margin-top: 20px;

}
.first{
    padding-right: 50px;
}
.last{
    padding-right: 60px;
}
.email{
    padding-right: 80px;
}
button{
    padding: 5px;
    position: absolute;
    bottom: 60px;
    right: 20px;
    border-radius: 40px;
    background: linear-gradient(to right, #ad5e5e, #71ad71);

}
.mdp{
    padding-right: 20px;
}

    </style>

    
    <div class="form1">
        <form>
            <label class="first" for="text">firstname</label>
            <input type="text" id="firstname" name="nom1" required placeholder="firstname"> <br><br>
            <label class="last" for="text">lastnam</label>
            <input type="text" id="lastname" name="nom2" required placeholder="lastname"> <br><br>
            <label class="email" for="text">emal</label>
            
            <input type="text" id="email" name="nom3" required placeholder="email"><br><br>
            <label class="mdp" for="motdepasse">Mot de passe</label>
            <input type="password" id="motdepasse" name="motdepasse" required placeholder="mdp">
            <br>
            <button type="submit">envoyer</button>
        </form>
    </div>
</body>
</html>