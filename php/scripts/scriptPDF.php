    <script src="js/build/pdf.js"></script>

    <script>
        /**
         * Document Related Variables
         **/
        var doc = <?php echo "\"".$document."\"" ?>;
		var pdfURL = "";
		var gddType = "";
		
		<?php
		
		if(isset($_GET["gddType"]))
		{
			
			$type = $_GET["gddType"];
			
			echo("gddType = "."'".$type."'".";");
			
		}
		
		?>

		if(doc === "bossChase" || doc === "castleEscape")
		{
			pdfURL	= "pdf/" + doc + "_" + gddType + ".pdf";		
		}
		else if(doc === "resume")
		{
			pdfURL = "pdf/francis_resume.pdf";
		}
		else if(doc === "chronicler")
		{
			pdfURL = "pdf/chronicler_commands_05-15-2019.pdf";
		}
		else if(doc === "pffaeMantles")
		{
			pdfURL = "pdf/pffae_mantles.pdf";
		}
		else if(doc === "dfaMantles")
		{
			pdfURL = "pdf/dfa_mantles.pdf";
		}
		else if(doc === "gallys")
		{
			pdfURL = "pdf/gallys_design.pdf";			
		}
		else{
        	pdfURL = "pdf/" + doc + "_libre.pdf";
        }
		
		var pdfdoc = null;
        var pageNum = <?php echo($partPageList[$_GET["partNum"] - 1]) ?>;
        var pageRendering = false;
        var pageNumPending = null;
        var scale = 1;
        var canvas = document.getElementById("pdfview");
        var ctx = canvas.getContext("2d");

        /**
         * Control Related Variables
         **/
        var prevButton = document.getElementById("previous");
        var nextButton = document.getElementById("next");
        /*
        var clearUp = document.getElementById("nextclear");
        var clearDown = document.getElementById("prevclear");
        var clearMin = 0.5;
        var clearMax = 2;
        */		
        
        PDFJS.getDocument(pdfURL).then(function(pdfDoc_) {
            pdfDoc = pdfDoc_;
            document.getElementById('page_count').textContent = pdfDoc.numPages;
			
			document.getElementById("presentationLink").href = pdfURL;
			document.getElementById("downloadLink").href = pdfURL;
			document.getElementById("sidePresentationLink").href = pdfURL;
			document.getElementById("sideDownloadLink").href = pdfURL;
            
            // Initial/first page rendering
            queueRenderPage(pageNum);

        });
        
        /**
         * Get page info from document, resize canvas accordingly, and render page.
         * @param num Page number.
         */
        function renderPage(num) {
            pageRendering = true;
            // Using promise to fetch the page
            pdfDoc.getPage(num).then(function(page) {
                var viewport = page.getViewport(scale);
                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Render PDF page into canvas context
                var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                };

                var renderTask = page.render(renderContext);

                // Wait for rendering to finish
                renderTask.promise.then(function() {
                    pageRendering = false;
                    if (pageNumPending !== null) {
                        // New page rendering is pending
                        renderPage(pageNumPending);
                        pageNumPending = null;
                    }
                });
            });

            // Update page counters
            document.getElementById("page_num").textContent = pageNum;

            //Update Clarity
            document.getElementById("clear_num").textContent = (scale * 100) + "%";

            if (pageNum <= 1) {
                prevButton.style.display = "none";
                canvas.style.marginLeft = 80 + "px";
            } else if (pageNum >= pdfDoc.numPages) {
                nextButton.style.display = "none";
                canvas.marginRight = 60 + "px";
            } else {
                prevButton.style.display = "initial";
                canvas.style.marginLeft = 35 + "px";
                nextButton.style.display = "initial";
                canvas.marginRight = 0 + "px";
            }
            
            if(jsPartsList.length <= 4)
            {
    
                document.getElementById("partprev").style.display = "none";
                document.getElementById("partnext").style.display = "none";
    
            }
               
            /*
            if (scale <= clearMin) {
                clearDown.style.display = "none";
                document.getElementById("clear_text").style.marginLeft = 40 + "px";
            } else if (scale >= clearMax) {
                clearUp.style.display = "none";
                document.getElementById("clear_text").style.marginRight = 40 + "px";
            } else {
                clearDown.style.display = "initial";
                clearUp.style.display = "initial";
                document.getElementById("clear_text").style.margin = 0 + "px";
            }
            */
        
        }

            /**
            * If another page rendering in progress, waits until the rendering is
            * finised. Otherwise, executes rendering immediately.
            */
        function queueRenderPage(num) {
            if (pageRendering) {
                pageNumPending = num;
            } else {
                renderPage(num);
            }
        }

        /**
         * Displays previous page.
         */
        function onPrevPage() {
            if (pageNum <= 1) {

                return;
            }
            pageNum--;
            queueRenderPage(pageNum);
        }
        prevButton.addEventListener('click', onPrevPage);

        /**
         * Displays next page.
         */
        function onNextPage() {
            if (pageNum >= pdfDoc.numPages) {
                return;
            }
            pageNum++;
            queueRenderPage(pageNum);
        }
        nextButton.addEventListener('click', onNextPage);

        /**
         * Decreases PDF Clarity
         */
        /*
        function decreaseClarity() {
            if (scale <= clearMin) {
                return;
            }
            scale -= 0.25;
            queueRenderPage(pageNum);
        }
        clearDown.addEventListener('click', decreaseClarity);
        */

        /**
         * Increases PDF Clarity
         */
        /*
        function increaseClarity() {
            if (scale >= clearMax) {
                return;
            }
            scale += 0.25;
            queueRenderPage(pageNum);
        }
        clearUp.addEventListener('click', increaseClarity);
        */
            
        /**
         * Show Current File in PDF.js Viewer (Full Screen)
         **/
        function showPresentation() {
            window.location.href = pdfURL + "#page=" + pageNum;
        }

        /**
         * Loads Story Cover
         **/
        function loadCover() {
            pageNum = 1;

            queueRenderPage(pageNum);
        }

        /**
         * Loads Specified Story Part's Page Number
         **/
        function loadPart(num) {
            pageNum = num;

            queueRenderPage(pageNum);
        }
            
    </script>