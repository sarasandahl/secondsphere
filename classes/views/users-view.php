<?php

class UsersView {

    public function renderAllUsersAsList(array $users):void {
        echo "<ul>";
        foreach($users as $user){
            echo "<a href='single-user.php?post=".$user['id']."'><li>{$user['first_name']} {$user['last_name']}</li></a>";
        }
        echo "</ul>";
    }
}