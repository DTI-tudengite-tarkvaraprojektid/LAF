<?php
$database = "if19_LAF";

$show=null;
$searchedName=null;
$searchedCategory=null;
$searchedArea=null;
$sentElement=null;
$searchedEndDate=null;
$searchedStartDate=null;
$offset = 0;
$filter = null;
if(isset($_POST["submitSearch"])){
    $searchedName = ($_POST["otsingSona"]);
    if(isset($_POST["category"])){
        $searchedCategory =($_POST["category"]);
        if($searchedCategory=="riided"){
            $sentElement=1;
        }elseif($searchedCategory=="tehnika"){
            $sentElement=2;
        }elseif($searchedCategory=="muu"){
            $sentElement=3;
        }
    }else{$searchedCategory =null;
        $sentElement=null;
    }
 if(isset($_POST["Date-Start"])){
    $searchedStartDate=$_POST["Date-Start"];
    }
 if(isset($_POST["Date-Start"])){
    $searchedEndDate=$_POST["Date-End"];
   }
    $searchedArea =($_POST["area"]);
    $thisLink =($_POST["linkname"]);
    if($thisLink==1){
        $notice = displayLostItems($offset,$searchedName,$sentElement,$searchedArea,$thisLink,$searchedStartDate,$searchedEndDate);
    }else if($thisLink==2) {
        $notice = selectFoundPostsHTML($offset,$searchedName,$sentElement,$searchedArea,$thisLink,$searchedStartDate,$searchedEndDate);
    }else if($thisLink==3){
        $notice=getAuctionElements($show,$searchedName,$sentElement,$searchedArea,$thisLink, $offset,$searchedStartDate,$searchedEndDate);   
    }


}


?>


            <div class="filters">
                <h2 class="flex-column" onClick="window.location.reload;"  id="filterMain" >FILTREERI</h2>
                <ul class="ul flex-column">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="filterForm">
                    <li><input id="other" name="otsingSona" type="input" placeholder="Otsingusõna" value="<?php
                    echo $searchedName;?>" data-value="<?php echo $searchedName;?>"></li>
                    <li>
                        <select name="category" id="category" data-value="<?php echo $searchedCategory;?>" value="<?php echo $searchedCategory;?>">
                        <option disabled selected value>  Vali kategooria  </option>
                        <?php 
                            $array = array("riided", "tehnika", "muu");
                        for ($i=0; $i < sizeof($array); $i++) :
                            $selected = "";
                            if($array[$i] == $searchedCategory) {
                                $selected = "selected";
                            }
                                ?><option value="<?php echo $array[$i];?>" <?php echo $selected; ?>><?php echo $array[$i]; ?></option><?php

                        endfor; ?>
                            
                        </select>
                    </li>
                    <?php if ($linkValue==3):?>
                        <li><input id="other" name="area" type="input" hidden placeholder="Kaotamise koht" value="<?php echo $searchedArea;?>" data-value="<?php echo $searchedArea;?>"></li>
                    <?php  endif;?>
                    <?php if ($linkValue==2):?>
                        <li><input id="other" name="area" type="input" placeholder="Leidmise koht" value="<?php echo $searchedArea;?>" data-value="<?php echo $searchedArea;?>"></li>
                    <?php  endif;?>
                    <?php if ($linkValue==1):?>
                        <li><input id="other" name="area" type="input" placeholder="Kaotamise koht" value="<?php echo $searchedArea;?>" data-value="<?php echo $searchedArea;?>"></li>
                    <?php  endif;?>
                    <li class="flex-column"><label>Alguskuupäev</label></li>
                    <li><input id="start-date" name="Date-Start" type="date" value="<?php echo $searchedStartDate?>" data-value="<?php echo $searchedStartDate;?>"></li>
                    <li class="flex-column"><label>Lõppkuupäev</label></li>
                    <li><input id="end-date" name="Date-End" type="date" value="<?php echo $searchedEndDate?>" data-value="<?php echo $searchedEndDate;?>"></li>
                    <li><input type="hidden" name="linkname" value="<?php echo $linkValue?>"></li>
                    
                    <input name="submitSearch" id="submitSearch" type="submit" value="Otsi">
                        <span id="notice">
                            <?php  ?>
                        </span>
                    </li>
                </form>
                </ul>
            </div>
<script src="../js/timer.js"></script>
<script src="../js/script.js"></script>