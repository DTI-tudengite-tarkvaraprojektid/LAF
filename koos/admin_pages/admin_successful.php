<?php 
    require('../head.php'); 

    $notice = null;
    
    if(!isset($_SESSION["userId"])){
        header("Location: admin_login.php");
        exit();
    }

    if(isset($_GET["logout"])){
        session_unset();
        session_destroy();
        header("Location: admin_login.php");
        exit();
    }
?>

<body>

<div class="main-flex header">
    <div class="aside"></div>

    <!-- HEADER -->
    <div class="main-section">
        <?php require('../header_admin.php'); ?>
    </div>
    <div class="aside"></div>

</div>

<div class="main-flex page-body">
    <div class="aside"></div>


    <div class="main-section">

        <!-- HERO TEXT  -->
        <div class="flex-row"> 
            <h1 class="title">EDUKAD OKSJONID</h1>
        </div>

        <div class="clearfix-50">
        </div>
        <!-- PAGE BODY -->

        <div class="filtersProductsLayout"> 

            <?php require("../filter.php") ?>
            <div class="products">
                    <?php echo $notice ?>
            
            </div><!--.products -->
        </div><!--.flex-row-->

    </div><!--.main-section-->


    <div class="aside"></div>
</div>

</body>
</html>