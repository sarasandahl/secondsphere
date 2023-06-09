<?php

//renderar delar av sidan på enskild säljare. Med information om säljare samt information om statistiken kring säljarens varor
class SingleUserView {

    //funktionen rendera säljarens kontaktuppgifter från users-tabellen
    public function renderSingleUser($user):void {

        echo "<p> Säljare: {$user['first_name']} {$user['last_name']}<br>
        Kontaktinfo: {$user['email']}<br>
        </p>";
    }

    //funktionen tar statistik kring säljarens varor efter en ihopkoppling av tabellerna. Ska denna ligga i egen view?
    public function renderUserStats(array $items):void {
        
        $amountOfItems = count($items); //räknar antalet produkter totalt

        $sold = array_filter($items, fn($item) => $item['sold'] == "1"); //filtrerar på vilka varor som är sålda(1) i tabellen och tar bara med dem, räknas ut i outputen

        $total = 0; //säger att totalen för summan ska börja räkna på 0

        foreach($sold as $item) { //loopar igenom listan på tabellen priser(price) och slår ihop det med $total för att fåp ut totalen
            $total += $item['price'];
        }

        $earnedAmount = $total * 0.7; //drar av 30% på totala beloppet, vilket är företagets "arvode"

        ?>

        <div>
        <p>Antal inlämnade plagg: <?= $amountOfItems; ?> stycken</p>
        <p>Antal sålda plagg: <?= count($sold); ?> stycken</p> 
        <p>Sålt för totalt: <?= $total; ?> kr</p>
        <p>Totalt intjänat belopp: <?=  $earnedAmount; ?>kr</p>
        </div>
        <?php
    }
}
