<?php
$database = "if19_LAF";
if(isset($_POST["submitSearch"])){
    $searchedName = ($_POST["otsingSona"]);
    $searchedCategory =($_POST["category"]);
    $searchedArea =($_POST["area"]);
    searchedItems($searchedName,$searchedCategory,$searchedArea);
     $notice = "Su pakkutud hind on väiksem praegusest";
}
?>


            <div class="filters">
                <h2 class="flex-column" onClick="window.location.reload();" id="filterMain" >FILTREERI</h2>
                <ul class="ul flex-column">
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="filterForm">
                    <li><input id="other" name="otsingSona" type="input" placeholder="Otsingu sõna"></li>
                    <li>
                        <select name="category" id="category">
                            <option value="riided">Riided</option>
                            <option value="tehnika">Tehnika</option>
                            <option value="muu">Muu</option>
                        </select>
                    </li>
                    <li><input id="other" name="area" type="input" placeholder="Asukoht"></li>
                    <li><input id="start-date" name="Date-Start" type="date"></li>
                    <li><input id="end-date" name="Date-End" type="date"></li>
                    <li>
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