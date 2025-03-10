<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
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
        <a href="projecten.php">
            <button>Projecten</button>
        </a>
        <a href="talen.html">
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
        <h1>
            Hier is een simpel overzicht van wat ik kan:
        </h1>

        <table style=" border-collapse: collapse; margin-top: 50px">
            <tr align="center">
                <th style="border: 2px solid black; padding: 20px;">Talen</th>
                <th style="border: 2px solid black; padding: 20px;">Beginner</th>
                <th style="border: 2px solid black; padding: 30px;">Novis</th>
                <th style="border: 2px solid black; padding: 20px;">Expert</th>
            </tr>
            <tr align="center">
                <td style="border: 2px solid black; padding: 20px;">HTML</td>
                <td style="border: 2px solid black; padding: 20px;"></td>
                <td style="border: 2px solid black; padding: 20px;"></td>
                <td style="border: 2px solid black; padding: 20px;">&#x2713;</td>
            </tr>
            <tr align="center">
                <td style="border: 2px solid black; padding: 20px;">CSS</td>
                <td style="border: 2px solid black; padding: 20px;"></td>
                <td style="border: 2px solid black; padding: 20px;">&#x2713;</td>
                <td style="border: 2px solid black; padding: 20px;"></td>
            </tr>
            <tr align="center">
                <td style="border: 2px solid black; padding: 20px;">JavaScript</td>
                <td style="border: 2px solid black; padding: 20px;">&#x2713;</td>
                <td style="border: 2px solid black; padding: 20px;"></td>
                <td style="border: 2px solid black; padding: 20px;"></td>
            </tr>
        </table>
        <br><br>
        Ik hoop nog meer verschillende computer-talen te leren tijdens mijn opleiding,<br>
        en misschien zelfs tijdens stage dat we in het 2e leerjaar moeten doen.<br>
        Ik ben geïntresseerd in hoe ze verschillen van elkaar.
    </section>

</section>
<footer>
</footer>
</body>
</html>