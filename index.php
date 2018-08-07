<?php

/*
    Default Settings for Home Page
*/
$phpPage = "php/pages/page-home.php"; /*Page to Load*/
$title = "Home - Sean Francis"; /*Page's Title*/
$css = "index.css"; /*Page's CSS File to Refer To*/
$document = "augustfires"; /*PDF Document's Label*/
$documentName = "August Fires";/*PDF Document's Name*/
$documentTag = "Watch It All Burn Around You"; /*PDF Document's Tagline*/
$partPageList = [2, 6, 10, 14, 18, 22, 26]; /*The Page Numbers For Each Part*/
$parts = count($partPageList); /*How Many Parts the PDF Document Has*/
$needPartLinkScripts = "false"; /*Do We Need to Use the Part Link Scripts?*/
$useLightbox = "true"; /*Do We Need to Use the Lightbox Scripts?*/
$needPDFScripts = "false"; /*Do We Need to Use the PDF Viewer Scripts?*/
$image = ""; /*What Digital Painting to Display*/
$imageName = ""; /*The Digitial Painting's Name*/
$imageTag = ""; /*The Digital Painting's Image Tag*/
$forceWidth = "false"; /*Do We Need to Force the Main Area's Width*/

/*
    Check Page Settings
*/
if(isset($_GET["page"]))
{
    
    /*
        Opening Game Design Page
    */
    if($_GET["page"] == "game_design")
    {
        
        $useLightbox = "false";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-gameDesign.php";
            $title = "Game Design - Sean Francis";
            $css = "index.css";
            
        }
        
    }
    
    /*
        Opening Boss Chase Page
    */
    if($_GET["page"] == "boss_chase")
    {
        
        $useLightbox = "false";
		$document = "bossChase";
		$documentName = "Boss Chase";
		$documentTag = "An Adrenaline Fueled Mix of Endless Runner and Boss Rush";
		$partPageList = [1];
		$parts = count($partPageList);
		$partListNum = 1;
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-bossChase.php";
            $title = "Boss Chase - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "Boss Chase PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
            
            
        }
        else if($_GET["type"] == "html")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-HTMLViewer.php";
            $title = "Boss Chase HTML - Sean Francis";
            $css = "html.css";
            
            
        }
        
    }
    
    /*
        Opening Castle Escape Page
    */
    if($_GET["page"] == "castle_escape")
    {
        
        $useLightbox = "false";
		$document = "castleEscape";
		$documentName = "Castle Escape";
		$documentTag = "2D Platformer That Turns Typical Narrative On Its Head";
		$partPageList = [1];
		$parts = count($partPageList);
		$partListNum = 1;
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-castleEscape.php";
            $title = "Castle Escape - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "Castle Escape PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
            
            
        }
        else if($_GET["type"] == "html")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-HTMLViewer.php";
            $title = "Castle Escape HTML - Sean Francis";
            $css = "html.css";
            
            
        }
        
    }
    
    /*
        Opening Written Works Page
    */
    if($_GET["page"] == "written_works")
    {
        
        $useLightbox = "false";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-writtenWorks.php";
            $title = "Written Works - Sean Francis";
            $css = "index.css";
            
            
        }
        
    }
    
    /*
        Opening August Fires Page
    */
    if($_GET["page"] == "august_fires")
    {
        
        $useLightbox = "false";
        $document = "augustfires";
        $documentName = "August Fires";
        $documentTag = "Watch It All Burn Around You";
		$partPageList = [2, 6, 10, 14, 18, 22, 26];
		$parts = count($partPageList);
        $partListNum = 1;
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-augustFires.php";
            $title = "August Fires - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
            $needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "August Fires PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
            
        }
        else if($_GET["type"] == "html")
        {
            
            $needPartLinkScripts = true;
            $phpPage = "php/pages/page-HTMLViewer.php";
            $title = "August Fires HTML - Sean Francis";
            $css = "html.css";
            
        }
        
    }
    
    /*
        Opening Death Page
    */
    if($_GET["page"] == "death")
    {
        
        $useLightbox = "false";
        $document = "death";
        $documentName = "Death";
        $documentTag = "No One Controls Death";
		$partPageList = [2, 6, 10, 15, 20, 24, 29, 33];
		$parts = count($partPageList);
        $partListNum = 1;
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-death.php";
            $title = "Death - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
            $needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "Death PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
            $partListNum = 1;
            
            
        }
        else if($_GET["type"] == "html")
        {
            
            $needPartLinkScripts = true;
            $phpPage = "php/pages/page-HTMLViewer.php";
            $title = "Death HTML - Sean Francis";
            $css = "html.css";
            $partListNum = 1;
            
            
        }
        
    }
    
    /*
        Opening Dimensional Chains Page
    */
    if($_GET["page"] == "dimensional_chain")
    {
        
        $useLightbox = "false";
        $document = "dimensionalchain";
        $documentName = "Dimensional Chain";
        $documentTag = "The Chain is a Place One Can Only Survive";
		$partPageList = [2, 7, 11, 15, 19, 23, 26];
		$parts = count($partPageList);
        $partListNum = 1;
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-dimensionalChains.php";
            $title = "Dimensional Chains - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
            $needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "Dimensional Chains PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
            $partListNum = 1;
            
            
        }
        else if($_GET["type"] == "html")
        {
            
            $needPartLinkScripts = true;
            $phpPage = "php/pages/page-HTMLViewer.php";
            $title = "Dimensioal Chains HTML - Sean Francis";
            $css = "html.css";
            $partListNum = 1;
            
            
        }
        
    }
    
    /*
        Opening World and Character Design Page
    */
    if($_GET["page"] == "world_design")
    {
        
        $useLightbox = "false";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-worldDesign.php";
            $title = "World and Character Design - Sean Francis";
            $css = "index.css";
            
            
        }
        
    }
    
    /*
        Opening World of Hunted Page
    */
    if($_GET["page"] == "world_hunted")
    {
        
		$useLightbox = "false";
        $document = "huntedworld";
        $documentName = "World of the Hunted";
        $documentTag = "A World Where Magic is Biology";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-worldHunted.php";
            $title = "World of Hunted - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "World of Hunted PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true"; 
			$partPageList = [1]; 
			$parts = count($partPageList);
            $partListNum = 1;
			
        }
        
    }
    
    /*
        Opening Leah Kaitlyn Page
    */
    if($_GET["page"] == "leah_kaitlyn")
    {
        
        $useLightbox = "false";
		$document = "leahkaitlyn";
        $documentName = "Leah Kaitlyn";
        $documentTag = "The Mage Who Joined the Mage-Hunters";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-leahKaitlyn.php";
            $title = "Leah Kaitlyn - Sean Francis";
            $css = "index.css";            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "Leah Kaitlyn PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
			$partPageList = [1]; 
			$parts = count($partPageList);
            $partListNum = 1;
            
        }
        
    }
    
    /*
        Opening David Parker Page
    */
    if($_GET["page"] == "david_parker")
    {
        
        $useLightbox = "false";
		$document = "davidparker";
        $documentName = "David Parker";
        $documentTag = "Suspected Mage Full of Anger";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-davidParker.php";
            $title = "David Parker - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "David Parker PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
			$partPageList = [1]; 
			$parts = count($partPageList);
            $partListNum = 1;
            
        }
        
    }
    
    /*
        Opening Digital Paintings Page
    */
    if($_GET["page"] == "digital_paintings")
    {
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-digitalPaintings.php";
            $title = "Digital Paintings - Sean Francis";
            $css = "index.css";
            
        }
        else if($_GET["type"] == "html")
        {
            
            $phpPage = "php/pages/page-digitalPaintingHTML.php";
            $css = "html.css";
            $forceWidth = "true";
            
            if($_GET["image"] == "rpgIcons"){
                
                $image = "img/digital_paintings/francis_".$_GET["image"]."_fullSizeWithBG.jpeg";
                    
                if($_GET["image"] == "alienpet")
                {
                        
                    $imageTag = "Alien Pet: Quel Image";
                    $imageName = "Alien Pet: Quel";
                        
                }
                else if($_GET["image"] == "selfportrait")
                {
                    
                    $imageTag = "Self Portrait Image";
                    $imageName = "Self Portrait";
                    
                }
                else if($_GET["image"] == "stilllife")
                {
                    
                    $imageTag = "Still Life Image";
                    $imageName = "Still Life";
                    
                }
                else if($_GET["image"] == "theft")
                {
                    
                    $imageTag = "Theft Image";
                    $imageName = "Theft";
                    
                }
            
            }
            else
            {
                
                $image = "img/digital_paintings/francis_".$_GET["image"]."_fullSize.jpeg";
                $imageTag = "RPG Icons Image";
                $imageName = "RPG Icons";

            }
                        
        }
        
    }
    
    /*
        Opening About Page
    */
    if($_GET["page"] == "about")
    {
        
        $useLightbox = "false";
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-about.php";
            $title = "About - Sean Francis";
            $css = "index.css";
            
        }
        
    }
    
    /*
        Opening Resume Page
    */
    if($_GET["page"] == "resume")
    {
        
        $useLightbox = "false";
		$document = "resume";
        $documentName = "Resume";
        $documentTag = "My Resume";
		$partPageList = [1];
		$parts = count($partPageList);
        $partListNum = 1;
        
        if($_GET["type"] == "index")
        {
            
            $phpPage = "php/pages/page-resume.php";
            $title = "Resume - Sean Francis";
            $css = "index.css";
            
            
        }
        else if($_GET["type"] == "pdf")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-PDFViewer.php";
            $title = "Resume PDF - Sean Francis";
            $css = "pdf.css";
            $needPDFScripts = "true";
            
            
        }
        else if($_GET["type"] == "html")
        {
            
			$needPartLinkScripts = true;
            $phpPage = "php/pages/page-ResumeHTML.php";
            $title = "Resume HTML - Sean Francis";
            $css = "index.css";
            $forceWidth = "true";
            
            
        }
        
    }
    
}

/*
    Display Webpage
*/

include("php/header_footer/header.php");

include($phpPage);

include("php/header_footer/footer.php");

include("php/scripts/scriptNav.php");

/*
    If We Need to Force the Main Area's Width
*/
if($forceWidth == "true")
{

    include("php/scripts/scriptForceWidth.php");

}

/*
    If We Need to Load Lightbox
*/
if($useLightbox == "true" || $phpPage == "php/pages/page-home.php")
{
    
    include("php/scripts/scriptLightbox.php");
    
}

/*
    If We Need to Load Part Link Scripts
    
*/
if($needPartLinkScripts == "true")
{
    
    include("php/scripts/scriptPartList.php");
    
}

/*
    If We Have PDF Javascripts To Load
*/
if($needPDFScripts == "true")
{
    
    include("php/scripts/scriptPDF.php");
    
}

?>

</body>

</html>