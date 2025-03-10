<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tweede Pagina</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
</nav>
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
        <a href="projecten.html">
            <button>Projecten</button>
        </a>
        <a href="talen.php">
            <button>Talen</button>
        </a>
        <a href="video.php">
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
        <main>
            <h1 style="text-align: center;">Welkom op de Tweede Pagina</h1><br>
            <p style="text-align: center; margin-bottom: 30px">Hier kunt u mijn projecten zien die ik gemaakt heb en nog
                mee bezig ben.</p>
            <table border="2" cellspacing="0" cellpadding="10"
                   style="margin: 0 auto; width: 700px; height: 375px; border-collapse: collapse; ">
                <tr>
                    <td id="td1"><img id="Placeholder1" src="img/Placeholder-image.png"></td>
                </tr>
            </table>
            <section style="display: flex; justify-content: space-between; gap: 15px; padding: 20px;">
                <table align="left" border="2" cellspacing="0" cellpadding="10"
                       style="margin: 15px auto; width: 400px; height: 250px; border-collapse: collapse;">
                    <tr>
                        <td id="td1"><img id="Placeholder1" src="img/Placeholder-image.png"></td>
                    </tr>
                </table>
                <table align="center" border="2" cellspacing="0" cellpadding="10"
                       style="margin: 15px auto; width: 400px; height: 250px; border-collapse: collapse;">
                    <tr>
                        <td id="td1"><img id="Placeholder1" src="img/Placeholder-image.png"></td>
                    </tr>
                </table>
                <table align="right" border="2" cellspacing="0" cellpadding="10"
                       style="margin: 15px auto; width: 400px; height: 250px; border-collapse: collapse;">
                    <tr>
                        <td id="td1"><img id="Placeholder1" src="img/Placeholder-image.png"></td>
                    </tr>
                </table>
            </section>
        </main>

</body>
</html>
