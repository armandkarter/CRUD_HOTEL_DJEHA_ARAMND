<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de chambres d'Hôtel</title>
<style>body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

nav {
    background-color: #333;
    color: white;
    padding: 10px;
}

nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav a {
    text-decoration: none;
    color: white;
}

header {
    text-align: center;
    padding: 50px 0;
    background-color: #444;
    color: white;
}

section {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
    background-color: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

footer {
    text-align: center;
    padding: 10px;
    background-color: #333;
    color: white;
}

div {
    text-align: center;
    margin-top: 20px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #007BFF;
    color: white;
    border: none;
    border-radius: 5px;
    margin: 0 10px;
}

button:hover {
    background-color: #0056b3;
}
</style>
</head>
<body>

<nav>
    <ul>
        <li><a href="#">Accueil</a></li>
    </ul>
</nav>



<section>
    <p>VOUS DEVEZ AVOIR D'ABORD 3 CHAMBRES ENREGISTREES</p>
</section>

<footer>
    <p>&copy; 2024 Gestion d'Hôtel</p>
</footer>

<div>
    <a href="{{ route('rooms.index') }}"><button>Retour</button></a>
</div>

</body>
</html>
