<!doctype html>

<html lang="nl" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title style="font-size: 30px">Boudewijns Portfolio</title>
</head>
<body>

<!--<header>-->
<!--    <img src="img/b.png" height="100px" style="float: left" padding="0">-->
<!--    <h1 style="font-size: 30px">Mijn Portfolio</h1>-->
<!--    <p style="font-size: 25px"><small>Welkom bij mijn portfolio!</small></p>-->
<!--</header>-->

<!--Start voor de hamburger menu-->
<section>
    <button id="menu-toggle"><img src="img/hamburger-icoon.png" alt="Menu"></button>
    <section id="MyLinks" class="hidden">
        <button id="close-menu"><img src="img/x.png" alt="Sluit menu"></button>
        <a href="Home.html">Home</a>
        <a href="projecten.html">Projecten</a>
        <a href="talen.html">Talen</a>
        <a href="video.html">Interview</a>
        <a href="Contact-Form.html">Contact</a>
    </section>
</section>

<!--<script>-->
<!--    const menuToggle = document.getElementById("menu-toggle");-->
<!--    const menuCloseButton = document.getElementById("close-menu");-->
<!--    const menu = document.getElementById("MyLinks");-->

<!--    menuToggle.addEventListener("click", () => {-->
<!--        menu.classList.add("open"); //Hierdoor opent het menu.-->
<!--        menu.classList.remove("hidden"); //Zo zie je het menulijst opkomen.-->
<!--        console.log("Menu geopend, hidden verwijderd");-->
<!--    });-->

<!--    menuCloseButton.addEventListener("click", () => {-->
<!--        menu.classList.remove("open"); //Het menu sluit.-->
<!--        menu.classList.add("hidden"); //Zo komt de .hidden weer en zorgt dat de menulijst verdwijnt.-->
<!--    });-->
<!--    console.log(menuCloseButton);-->
<!--</script>-->

<script>
    document.cookie = "Firstname=-; Expires=Sunday, 1 January 2030 12:00:00 UTC; path:/";
    document.cookie = "Lastname=-; Expires=Sunday, 1 January 2030 12:00:00 UTC; path:/";

    console.log(document.cookie);
    //Hierdoor wordt het gelogged in de console.
</script>

<p id="begroeting">’
    <script>
        function getGreeting() {
            const now = new Date();
            const hours = now.getHours();

            if (hours < 12) {
                return "Goedemorgen!"; //Laat bericht zien voor 12 uur
            }
            if (hours < 18) {
                return "Goedemiddag!"; //Laat bericht zien voor 18 uur en na 12 uur.
            }

            return "Goedeavond!"; //Laat bericht zien na 18 uur.
        }

        document.getElementById('begroeting').textContent = getGreeting();
        console.log(getGreeting());
        //Logt het in de console.
    </script>
</p>

<!--<section id="countdown"></section>-->
<!--<script>-->
<!--    const startingMinutes = 10;-->
<!--    //Hierdoor start de timer met 10 minuten.-->
<!--    let time = startingMinutes * 60;-->

<!--    const countdownEl = document.getElementById("countdown");-->

<!--    setInterval(updatecountdown, 1000);-->

<!--    function updatecountdown() {-->
<!--        const minutes = Math.floor(time / 60);-->
<!--        //Dit zorgt ervoor dat de tijd door 60 wordt gedeeld.-->
<!--        let seconds = time % 60;-->
<!--        //Dit is de rest van wat er over is die gedeeld wordt door 60.-->

<!--        seconds = seconds < 10 ? '0' + seconds : seconds;-->
<!--        //Dit controleert of de waarde onder 10 is en zorgt ervoor dat er altijd 2 cijfers zijn, dus je iet niet 9, maar 09.-->

<!--        countdownEl.innerHTML = `${minutes}: ${seconds}`;-->
<!--        console.log(`${minutes}: ${seconds}`);-->
<!--        //Logt de timer in console.-->
<!--        time&#45;&#45;;-->
<!--    }-->
<!--</script>-->

<section class="container">
    <section class="sidebar">

        <a href="home.html">
            <button>Wie ben ik?</button>
        </a>
        <a href="projecten.html">
            <button>Projecten</button>
        </a>
        <a href="talen.html">
            <button>Talen</button>
        </a>
        <a href="video.html">
            <button>Interview</button>
        </a>
        <a href="Contact-Form.html">
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

        <h2>
            Welkom op mijn website, hier kunt u lezen over wie ik ben, wat ik doe en kan.<br>
        </h2>

        <br><br>

        <h3 align="center">Wie ben ik?</h3>

        <p>

            <br><br>

            Mijn naam is Boudewijn, ik ben 19 jaar, ik ben geboren in Rotterdam. Ik ben student op het Techniek
            college Rotterdam en studeer ICT.<br>
            Voor meer informatie over de opleiding kunt u op deze link klikken:

            <a href="https://www.techniekcollegerotterdam.nl/opleidingen/it-en-online/software-developer-bol"
               target="_blank">Software Developer</a>.<br>

            Ik heb op de middelbare school in het eerste en tweede jaar HAVO gedaan, en daarna op het derde en
            vierde
            MAVO.<br>
            Ik heb mijn diploma in 1x gehaald. Na de middelbare school wist ik niet goed wat ik ging doen,<br>
            uiteindelijk heb ik een 1 jarige studie gedaan op het STC op de locatie Waalhaven. Ik heb het afgemaakt,<br>
            maar ik ben niet door gegaan in dat vakgebied want ik vond het halverwege al niet meer zo leuk.<br>
        </p>

        <br><br>

        <br><br>


        <section class="tekstimg">

            <section class="tekst">

                <section class="leuk">

                    <h3>Wat vind ik leuk om te doen?</h3><br><br>
                    <p>
                        Mijn hobbies zijn lezen, muziek luisteren, ik game graag en ik vind het fijn om door het bos
                        te
                        wandelen.<br>
                        Naast mijn hobbies vind ik het ook niet verkeerd om op de werkvloer te staan. <br>
                        Ik houd ook heel veel van katten en thuis hebben we er 2, mijn broer heeft er 1 en ik heb
                        ook
                        mijn eigen kat.
                    </p>

                </section>

                <br><br>

                <section class="Ervaring">

                    <h3>Mijn ervaring</h3><br><br>
                    <p>
                        Voor de vorige opleiding moest ik stage lopen voor. Uiteindelijk heb ik een stage plek
                        gevonden
                        in een magazijn.<br>
                        Ik heb daar orders verzameld, ingepakt en ik heb geholpen met de paketten bezorgen.<br>
                        Ze hebben persoonlijk aan mij verteld dat ik een goeie stagair was.<br>
                        Daarnaast heb ik een bijbaan bij de Albert Heijn, daar werk ik nu 3 jaar. Ik ben
                        klantvriendelijk en ik help mijn collega's.<br><br>
                        Mijn kwaliteiten zijn: Ik ben een eerlijk persoon, ik ben loyaal, ik kan goed luisteren en
                        ben bescheiden.<br>
                        Mijn slechte eigenschappen zijn dat ik moeilijk nee kan zeggen en soms kan ik slecht
                        concentreren.
                    </p>

                    <p>
                        Waarom ik deze opleiding volg is omdat ik een interesse heb gekregen in ICT. Ik heb ook een
                        paar
                        vrienden die al een paar jaar deze opleiding volgen,<br>
                        en ze hebben het ook meerdere keren mij deze opleiding aangeraden. De opleiding is wel in de
                        richting van wat ik had verwacht,<br>
                        en ik heb het naar me zin.
                    </p>

                </section>
            </section>

            <section class="img">
                <a href="catmeme.html">
                    <img src="img/Kat-foto.jpg" height="450px" width="350px">
                </a>
            </section>
        </section>
    </section>
</section>

</body>
</html>
