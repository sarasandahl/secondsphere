<?php

class SingleUserView {

    public function renderSingleUser($user):void {
        echo "<p> Säljare: {$user['first_name']} {$user['last_name']}, Varor: </p>"; //varor ska fyllas på med varor säljaren har
    }
}
