<?php 

require('../head.php'); 

$database = "if19_LAF";
$show=null;
echo auctionFiltration();

?>
<body>
    
<div class="main-flex header">
    <!-- HEADER -->
    <div class="main-section">
        <?php require('../header.php'); ?>
    </div>
</div>

<div class="main-flex page-body">
    <div class="aside"></div>
    <div class="main-section">
        <!-- HERO TEXT  -->
        <div class="flex-row"> 
            <h1 class="title">OKSJON</h1>
        </div>
        <!-- PAGE NUMBERS -->
        <div class="flex-row"> 
            <div class="aside"></div>
            <div>                
                <?php
                echo "Tänane kuupäev " . date("Y/m/d") . "<br>";
                ?>
                </div>
        </div>
        <!-- PAGE BODY -->
        <div class="filtersProductsLayout"> 
            <?php require("../filter.php") ?>
            <div class="products">
                <?php echo getAuctionElements($show); ?>
            </div><!--.flex-row-->
        </div><!--.products -->
            
    </div>
    <div class="aside"></div>
</div>
<script src="../js/timer.js"></script>
<script src="../js/script.js"></script>
</body>
</html>