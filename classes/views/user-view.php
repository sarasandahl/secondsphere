<?php

class UserView {

    public function renderAllUsersAsList(array $users):void {
        echo "<ul>";
        foreach($users as $user){
            echo "<li>{$user['first_name']} {$user['last_name']}</li>";
        }
        echo "</ul>";
    }
}