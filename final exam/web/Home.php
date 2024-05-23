<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location:login.php");
}
include "menu.php";
?>
    <h1>Home</h1>
    <P1><strong><i>WELCOME TO OUR WEBSITE</strong></i></P1><br>
    <h2><strong><i>COMMUNITY GARDEN Ltd</strong></i></h2><br>
    <img src="jj.gif"width="300"height="250">
    

    <a href="#"><img src="download.jpg"width="300"height="250"></a> 
    <img src="jj.gif"width="600"height="250">
    
    <img class="imgs" src="images.jpg"width="300"height="250">
    <img src="jj.gif"width="600"height="250">
    
    

</body>
</html>

    
</body>
</html>