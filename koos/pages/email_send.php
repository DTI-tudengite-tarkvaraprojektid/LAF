<?php 
require('../head.php'); 
$notice = null;

?>

<body>


<?php require('../header.php'); ?>


<div class="main-flex page-body">
    <div class="aside"></div>


    <div class="main-section">

        <!-- HERO TEXT  -->
        <div class="flex-row"> 
            <h1 class="title">EMAILI SAATMINE</h1>
        </div>

        
        <!-- PAGE BODY -->
        <div class="clearfix-50"></div>


            <form class="flex-column" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        
            <label class="storageLabel">Hoiupaik</label>
            <select>
            <option selected disabled value>Vali hoiupaik</option>
            <?php echo readStoragesForSelect(); ?>
            </select>       
            
            <input name="sendEmail" class="add-ad" type="submit" value="Saada meil"> <span><?php echo $notice; ?></span>
            
            </form>


            <div>
            
            </div>

    </div><!--.main-section-->


    <div class="aside"></div>
</div><!--.main-flex-->


</body>
</html>