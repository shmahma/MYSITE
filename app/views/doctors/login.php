<!DOCTYPE = html>
<html lang = fr>
<head>
    <title>LOGIN</title>
    <meta charset="utf-8" name="viewport" content="width:device-width,initial-scale=1">
    <style>
        body
    {
        width:100%;
        height:100%
    }

    .container
    {
        background-color: #000;
        display:flex;
        flex-direction:row;
        justify-content:space-evenly;
        align-items: center;
    }

    .item
    {
        padding: 50px 100px 50px 100px;
        border-radius: 50px;
        border-style:solid;
        border-color: #ffffff;
    }

    input
    {
        cursor:text;
        font-size: 20px;
        border-style: 1px;
        border-radius: 30px;
        padding:20px;
        margin:7px;
    }

    button,input.connexion
    {
        color:white;
        cursor:pointer;
        font-size:15px;
        font-weight:900;
        border-radius: 5px;
        margin:15px;
        box-shadow: 0px 0px 0px 0 rgba(143, 64, 248, .25), 0px 0 px 0px 0px rgba(39, 200, 255, .5);
        transition: all .5s;
    }

    button.inscription:hover
    {
        box-shadow: 10px -10px 30px rgb(170, 0, 133, .25),-10px 10px 30px rgb(255, 136, 0, .25);
        transform: translate(0, -5px);
    }

    button.inscription
    {
        background: linear-gradient(225deg,#aa0085 0%, #ff8800 100%);
        padding:10px 90px 10px 90px;
        font-size:15px;
        border-radius: 30px;
        font-family:Impact;
    }

    input.connexion
    {
        cursor:pointer;
        background: linear-gradient(225deg, #26caf8 0%, #c625d0 100%);
        justify-self: center;
        padding:20px 100px 20px 100px;
        border-radius: 30px;
    }

    input.connexion:hover
    {
        box-shadow: 10px -10px 25px rgba(38, 202, 248, .25),-10px 10px 25px rgba(198, 37, 208, .25);
        transform: translate(0, -5px);
    }
    </style>
</head>
<body class="container">
    <div style="color:PURPLE;">
        <h2> WELCOME !</h2>
    </div>
    <div class="item">
        <form method="post">
            <h1 style="font-weight: 900;color:white;margin-left: 30px;">Connectez-vous</h1>
            <input name="email" placeholder="Adresse mail ou téléphone"  requiered><br>
            <input name="passwd" type="password" placeholder="Mot de passe" requiered><br>
            <input class="connexion" type="submit" value="Connexion"><br>
        </form>
        <section><h6 style="color:white;">Toujours pas de compte?</h6><br>
            <a href="/MYSITE/app/controllers/doctors.php"><button class="inscription">Créer un compte</button></a>
        </section>
    </div>
</body>
</html>