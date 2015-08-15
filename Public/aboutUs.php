<?php 
  include("../include/layouts/top_aboutUs.php");
?>  
        <div id="aboutUsContent">
        <script>
          var aboutUsContent = document.getElementById("aboutUsContent");
          aboutUsContent.style.width = (screen.width -605) + "px";
          aboutUsContent.style.height = (screen.height - 420) + "px";
          aboutUsContent.style.backgroundColor = "#565656";
          aboutUsContent.style.transition = "all 1s";
        </script>
        	<p>Public Voice is a public voting machine to count peoples point of view in a matter. You can vote or raise queston 
        		on many different topics and know others viewpoint about that matter. So add/vote to raise your concern.
        	</p>
          
        	<h4><u>How to use</u></h4>
        	<p>1. Go to the topic page you want.</p>
        	<p>2. Click "Add a poll" to add a question.</p>
          <p>3. You can use the NEWS BOX in the HOME page to know about recent events taking place in the world.</p>
        	<p>4. Vote in the question.</p>
        	<p>5. It will show on the subject page of every topic.</p>
        	<p>6. Valid email address is required to add/vote in a question.</p>
          <p></p>
        	<h4><b>NOTE:</b> <i>ONE EMAIL CAN <u>NOT</u> VOTE IN A SAME QUESTION TWICE.<br>YOUR EMAIL IS BEING
           <u>ENCRYPTED</u> BEFORE SAVING INTO DATABSE.
        	 AND WE DO NOT SHARE OR USE IT FOR LATER.</i><h4>
        </div>    
<?php
  include("../include/layouts/bottom_aboutUs.php");
?>  