<?php

    class UsersItemView {
        public function renderSingleUsersItems(array $items):void {
    
            foreach($items as $item) {

                foreach($item as $key => $value) { 
                echo $value . "<br>"; 
            }
        }
    }	
}