<!doctype html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Boudewijn</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--<header>-->
<!--    <img src="img/b.png" height="100px" style="float: left" padding="0">-->
<!--    <h1 style="font-size: 30px">Mijn Portfolio</h1>-->
<!--    <p style="font-size: 25px"><small>Welkom bij mijn portfolio!</small></p>-->
<!--</header>-->
<section class="container">
    <section class="sidebar">

        <a href="index.php">
            <button>Wie ben ik?</button>
        </a>
        <a href="projecten.php">
            <button>Projecten</button>
        </a>
        <a href="talen.php">
            <button>Talen</button>
        </a>
        <a href="video.html">
            <button>Interview</button>
        </a>
        <a href="Contact-Form.php">
            <button>Contact</button>
        </a>
        <a>
            <button id="Light-Theme">Light Theme</button>
        </a>
    </section>
    <script>
        const button = document.getElementById("Light-Theme");

        button.addEventListener("click", () => {
            document.body.classList.toggle("dark-theme");

            if (document.body.classList.contains("dark-theme")) { // Veranderd de tekst van de knop naar Dark Theme als je erop klikt.
                button.textContent = "Dark Theme";
            } else {
                button.textContent = "Light Theme";               // Veranderd de tekst van de knop naar Light Theme als je erop klikt.
            }
            console.log("Light-Theme");
        });
    </script>
    <section class="main-area">
        <video width="700" height="500" controls>
            <source src="video/Interview.mp4" type="video/mp4">
        </video>
        <p> In deze video heb ik een kort interview met een klasgenoot van mij waar ik 5 vragen stel over onze
            opleiding.<br>

    </section>
</section>
<footer>
</body>
</html>