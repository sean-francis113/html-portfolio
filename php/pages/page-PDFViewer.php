        <div id="pdfarea" class="dfs">

            <img id="previous" alt="Previous Page" src="img/UI/prevpage_icon.png">
            <canvas id="pdfview"></canvas>
            <img id="next" alt="Next Page" src="img/UI/nextpage_icon.png"><br>

            <div id="page_display">
                <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
            </div>

        </div>

        <div id="subnav">
            <div id="storyname">
                <h1><?php echo $documentName; ?></h1>
            </div>
            <div id="storytag">
                <h2><?php echo("\"".$documentTag."\""); ?></h2>
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
            </ul>
        </div>

        <div id="controlpanel">
            <a href="" id="presentationLink"><img src="img/UI/full_screen_button.png" alt="Show Fullscreen" id="presentationbutton"></a>
            <a href="" id="downloadLink" download><img src="img/UI/download_pdf_button.png" alt="Download PDF" id="downloadbutton"></a>
        </div>

        <div id="sidepartsnav" class="partssidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closePartsNav()">&times;</a>

            <div id="sidestoryname">
                <h1><?php echo $documentName; ?></h1>
            </div>
            <div id="sidestorytag">
                <h2><?php echo("\"".$documentTag."\"") ?></h2>
            </div>

            <div id="partsside">
                <ul>
                    <li class="partLink"><a href="#" id="sidelink1">Part 1</a></li>
                    <li class="partLink"><a href="#" id="sidelink2">Part 2</a></li>
                    <li class="partLink"><a href="#" id="sidelink3">Part 3</a></li>
                    <li class="partLink"><a href="#" id="sidelink4">Part 4</a></li>
                </ul>

                <ul>
                    <li id="sidepartprev"><a href="#" id="sidepartprevlink" onclick="prevPartList()">Previous Parts</a></li>
                    <li id="sidepartnext"><a href="#" id="sidepartnextlink" onclick="nextPartList()">Next Parts</a></li>
                </ul>
            </div>
        </div>

        <span id="partssideimg" onclick="openPartsNav()"><img src="img/UI/icon_pullout_parts.png"></span>

		<div id="sidecontrolnav" class="controlsidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeControlNav()">&times;</a>

            <a href="#" id="sidePresentationLink"><img src="img/UI/full_screen_button.png" alt="Show Fullscreen" id="sidepresentationbutton"></a>
            <a href="#" id="sideDownloadLink" download><img src="img/UI/download_pdf_button.png" alt="Download PDF" id="sidedownloadbutton"></a>

        </div>

        <span id="controlsideimg" onclick="openControlNav()"><img src="img/UI/icon_pullout_pdfcontrol.png"></span>
