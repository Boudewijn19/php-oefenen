<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Form</title>
    <link rel="stylesheet" href="./Contact-Form.css">
</head>
<body>
<a href="index.php">
<img src="img/b.png" height="100px"  padding="0">
</a>
<a href="https://github.com/dashboard">
<img src="img/Github-Logo.png" height="100px">
</a>

<h1>Contact Form</h1>
    <form action="https://formspree.io/f/meoqovra" method="POST">
<input type="text" name="first" placeholder="Voornaam" autocomplete="off" required>
<input type="text" name="last" placeholder="Achternaam" autocomplete="off" required>
<input type="email" name="email" placeholder="Email adres" autocomplete="off" required>
<textarea rows="5" cols="60" name="message" placeholder="Voer je tekst in.." autocomplete="off" required></textarea>
<button type="submit">Stuur bericht</button>
    </form>

</body>
</html>