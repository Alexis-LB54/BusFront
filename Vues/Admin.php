<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Admin Dashboard</title>
</head>

<body>
    <style>
        body {
            background-image: url('https://w7.pngwing.com/pngs/171/887/png-transparent-leia-organa-anakin-skywalker-poster-film-darth-vader-photography-computer-wallpaper-film-poster.png');
            color: red;
            background-size: cover;
        }
    </style>
    <div>
        Coucou Admin
    </div>
    <div>
        <h1>Page de l'Admin pour tout savoir de l'Etoile Noire</h1>
        <h2>
            Ensuite, nous irons massacrer les petits ewoks,<br />
            les petits jawas et les enfants Jedi <br />
            Juste parce que c'est drôle d'être méchant ! <br />
            Mouhahahaha !!
        </h2>
    </div>
    <form action="#" method="POST" id="connection">
        <div>
            <label for="email"> Email :</label>
        </div>

        <div>
            <input name="email" type="email" required id="email" />
        </div>

        <div>
            <label for="password">Password :</label>
        </div>

        <div>
            <input name="password" type="password" required id="password" />
        </div>

        <div>
            <button class="btn btn-primary" type="submit">
                <span class="d-none spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                Join me on the dark side !!
            </button>
        </div>
    </form>
    <div>
        <a name="Accueil" href="/index.php">Accueil</a>
    </div>
    <div id="contenu">
        Voyage intergalactique :
    </div>
</body>
<footer>
    <script src="/Controller/Admin.js" type="module"></script>
</footer>

</html>