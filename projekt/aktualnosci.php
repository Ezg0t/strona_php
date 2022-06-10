<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    <link rel="icon" href="Obrazy/Lol.png">
	
	
    <title> League of Legends | Informacje </title>

    <link href='http://fonts.googleapis.com/css?family=Merienda+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	
	
	
</head>

	

<body>
<?php
session_start();
if (!isset($_SESSION['uprawnienia']))
{
	header('Location: index.php');
		exit();
}
 echo "<div class='pasek'><b>Witaj ";
echo $_SESSION['uzytkownik'];
echo "</b><a href='wyloguj.php'> <button type='button'>Wyloguj się</button></a> ";
if ($_SESSION['uprawnienia']=='admin')
{
	echo "<a href='admin.php'> <button type='button'>PANEL ADMINA</button></a> </div>";
	
}
else
{
	echo "</div>";
}

	

	?>
	




    <div class="content">
<img src="Obrazy/obraz.png">
        

        <div class="menu nav">
            <a href="aktualnosci.php" class="current">Aktualnosci</a>
            <a href="bohaterowie.php">Bohaterowie</a>
            <a href="Uniwersum.php">Regiony</a>
            <a href="Esport.php">Esport</a>
            <div class="podkresl"></div>
        </div>


    </div>
    <div class="sekcje">
        <div class="sekcja lewa" style="background-color:rgb(240, 240, 240)">
            <img class="separator" src="Obrazy/rainbow.jpg" height="6">
            <h2 class="naglowek">Prezentacja bohatera Viego</h2>

            <div class="videoWrapper"><iframe class="media" width="560" height="315" src="https://www.youtube.com/embed/z5FzPeqYnW4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div><br>


            <div class="historia">
                <center><b>
                        ZNISZCZONY<br>
                        KRÓL<br><br>
                    </b> </center>


                Niewielu wie o królestwie na wschodzie, daleko za morzami, którego nazwa została pochłonięta przez ruiny opiewające jego brzegi. Jeszcze mniej wie o jego głupim, młodym władcy, którego zranione miłością serce doprowadziło do jego zniszczenia.
                Teraz jest poważnym zagrożeniem dla każdego. Imię tego mężczyzny brzmiało i nadal brzmi „Viego”. <br><br>

Viego, drugiemu synowi wcześniej panującego króla, władza nigdy nie była pisana. Zamiast tego wiódł życie pełne komfortu, przez co był beztroski i egoistyczny. Kiedy jednak jego starszy brat niespodziewanie zmarł, Viego, który nie posiadał ani zapału, ani zdolności do rządzenia, nagle znalazł się na tronie.<br><br>

Nie okazywał zainteresowania swoim stanowiskiem, dopóki nie spotkał biednej krawcowej, Izoldy. Tak bardzo spodobała mu się jej uroda, że młody król się oświadczył.<br><br>

Ich romans był czarujący, a Viego, który rzadko okazywał zainteresowanie kimkolwiek innym niż on sam, poświęcił jej swoje życie. Ta dwójka była nierozłączna — rzadko kiedy chodził gdziekolwiek bez Izoldy, zawsze hojnie obdarowywał swoją królową i nigdy nie odwracał od niej uwagi, kiedy była obecna.<br><br>

Tak więc pewnego dnia na Viego został podniesiony zatruty sztylet zabójcy. Jednak król był dobrze chroniony i sztylet nie trafił — drasnął jednak Izoldę.<br><br>

Toksyna zadziałała szybko, a Izolda popadła w zgubne męczarnie, podczas gdy Viego mógł jedynie patrzeć z przerażeniem, jak stan jego żony pogarszał się coraz bardziej. Pełen wściekłości i rozpaczy wydał każdą ostatnią monetę w swoich kasach, próbując ją uratować.<br><br>

Ale to wszystko było na nic. Izolda zmarła w łóżku, a Viego pochłonęło szaleństwo.<br><br>

Jego poszukiwania antidotum stały się desperackie, szalone. Nie mogąc pogodzić się ze śmiercią żony, każdy skarb królestwa, każdy skrawek bogactwa został złożony w ofierze na rzecz próby przywrócenia jej do niego. Gdy ziemia popadła w ruinę, Viego ukrył się z ciałem Izoldy, ogarnięty nienawiścią i gwałtownością.<br><br>

Potem nadszedł dzień, w którym dowiedział się o tajemnicy Błogosławionych Wysp, o ich wodzie, która leczyła wszelkie dolegliwości. Wraz ze swoją wielką armią najechał siłą na spokojny kraj, zabijając wszystkich, którzy stanęli mu na drodze, aż w końcu przekroczył jego wewnętrzne sanktuarium i zanurzył żonę w błogosławionej wodzie. Miała do niego wrócić, bez względu na zniszczenia, jakie wyrządził. Bez względu na cenę.<br><br>

I tylko na jedną chwilę zrobiła to.<br><br>

Izolda powstała jako przerażający upiór cienia i wściekłości, a w swoim bólu, w swoim gniewie, w zmieszaniu na skutek wyrwania ze śmierci podniosła zaczarowane ostrze Viego i pchnęła go w serce. Magia wód i starożytnego miecza zderzyły się, a energia komnaty wybuchła, rozrywając Wyspy i zatrzymując wszystko, czego dotknęła, w stanie świadomej, koszmarnej nieśmierci.<br><br>
Ale Viego nic z tego nie pamięta. Jego kraj popadł w zniszczenie, wielkie narody powstawały i upadały, a z czasem nawet jego imię zostało zapomniane… aż w końcu, po upływie tysiąca lat od jego śmierci, Viego powrócił. I tym razem nie zawiedzie.<br><br>

Jego umysł jest wypaczony przez tę samą niebezpieczną obsesję, którą posiadał za życia. Niewzruszona, obłąkana miłość Viego napędza każdy jego czyn, każde jego pragnienie i każde jego okrucieństwo. Zabójcza Czarna Mgła wylewa się swobodnie ze złamanego serca Viego, wyrywając życie ze wszystkiego, czego dotknie, a on wykorzystuje Mgłę do przeczesywania świata, aby w jakiś sposób przywrócić Izoldę do jego boku.<br><br>

Legiony upadną przed nim tylko po to, by znów powstać w jego służbie, kontynenty zostaną pochłonięte przez żywą ciemność, a świat zapłaci za każdą chwilę szczęścia, którą ukradł starożytnemu władcy pokonanemu przez wszechogarniającą miłość.<br><br>
Nie obchodzi go zniszczenie, które powoduje, dopóki nie zobaczy ponownie twarzy Izoldy.<br><br>

Rządzi strachem.<br><br>

Jego miłość jest wieczna.<br><br>



I dopóki Izolda nie wróci, wszyscy upadną przed Zniszczonym Królem.
				
				
				
            </div>
        </div>
        <div class="sekcja prawa" style="background-color:rgba(230, 230, 230, 0.945)">
            <img class="separator" src="Obrazy/rainbow.jpg" height="6">
            <h2 class="naglowek">
                Najnowsze skiny Akademii Bojowej</h2>
            <div class="slideshow-container">


                <div class="Slider fade">
                    <img src="Obrazy/skiny/Ezreal_BattleAcademiaSkin.jpg" style="width:100%">
                    <div class="text">Ezreal z Akademii Bojowej</div>
                </div>

                <div class="Slider fade">
                    <img src="Obrazy/skiny/Yuumi_BattleAcademiaSkin.jpg" style="width:100%">
                    <div class="text">Bojowa Dyrektorka Yuumi</div>
                </div>

                <div class="Slider fade">
                    <img src="Obrazy/skiny/Lux_BattleAcademiaSkin.jpg" style="width:100%">
                    <div class="text">Lux z Akademii Bojowej</div>
                </div>

                <div class="Slider fade">
                    <img src="Obrazy/skiny/Katarina_BattleAcademiaSkin.jpg" style="width:100%">
                    <div class="text">Katarina z Akademii Bojowej</div>
                </div>

                <div class="Slider fade">
                    <img src="Obrazy/skiny/Jayce_BattleAcademiaSkin.jpg" style="width:100%">
                    <div class="text">Jayce z Akademii Bojowej</div>
                </div>

                <div class="Slider fade">
                    <img src="Obrazy/skiny/Graves_BattleAcademiaSkin.jpg" style="width:100%">
                    <div class="text">Bojowy Profesor Graves</div>
                </div>



                <a class="popr" onclick="NastZdj(-1)">&#10094;</a>
                <a class="nast" onclick="NastZdj(1)">&#10095;</a>
            </div> <br>


            <div style="text-align:center">
                <span class="kropka" onclick="AktualneZdjecie(1)"></span>
                <span class="kropka" onclick="AktualneZdjecie(2)"></span>
                <span class="kropka" onclick="AktualneZdjecie(3)"></span>
                <span class="kropka" onclick="AktualneZdjecie(4)"></span>
                <span class="kropka" onclick="AktualneZdjecie(5)"></span>
                <span class="kropka" onclick="AktualneZdjecie(6)"></span>

            </div>
            <img class="separator" src="Obrazy/rainbow.jpg" height="6">
            <p class="naglowek">Darmowa rotacja bohaterów</p>
            <div class="zdjecia">
                <div class="row">
                    <div class="column">
                        <img src="Obrazy/arty/teemo.jpg" alt="teemo" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/volibear.jpg" alt="volibear" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/kled.jpg" alt="kled" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/pantheon.jpg" alt="Pantheon" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/masteryi.jpg" alt="masteryi" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/galio.jpg" alt="galio" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/zoe.jpg" alt="zoe" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/sivir.jpg" alt="sivir" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/kogmaw.jpg" alt="kogmaw" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/lulu.jpg" alt="lulu" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/nami.jpg" alt="nami" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/shen.jpg" alt="shen" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/fiddlesticks.jpg" alt="fiddlesticks" style="width:100%">
                    </div>
                    <div class="column">
                        <img src="Obrazy/arty/malphite.jpg" alt="malphite" style="width:100%">
                    </div>
                </div>

            </div><br>
            <img class="separator" src="Obrazy/rainbow.jpg" height="6">
            <p class="naglowek">Tryby gry</p>
            <br>
            <div class="tryb">
                <div class="obraz2"><img src="Obrazy/tryby/SummonersRift.jpg"></div>
                <div class="opis">
                    <span>

                        <h2 class="naglowek" style="text-align: left;">Sumonner's Rift</h2>
                        <p style="text-align: left;">
                            Summoner's Rift to główne Field of Justice w League of Legends, wybierane przez większość
                            graczy.
                            Dwie drużyny po pięciu bohaterów walczą na trzech alejach i w ogromnej dżungli, która
                            zawiera
                            potężne wzmocnienia i cele neutralne. To pole bitwy charakteryzuje długa faza walk w alejach
                            i
                            starcia drużynowe.
                        </p>
                    </span>

                </div>

            </div>
            <div class="tryb">
                <div class="obraz2"><img src="Obrazy/tryby/TwistedTreeline.jpg"></div>
                <div class="opis">
                    <span>

                        <h2 class="naglowek" style="text-align: left;">Twisted Treeline</h2>
                        <p style="text-align: left;">
                            Na drugim Field of Justice w League of Legends, Twisted Treeline, znajdują się dwie aleje;
                            grają tu drużyny po trzech bohaterów. Bohaterowie otrzymują na początek więcej złota niż na
                            Summoner's Rift, co prowadzi do szybkich starć i częstych walk drużynowych. W dżungli między
                            alejami znajdują się ołtarze, co zachęca do walk o neutralne cele i gankowania.
                        </p>
                    </span>

                </div>

            </div>
            <div class="tryb">
                <div class="obraz2"><img src="Obrazy/tryby/HowlingAbyss.jpg"></div>
                <div class="opis">
                    <span>

                        <h2 class="naglowek" style="text-align: left;">Howling Abyss</h2>
                        <p style="text-align: left;">
                            Powstała na podstawie popularnego trybu społecznościowego „All Random All Mid”, Howling
                            Abyss stawia przeciw sobie dwie drużyny pięciu bohaterów, walczących na jednej alei.
                            Platforma przywoływania nie uzdrawia bohaterów, a zakupy można robić tylko po śmierci.
                            Sprawia to, że rozgrywka skupia się na walkach drużynowych.
                        </p>
                    </span>

                </div>

            </div>
        </div>
        <footer>
            <a href="https://www.facebook.com/leagueoflegendspolska/" class="icon">
                <img src="Obrazy/Ikony/facebook.png">
            </a>
            <a href="https://www.instagram.com/leagueoflegends/?hl=pl" class="icon">
                <img src="Obrazy/Ikony/insta1.png">
            </a>
            <a href="https://signup.eune.leagueoflegends.com/pl/signup/redownload" class="icon">
                <img src="Obrazy/Ikony/down.png">
            </a>
        </footer>
        <script>
            var slideIndex = 1;
            PokazZjecie(slideIndex);

            // Next/previous controls
            function NastZdj(n) {
                PokazZjecie(slideIndex += n);
            }

            // Thumbnail image controls
            function AktualneZdjecie(n) {
                PokazZjecie(slideIndex = n);
            }

            function PokazZjecie(n) {
                var i;
                var slides = document.getElementsByClassName("Slider");
                var dots = document.getElementsByClassName("kropka");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>

</body>

</html>