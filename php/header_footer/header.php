<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="css/<?php echo $css ?>">
    <link rel="stylesheet" href="css/lightbox.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="php/scripts/jquery-3.3.1.min.js"></script>
</head>

<body class="dfs">
    <span id="#top"></span>
    <div id="wrapper">
        <header class="dfs">
            <div id="logo">
                <a href="index.php"><img src="img/UI/port_logo_165.png" alt="Logo"></a>
            </div>
            <div id="name">
                <h1>Sean Francis</h1>
            </div>
            <div id="tagline">
                <h2>&quot;Creating to Teach, Entertain and Learn&quot;</h2>
            </div>

            <div id="socialbuttons">
                <ul>
                    <li><a href="https://github.com/sean-francis113"><img src="img/UI/gh_icon.png"></a></li>
                    <li><a href="https://www.linkedin.com/in/sean-francis-29941013a/"><img src="img/UI/li_icon.png"></a></li>
                </ul>
            </div>

            <div id="mainnav" class="dfs">
                <ul>
                    <li><a href="index.php?page=game_design&type=index">Game Projects</a></li>
                    <li><a href="index.php?page=programming&type=index">Programming</a></li>
					          <li><a href="index.php?page=rpg_design&type=index">RPG Designs</a></li>
                </ul>
				<br><hr style="border: 1px solid black;"><br>
				<ul>
					<li><a href="index.php?page=digital_paintings&type=index">Digital Paintings</a></li>
          <li><a href="index.php?page=written_works&type=index">Written Works</a></li>
                    <li><a href="index.php?page=about&type=index">About</a></li>
                </ul>
            </div>
        </header>

        <div id="sidemainnav" class="mainsidenav" class="dfs">
            <a class="closebtn" onclick="closeMainNav()">&times;</a>

            <div id="sidelogo" class="dfs">
                <a href="index.php"><img src="img/UI/port_logo_165.png" alt="Logo"></a>
            </div>
            <div id="sidename">
                <h1>Sean Francis</h1>
            </div>
            <div id="sidetagline">
                <h2>&quot;Creating to Teach, Entertain and Learn&quot;</h2>
            </div>

            <div id="sidesocialbuttons">
                <ul>
                    <li><a href="https://github.com/sean-francis113"><img src="img/UI/gh_icon.png"></a></li>
                    <li><a href="https://www.linkedin.com/in/sean-francis-29941013a/"><img src="img/UI/li_icon.png"></a></li>
                </ul>
            </div>
                <div id="pullednav">
                    <ul>
                        <li><a href="index.php?page=game_design&type=index">Game Designs</a></li>
                        <li><a href="index.php?page=written_works&type=index">Written Works</a></li>
                        <li><a href="index.php?page=programming&type=index">Programming</a></li>
						            <li><a href="index.php?page=rpg_design&type=index">RPG Designs</a></li>
                        <li><a href="index.php?page=digital_paintings&type=index">Digital Paintings</a></li>
                        <li><a href="index.php?page=about&type=index">About</a></li>
                    </ul>
                </div>
            </div>

        <span id="mainsideimg" onclick="openMainNav()"><img src="img/UI/icon_pullout_mainnav.png"></span>
