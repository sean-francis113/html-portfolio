        <div id="worksarea">
            <h3 id="pageTitle"><?php echo($_GET["partNum"]) ?></h3>
            <div id="partcontent">
                <?php
                    $myfile = fopen("text/".$document."/".($_GET["partNum"]).".txt", "r") or die("Unable to open file!");
                        
                    // Output one line until end-of-file
                    while(!feof($myfile)) {
                          
                        echo fgets($myfile)."<br>";
                        
                    }
                        
                    fclose($myfile);
                ?> 
            </div>
        </div>

        <div id="subnav">
            <div id="storyname">
                <h1><?php echo $documentName; ?></h1>
            </div>
            <div id="storytag">
                <h2><?php echo "\"".$documentTag."\""; ?></h2>
            </div>

            <ul id="partsList">
                <li class="partLink"><a href="#" id="link1">Part 1</a></li>
                <li class="partLink"><a href="#" id="link2">Part 2</a></li>
                <li class="partLink"><a href="#" id="link3">Part 3</a></li>
                <li class="partLink"><a href="#" id="link4">Part 4</a></li>
            </ul>

            <ul>
                <li id="partprev"><a href="#" id="partprevlink" onclick="prevPartList()">Previous Parts</a></li>
                <li id="partnext"><a href="#" id="partnextlink" onclick="nextPartList()">Next Parts</a></li>
            </ul><br>
            <a href="#top" id="topLink">Back to Top</a>
        </div>

        <div id="sidesubnav" class="partssidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closePartsNav()">&times;</a>

            <div id="sidestoryname">
                <h1><?php echo $documentName; ?></h1>
            </div>
            <div id="sidestorytag">
                <h2><?php echo "\"".$documentTag."\""; ?></h2>
            </div>
            
            <ul id="partsList">
                <li class="partLink"><a href="#" id="sidelink1">Part 1</a></li>
                <li class="partLink"><a href="#" id="sidelink2">Part 2</a></li>
                <li class="partLink"><a href="#" id="sidelink3">Part 3</a></li>
                <li class="partLink"><a href="#" id="sidelink4">Part 4</a></li>
            </ul>

            <ul>
                <li id="sidepartprev"><a href="#" id="partprevlink" onclick="prevPartList()">Previous Parts</a></li>
                <li id="sidepartnext"><a href="#" id="partnextlink" onclick="nextPartList()">Next Parts</a></li>
            </ul><br>
            <a href="#top" id="topLinkSide">Back to Top</a>
        </div>

        <span id="partssideimg" onclick="openPartsNav()"><img src="img/UI/icon_pullout_parts.png"></span>