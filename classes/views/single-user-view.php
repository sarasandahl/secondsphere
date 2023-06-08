<?php

class SingleUserView {

    public function renderSingleUser($user):void {
        echo "<p> Säljare: {$user['first_name']} {$user['last_name']}<br>
        Kontaktinfo: {$user['email']}<br>
        Antal plagg inlämnade: stycken<br>
        Antal plagg sålda: stycken<br>
        Totalt sålt för: kr<br>
        Totalt intjänat belopp: kr<br>
        </p>";
    }
}