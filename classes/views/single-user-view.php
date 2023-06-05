<?php

class SingleUserView {

    public function renderSingleUser($user):void {
        echo "<p> Säljare: {$user['first_name']} {$user['last_name']}<br>
        Kontaktinfo: {$user['email']}<br>
        </p>";
    }
}
