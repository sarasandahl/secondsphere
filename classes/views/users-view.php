<?php

class UsersView {

    public function renderAllUsersAsList(array $users):void {

        echo "<ul>";
        foreach($users as $user){
            echo "<a href='single-user.php?post=".$user['id']."'><li>{$user['last_name']}, {$user['first_name']}</li></a>";
        }
        echo "</ul>";
    }
}