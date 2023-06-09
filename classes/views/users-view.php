<?php

//renderar alla användare i en lista genom loop.
class UsersView {

    public function renderAllUsersAsList(array $users):void {
        echo "<ul>";
        foreach($users as $user){ //gör en post på tillhörande id:et i en länk så man kan gå in på en säljare
            echo "<a href='single-user.php?post=".$user['id']."'><li>{$user['last_name']}, {$user['first_name']}</li></a>";
        }
        echo "</ul>";
    }
    
}