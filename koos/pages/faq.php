<?php 

require('../head.php'); 
 

?>
<body>
<div class="main-flex header">
    <div class="aside"></div>

    <!-- HEADER -->
        <div class="main-section">
            <?php require('../header.php'); ?>
        </div>
    <div class="aside"></div>
</div>

<div class="main-flex page-body">
<div class="aside"></div>
    <div class="main-section">

        <div class="flex-row"> 
            <h1 class="title">KORDUMA KIPPUVAD KÜSIMUSED</h1>
        </div>

        <div class="flex-column"> 
        <h1>LEITUD</h1>
            <?php 
                echo getFAQSection(1);         
            ?>
    
        <h1>KAOTATUD</h1>
        <?php
            echo getFAQSection(2);
        ?>
        <h1>OKSJON</h1>
        <?php
            echo getFAQSection(3);
        ?>
        <h1>MUU</h1>
        <?php
            echo getFAQSection(4);
        ?>
        </div>
    </div>
    <div class="aside"></div>
</div>
</body>