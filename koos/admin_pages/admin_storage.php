<?php 
    $pageTitle="LAF admin. Hoiupaigad";
    require('../head.php'); 

    if(isset($_SESSION["LAST_ACTIVITY"]) && (time() - $_SESSION["LAST_ACTIVITY"] > 1800)){
        session_unset(); 
        session_destroy();  
        header("Location: admin_login.php");
        exit();
    }
    
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

    $storageHTML = readStoragesForSelect();

    $noticeNew = null;
    $notice = null;

    $newStorageName = null;
    $newPhonenr = null;
    $storageID = null;
    $phonenr = null;

    $newPhonenr_error = null;
    $newStorageName_error = null;
    $storageID_error = null;
    $phonenr_error = null;

    $case = 0;

    //uus hoiupaik
    if(isset($_POST["submitNewStorage"])){
        //nimetuse kontroll
        if(isset($_POST["new-storage-name"]) and !empty($_POST["new-storage-name"])){
            $newStorageName = test_input($_POST["new-storage-name"]);
        } else {
            $newStorageName_error = "Palun sisesta uue hoiupaiga nimetus!";
        }
        //tel nr kontroll
        if(isset($_POST["new-phonenr"]) and !empty($_POST["new-phonenr"])){
            $newPhonenr = test_input($_POST["new-phonenr"]);
        } else {
            $newPhonenr_error = "Palun sisesta uue hoiupaiga telefoninumber!";
        }

        if(empty($newStorageName_error) and empty($newPhonenr_error)){
            $noticeNew = addNewStorageToDB($newStorageName, $newPhonenr, $_POST["email"]);

            if($noticeNew == 2) {
                $case = 9;
            } elseif ($noticeNew == 404) {
                $case = 10;
            }
            $newStorageName = null;
            $newPhonenr = null;
            $storageHTML = readStoragesForSelect();
        }
    }

    //uuenda hoiupaika
    if(isset($_POST["updateStorage"])){
        //nimetuse kontroll
        if(isset($_POST["storage-name"]) and !empty($_POST["storage-name"])){
            $storageID_error = null;
            $storageID = $_POST["storage-name"];
        } else {
            $storageID_error = "Palun vali hoiupaiga nimetus!";
        }
        //tel nr kontroll
        if(isset($_POST["phonenr"]) and !empty($_POST["phonenr"])){
            $phonenr = $_POST["phonenr"];
        } else {
            $phonenr_error = "Palun sisesta hoiupaiga telefoninumber!";
        }

        if(empty($storageID_error) and empty($phonenr_error)){
            $notice = updateStorage($storageID, $phonenr);
            if($notice == 2) {
                $case = 8;
            } elseif ($notice == 404) {
                $case = 10;
            }
            $phonenr = null;
        }
    }

?>
<body>

<?php require('../header_admin.php'); ?>


<div class="main-flex page-body">
    <div class="aside"></div>

        <div class="main-section">
            <!-- pealkiri  -->
            <div class="flex-row"> 
                <h1 class="title">HOIUPAIGAD</h1>
            </div>

        <!--hoiupaiga lisamise vormid -->
        <form class="flex-column" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        
        <label class="storageLabel">Hoiupaiga nimetus 
        <input name="new-storage-name" type="text" value="<?php echo $newStorageName; ?>"> 
        <p class="star">*</p><span><?php echo $newStorageName_error; ?></span>        
        </label> 
        

        <label class="storageLabel">Telefoninumber
        <input name="new-phonenr" type="text" value="<?php echo $newPhonenr; ?>">
        <p class="star">*</p> <span><?php echo $newPhonenr_error; ?></span>
        </label>

        <label class="storageLabel">E-mail
        <input name="email" type="email">
        </label>

        <input name="submitNewStorage" class="add-ad" type="submit" value="LISA UUS"> <span></span>
        
        </form>

        <br>
        <br>
        <hr>
        <br>

        <form class="flex-column" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
        
        <label class="storageLabel">Hoiupaiga nimetus
            <select name="storage-name">
                <option disabled selected value>Vali hoiupaik</option>
                <?php echo $storageHTML; ?>
            </select>
        <p class="star">*</p> <span><?php echo $storageID_error; ?></span>
        </label>

        <label class="storageLabel">Telefoninumber
        <input name="phonenr" type="text" value="<?php echo $phonenr; ?>">
        <p class="star">*</p> <span><?php echo $phonenr_error; ?></span>
        </label>

        <input name="updateStorage" class="add-ad" type="submit" value="MUUDA"> <span></span>
        
        </form>



        </div>
    <div class="aside"></div>
</div>

<input class="modalCase" type="hidden" data-case="<?php echo $case;?>">
<?php 

$url = "admin_settings.php";
$urlTitle = 'Tagasi seadetesse';
require('../pages/modal.php'); ?>
</body>
</html>