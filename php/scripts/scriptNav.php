    <script>
        
        function openMainNav() {
            document.getElementById("sidemainnav").style.width = "50%";
            document.getElementById("sidemainnav").style.borderRadius = "50px";
            document.getElementById("sidemainnav").style.borderWidth = "5px";
            document.getElementById("mainsideimg").style.display = "none";
        }

        function closeMainNav() {
            document.getElementById("sidemainnav").style.width = "0";
            document.getElementById("sidemainnav").style.borderRadius = "0";
            document.getElementById("sidemainnav").style.borderWidth = "0";
            document.getElementById("mainsideimg").style.display = "block";
        }
        
        /* Set the width of the side navigation to 250px */
        function openPartsNav() {
            document.getElementById("sidesubnav").style.width = "50%";
            document.getElementById("sidesubnav").style.borderRadius = "50px";
            document.getElementById("sidesubnav").style.borderWidth = "5px";
            document.getElementById("partssideimg").style.display = "none";

            document.getElementById("sidemainnav").style.width = "0";
            document.getElementById("sidemainnav").style.borderRadius = "0";
            document.getElementById("sidemainnav").style.borderWidth = "0";
            document.getElementById("mainsideimg").style.display = "block";
        }

        /* Set the width of the side navigation to 0 */
        function closePartsNav() {
            document.getElementById("sidesubnav").style.width = "0";
            document.getElementById("sidesubnav").style.borderRadius = "0";
            document.getElementById("sidesubnav").style.borderWidth = "0";
            document.getElementById("partssideimg").style.display = "block";
        }
        
        /* Set the width of the side navigation to 250px */
        function openControlNav() {
           
            if(document.getElementById("sidecontrolnav"))
            {
                document.getElementById("sidecontrolnav").style.width = "50%";
                document.getElementById("sidecontrolnav").style.borderRadius = "50px";
                document.getElementById("sidecontrolnav").style.borderWidth = "5px";
                document.getElementById("controlsideimg").style.display = "none";

                document.getElementById("sidemainnav").style.width = "0";
                document.getElementById("sidemainnav").style.borderRadius = "0";
                document.getElementById("sidemainnav").style.borderWidth = "0";
                document.getElementById("mainsideimg").style.display = "block";

                document.getElementById("sidepartsnav").style.width = "0";
                document.getElementById("sidepartsnav").style.borderRadius = "0";
                document.getElementById("sidepartsnav").style.borderWidth = "0";
                document.getElementById("partssideimg").style.display = "block";
        
            }
                
        }

        /* Set the width of the side navigation to 0 */
        function closeControlNav() {            
            if(document.getElementById("sidecontrolnav"))
            {
                document.getElementById("sidecontrolnav").style.width = "0";
                document.getElementById("sidecontrolnav").style.borderRadius = "0";
                document.getElementById("sidecontrolnav").style.borderWidth = "0";
                document.getElementById("controlsideimg").style.display = "block";
                
            }
        }
    </script>