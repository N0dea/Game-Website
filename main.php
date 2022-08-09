<!DOCTYPE html>
<!--
    Michael Dukes
    Web Programming
    Final Project: Mad Mike's Games
    Spring 2022

    
-->
<html>

<head>
    <title>Mad Mike's Games</title>
    <meta charset="UTF-8">

    <!-- ----------- Style ---------------->

    <div id="myStyles">
        <link rel="stylesheet" type="text/css" href="layout.css">
        <link rel="stylesheet" type="text/css" href="layout2.css">
    </div>
    <style>
        
    </style>

    <!-- ----------- Script ---------------->
    <script src="scripts.js"></script>
    <script src="MyGames.php"></script>

    <script>
        

        function latestNews() {

            var htmlNews = document.getElementById("content");
            htmlNews.innerHTML =
                
                "<div id='splash'>" +
                "<h2>Elden Ring: A Modern Masterpiece</h2> <br>" +
                "<img src='elden.jpg' alt='Elden Ring frontpage' width='100%'> <br>" +
                "<p>In the 87 hours that it took me to beat Elden Ring, I was put through an absolute wringer of emotion: Anger as I was beaten down by its toughest challenges, exhilaration when I finally overcame them, and a fair amount of sorrow for the mountains of exp I lost along the way to some of the toughest boss encounters FromSoftware has ever conceived. But more than anything else I was in near-constant awe – from the many absolutely jaw-dropping vistas, the sheer scope of an absolutely enormous world, the frequently harrowing enemies, and the way in which Elden Ring nearly always rewarded my curiosity with either an interesting encounter, a valuable reward, or something even greater. FromSoftware takes the ball that The Legend of Zelda: Breath of the Wild got rolling and runs with it, creating a fascinating and dense open world about freedom and exploration above all else, while also somehow managing to seamlessly weave a full-on Dark Souls game into the middle of it. It shouldn’t be a surprise to anyone that Elden Ring ended up as one of the most unforgettable gaming experiences I’ve ever had. <b>Credit: Mitchell Saltzman, IGN</b>" +
                "</p>" +
                "</div>" +
                "<div id='upcoming'>" +
                "<h3>Upcoming Releases</h3> <br>" +
                "<div class='upcomingGame'>" +
                "<div id='gameArt'>" +
                "<img src='eldenringBox.jpg' alt='Elden Ring Box Art' width='90%'>" +
                "</div>" +
                "<div id='gameDesc'>" +
                "<h4>Elden Ring</h4>" +
                "<h5>Platform: <br>" +
                "PS5/4, Xbox Series S/X, PC</h5>" +
                "</div>" +
                "<div id='releaseDate'>" +
                "<h3 style='padding-top: 50%;'>Feb <br>25</h3>" +
                "</div>" +
                "</div>" +
                "<div class='upcomingGame'>" +
                "<div id='gameArt'>" +
                "<img src='horizonBox.jpg' alt='Horizon Forbidden West Box Art' width='90%'>" +
                "</div>" +
                "<div id='gameDesc'>" +
                "<h4>Horizon Forbidden West</h4>" +
                "<h5>Platform: <br>" +
                "PS5/4</h5>" +
                "</div>" +
                "<div id='releaseDate'>" +
                "<h3 style='padding-top: 50%;'>Feb <br>18</h3>" +
                "</div>" +
                "</div>" +
                "<div class='upcomingGame'>" +
                "<div id='gameArt'>" +
                "<img src='dyinglight.jpg' alt='Dying Light 2 Box Art' width='100%'>" +
                "</div>" +
                "<div id='gameDesc'>" +
                "<h4>Dying Light 2: Stay Human</h4>" +
                "<h5>Platform: <br>" +
                "PS5/4, Xbox Series S/X, PC</h5>" +
                "</div>" +
                "<div id='releaseDate'>" +
                "<h3 style='padding-top: 50%;'>Feb <br>4</h3>" +
                "</div>" +
                "</div>" +
                "</div>" +

                "</div>";

        }

    </script>

<body>
    <div id="container">
        <!-- ----------- Header ---------------->
        <div id="headerContainer">
            <div class="title">
                <h1>Mad Mike's Games</h1>
            </div>
            <div id="nav">
                <a href="?BodyContent=Home">Home</a> |
                <!--<button onclick="goHome()">Home</button> |-->
                <button onclick="latestNews()">The Latest</button> |
                <a href="?BodyContent=myFaves">My Faves</a> |
            
            </div>
        </div>


        <div id="content">
            <?php
            if (isset($_GET['BodyContent'])) {
                if ($_GET['BodyContent'] == 'Home') {
                    include_once("MyGames.php");

                    echo '
                    <h1 class="title" id="homeTitle">Welcome to Mad Mike\'s Games</h1><br>
                    <p style="text-align:center; padding-top:200px">Click any nav bar to see our content :]</p>
                    
                    ';
                }
                else if ($_GET['BodyContent'] == 'myFaves') {
                    include_once("MyGames.php");
                    echo '
                    
                    <div class="title">

                    <h1>My Favorite Games...</h1>
                    
                    </div>
                    <p style="text-align:center">by: Mad Mike</p> <br>
                    
                    ';

                    $myGames = new FaveGames("localhost", "User", "Pass123Word", "madgames");
                    $games = $myGames->Get_Games_DB();
                    $count = sizeof($games);

                    for ($i = 0; $i < sizeof($games); $i++) {
                        
                    echo '
                    
                        <div id="gameNum">'. $count . '</div>
                        <div id="gameBox">
                            <div id="gameInfo">
                                <p class="center" id="gameTitle">'. $games[$i]['title'] . '</p>
                                <p class="center" id="gameDev">'. $games[$i]['dev'] . '</p>
                                <p class="center" id="gameDate">'. $games[$i]['release_date'] . '</p>
                                <a href='.$games[$i]['trailer']. '> Trailer</a>
                            </div>

                            <div id="gameLongDesc">
                                <div class="rectangle"></div>
                                <p id="gameDescParagraph">'. $games[$i]['description'] . '</p> 
                                
                            </div>
                        
                        </div>
                        ';
                        $count--;
                    }
                }
            }
            ?>





        </div>
</body>
</head>

</html>