<?php require('head.php'); 
require("oksjon_functions.php");
require("../../../config_vp2019.php");
/*require("functions_user.php");
require("functions_main.php");
require("functions_pic.php");*/
require("classes/Test.class.php");
require("classes/Picupload.class.php");
$database = "if19_herman_pe_1";
require("classes/Session.class.php");
$typeOfFilter=null;
$notice=readAuctionPics($typeOfFilter);
$amount=countFilters($typeOfFilter);
if(isset($_POST["riided"])){
    $typeOfFilter='Riided';
    $notice = readAuctionPics($typeOfFilter);
    $amount =countFilters($typeOfFilter);

}
if(isset($_POST["tehnika"])){
    $typeOfFilter='Tehnika';
    $notice = readAuctionPics($typeOfFilter);
    $amount =countFilters($typeOfFilter);

}
if(isset($_POST["muu"])){
    $typeOfFilter='Muu';
    $notice = readAuctionPics($typeOfFilter);
    $amount =countFilters($typeOfFilter);    
}
if(isset($_POST["koik"])){
    $typeOfFilter=null;
    $notice = readAuctionPics($typeOfFilter);
    $amount =countFilters($typeOfFilter);
}



?>
<body>
    
<div class="main-flex header">
    <div class="aside"></div>
    <!-- HEADER -->
    <div class="main-section">
        <?php require('header.php'); ?>
    </div>
    <div class="aside"></div>
</div>
<div class="main-flex">
    <div class="aside"></div>
    <div class="main-section">
        <!-- HERO TEXT  -->
        <div class="flex-row"> 
            <h1 id="mainTitle">OKSJON</h1>
        </div>
        <!-- HERO BUTTON  -->
        <div class="flex-row"> 
        </div>
        <!-- PAGE NUMBERS -->
        <div class="flex-row"> 
            <div class="aside"></div>
            <div>                
                <?php
                echo "Tänane kuupäev " . date("Y/m/d") . "<br>";
                ?></div>
        </div>
        <!-- PAGE BODY -->
        <div class="flex-row"> 
            <div class="filters">
                <h2 class="flex-column">FILTERS</h2>
                <ul class="ul flex-column" id="mainFilters">
                <form method="POST" action="#">
                    <input id="clothes" name="riided" type="submit" value="RIIDED">
                    <input id="technic" name="tehnika" type="submit" value="TEHNIKA">
                    <input id="other" name="muu" type="submit" value="MUU">
                    <input id="all" name="koik" type="submit" value="KÕIK" >
                    <?php echo $amount; ?>
                </form>
                </ul>
            </div>
            <div id="products">
                <div id="elements">
                   <?php
                    echo $notice;
                    ?>
                </div>
            </div><!--.products -->
        </div><!--.flex-row-->
    </div>
    <div class="aside"></div>
</div>
<script src="script.js"></script>
</body>
</html>