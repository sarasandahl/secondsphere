<form>
    <div>
        <label for="user">Säljare:</label>
        <select name="userId" id="user">
            <option value="">--Välj säljare--</option>
        </select>
    </div>
    <div>
        <label for="product_name">Rubrik: </label>
        <input type="text" name="product_name" id="product_name">
    </div>
    <div>
        <label for="brand">Märke: </label>
        <input type="text" name="brand" id="brand">
    </div>
    <div>
        <label for="type">Typ av plagg: </label>
        <input type="text" name="type" id="type">
    </div>
    <div>
        <label for="description">Beskrivning: </label>
        <input type="text" name="description" id="description">
    </div>
    <div>
        <label for="size">Storlek: </label>
        <input type="text" name="size" id="size">
    </div>
    <div>
        <label for="price">Pris: </label>
        <input type="number" name="price" id="price" min="50" max="50000">
    </div>
    <div>
        <label for="condition">Vilket skick är varan:</label>
        <select name="conditionId" id="condition">
            <option value="">--Välj skick--</option>
        </select>
    </div>
    <button type="submit">Lägg till Vara</button>
</form>