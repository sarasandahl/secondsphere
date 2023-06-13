<?php 

/*     class BuyButton {
        public function renderButton($item):void {
            echo "
                <form action='form-handlers/buy-button-handler.php' method='post'> 
                    <input hidden='true' type='text' name='sold' id='$item.id'><br>
                    <button type='submit'>KÖP</button>
                </form>
            ";
        }
    } */

?>

<form action="form-handlers/buy-button-handler.php" method="post"> <!-- går ej att göra put för update? mådste post?-->
    <input hidden="true" type="text" name="sold" id="sold"><br> <!-- måste jag ha formulär fast ej formulär går det göra snyggare? -->
    <button type="submit">KÖP</button>
</form>