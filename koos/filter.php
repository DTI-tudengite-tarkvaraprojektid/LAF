<?php
$database = "if19_LAF";
?>


            <div class="filters">
                <h2 class="flex-column">FILTREERI</h2>
                <ul class="ul flex-column">
                <form method="POST" action="#" class="filterForm">
                    <li><input id="other" name="muu" type="input" placeholder="Otsingu sõna"></li>
                    <li>
                        <select name="category" id="category">
                            <option value="riided">Riided</option>
                            <option value="tehnika">Tehnika</option>
                            <option value="muu">Muu</option>
                        </select>
                    </li>
                    <li><input id="other" name="muu" type="input" placeholder="Asukoht"></li>
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