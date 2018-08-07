<script>        

		var listpagenum = 1 /*Which List of Page Links is Showing*/
		var maxlistpagenum = document.getElementsByClassName("partLink").length / 2; /*The Max Number of Part Links to Show is Determined By the Number Set into the Page, accounting for the fact that this will also count the mobile links*/
		
		<?php 
			$partsList = json_encode($partPageList);
			echo "var jsPartsList = ".$partsList.";\n";
		?>
		
		/*
			Create the PDF Part Links Dynamiclly
		*/
		
		if(<?php echo($parts)?> != 1){
		
			if(listpagenum == 1)
			{
				
				document.getElementById("partprev").style.display = 'none';
				document.getElementById("sidepartprev").style.display = 'none';
				
			}	
			else
			{
				
				document.getElementById("partprev").style.display = 'block';
				document.getElementById("sidepartprev").style.display = 'block';
				
			}
	
			<?php echo("var docType = \"".$_GET["type"]."\";") ?>
	
			document.getElementById("partnext").style.display = 'block';
			document.getElementById("sidepartnext").style.display = 'block';
			
			for(var i = 0; i < maxlistpagenum; i++)
			{
				
				var link = document.getElementById('link' + (i + 1));
				var sideLink = document.getElementById('sidelink' + (i + 1));
			
				link.innerHTML = "Part " + (i + 1 + (maxlistpagenum * (listpagenum - 1)));
				link.setAttribute('href', 'index.php?page=' + <?php echo('\''.$_GET["page"].'\'')?> + '&type=' + <?php echo('\''.$_GET["type"].'\'')?> + '&' + 'partNum=' + (i + 1 + (maxlistpagenum * (listpagenum - 1))));
			
				sideLink.innerHTML = "Part " + (i + 1 + (maxlistpagenum * (listpagenum - 1)))
				sideLink.setAttribute('href', 'index.php?page=' + <?php echo('\''.$_GET["page"].'\'')?> + '&type=' + <?php echo('\''.$_GET["type"].'\'')?> + '&' + 'partNum=' + (i + 1 + (maxlistpagenum * (listpagenum - 1))));        
				
			}     
		
		}
		else {
			
			for(var i = 0; i < maxlistpagenum; i++)
			{
				
				var link = document.getElementById('link' + (i + 1));
				var sideLink = document.getElementById('sidelink' + (i + 1));
				
				link.style.display = 'none';
				sideLink.style.display = 'none';
				
			}
			
			document.getElementById("partnext").style.display = 'none';
			document.getElementById("sidepartnext").style.display = 'none';
			document.getElementById("partprev").style.display = 'none';
			document.getElementById("sidepartprev").style.display = 'none';
			
		}   
	 
		/*
			Changes the Links Shown
		*/
		function changeLinks()
		{
			
			if(listpagenum == 1)
			{
				
				document.getElementById("partprev").style.display = 'none';
				document.getElementById("sidepartprev").style.display = 'none';
				
			}
			else{
				
				document.getElementById("partprev").style.display = 'block';
				document.getElementById("sidepartprev").style.display = 'block';
				
			}
			
			document.getElementById("partnext").style.display = 'block';
			document.getElementById("sidepartnext").style.display = 'block';
			
			for(var i = 0; i < maxlistpagenum; i++)
			{
				
				var linkToCheck = document.getElementById('link'.concat(i + 1));
				
				var sideLinkToCheck = document.getElementById('sidelink'.concat(i + 1));
				
				linkToCheck.style.display = 'block';
				sideLinkToCheck.style.display = 'block';
			 
				if((i + 1 + (maxlistpagenum * (listpagenum - 1))) <= jsPartsList.length){
					
					linkToCheck.innerHTML = "Part " + (i + 1 + (maxlistpagenum * (listpagenum - 1)));
					linkToCheck.setAttribute('href', 'index.php?page=' + <?php echo('\''.$_GET["page"].'\'')?> + '&type=' + <?php echo('\''.$_GET["type"].'\'')?> + '&' + 'partNum=' + (i + 1 + (maxlistpagenum * (listpagenum - 1))));
				
					sideLinkToCheck.innerHTML = "Part " + (i + 1 + (maxlistpagenum * (listpagenum - 1)));
					sideLinkToCheck.setAttribute('href', 'index.php?page=' + <?php echo('\''.$_GET["page"].'\'')?> + '&type=' + <?php echo('\''.$_GET["type"].'\'')?> + '&' + 'partNum=' + (i + 1 + (maxlistpagenum * (listpagenum - 1))));
					
				}
				else{
					
					linkToCheck.style.display = 'none';
					sideLinkToCheck.style.display = 'none';
					document.getElementById("partnext").style.display = 'none';
					document.getElementById("sidepartnext").style.display = 'none';
					
				}
					
			}
		
		}
	
		/*
			Show the Next List of Part Links
		*/
		function nextPartList()
		{
		
			listpagenum++;
			changeLinks();
		
		}
	
		/*
			Show the Last List of Part Links
		*/
		function prevPartList()
		{
			
			listpagenum--;
			changeLinks();
			
		}
		
</script>