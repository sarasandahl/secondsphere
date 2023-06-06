<?php

//1.
class UsersItemView {
    public function renderSingleUsersItems(array $items):void {
        $num=0;

        foreach ($items as $item){
            $num++; 
            echo "<br><b># $num</b><br>";
                foreach ($item as $key=>$value) {
                echo "$key: $value <br>";
            }
        }
    }
}

////////////////////////////////////////////////////////////////////////////

//2.
class UsersItemView {
    public function renderSingleUsersItems(array $items):void {

        foreach ($items as $item ) {

            foreach ($item as $key => $value ) {
            	echo $key . ": " . $value . "<br>";             
            }
        }
    }
}

////////////////////////////////////////////////////////////////////////////

//3.
    class UsersItemView {
        public function renderSingleUsersItems(array $items):void {
    
        foreach($items as $item) {
        ?>
            <div>
            <h4><?= $item["product_name"] ?></h4>

            <?php
            echo "<img src='{$item['image']}' alt='image' height='600px'><br>";

            ?>
            <p>Pris: <?= $item["price"] ?></p>
        </div>
        <?php
        }
    }
}

////////////////////////////////////////////////////////////////////////////

//funkar ej
class UsersItemView {
    public function renderSingleUsersItems(array $items):void {
 
echo "<ul>";
       foreach($items as $item) {
            foreach($item['product_name'] as $i) {
               echo "<li>{$i}</li>";            
           }
		}
        echo "</ul>";

        foreach($items['image'] as $image) {
    	   echo "<img src='{$image}' alt='image' height='600px'><br>";
        }
    }
}


////////////////////////////////////////////////////////////////////////////

	//funkar ej
	class UsersItemView {
		public function renderSingleUsersItems(array $items):void {	
		$keys = array_keys($items);
	
		for($i = 0; $i < count($item); $i++) {
			$item = explode(" : ", $item);
			echo "<br>";
			foreach($item[$keys[$i]] as $key => $value) {
				echo $value . "<br>";
				}
				echo "<br>";
			}
		}
	}
	
////////////////////////////////////////////////////////////////////
	
	//funkar ej
	class UsersItemView {
		public function renderSingleUsersItems(array $items):void {
	
	echo "<ul>";
			foreach($items as $item) {
				foreach($item['product_name'] as $i) {
					echo "<li>{$i}</li>";            
				}
	
			}
			echo "</ul>";
	
			foreach($items['image'] as $image) {
				echo "<img src='{$image}' alt='image' height='600px'><br>";
			}
		}
	}