<?php
    require("../head.php");
    require("../../../../config_laf.php");

    $notice = null;
    $id = null;
    $deletedNotice = null;
    $emailError = null;


    if(isset($_GET["id"])){
        $id = $_GET["id"];
        $page = $_GET["page"];
        $notice = viewObject($id, $page);
    }

    if(isset($_POST["deleteAd"])){
        if(isset($_POST["email"]) and !empty($_POST["email"])){
            if(checkEmail($id, $_POST["email"]) == 1){
                $deletedNotice = deleteAd($id);
                $emailError = "DONE!";
            }else{
                $emailError = "E-mailid ei klapi!";
            }
        }else{
            $emailError = "Palun sisesta E-mail!";
        }
    }


?>
<head>
    <script src="../js/delete.js"></script>
</head>
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
    <div class="view"></div>
        <div class="flex-row"> 
            <div class="products">
                <?php echo $notice;?>
            </div>
        </div>
        <div class="flex-row"> 
            <div class ="error">
                <?php echo $emailError; ?>
            </div>
        </div>
    </div>
    <div class="aside"></div>
</div>

</div>
</body>