<html>
    <head>
        <meta charset ="utf-8"/>
        <title>Inscription</title>
        
        <style>
        input.inscription{
            background: linear-gradient(225deg, #26caf8 0%, #c625d0 100%);
            font-family: Impact;
            color: white;
        
        }
        h1{
            color: white;
            font-family: Impact;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;

            
            
        }

        input{
            padding: auto;
            margin: 10px;
            background-color: linear-gradient(225deg, #26caf8 0%, #c625d0 100%);;
            justify-self: center;
            padding:20px 70px 20px 70px;
            font-family: Impact;
            border-radius: 30px;
            
            
        }
        form{
            border: 5px solid white;    
            color: white;
            justify-self: center;
            font-family: Impact;
            padding:20px 70px 20px 70px;
            border-radius: 30px;
            justify-content:space-evenly;
            align-items: center;
        }
        div{
            justify-content: left;
        }

        
    </style>
        

    </head>
    <body class="container">
        <div style="color:white">
        </div>
        <form method="post">
        <input name="name" placeholder ="Nom" type="text" required ><span style="color:red"><?=$data['name']?></span><br>
        <input name="email" placeholder="Email" type="email" ><span style="color:red"><?=$data['email']?></span><br>
        <input name="passwd" placeholder="Passwd" type="password"><span style="color:red"><?=$data['passwd']?></span><br>
        <input name="speciality" placeholder="Speciality" type="text""><span style="color:red"><?=$data['speciality']?></span><br>
        <input class = inscription type =submit value="S'inscrire">
        </form>
        
</html>
