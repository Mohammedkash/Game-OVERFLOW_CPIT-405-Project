var ajax = new XMLHttpRequest();
ajax.open("GET", "data.php", true);
ajax.send();

ajax.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
        var data = JSON.parse(this.responseText);
        // console.log(data);
        var td_myProduct_Counter = 1;
        var old_max = 999;
        for (var number = 0; number < data.length; number++) { //starting from 0 because the object start with an index 0
            var myProduct_ID = data[number].product_ID; //first column in database
            var myQuantity = data[number].quantity; //second column in database
            // console.log(myProduct_ID);
            // console.log(myQuantity);


            // writing the Retrieved Data in html
            let readInStock = document.getElementById("product-InStock" + myProduct_ID).innerHTML += myQuantity;
            console.log("the stock for this item is " + readInStock);

            let inputELem = (document.getElementById("td_myProduct" + td_myProduct_Counter + "_Quantity").innerHTML);

            inputELem = inputELem.trim(inputELem);
            let newELEM = inputELem.replace("max=\"" + old_max + "\"", "max=\"" + readInStock + "\"");
            console.log(newELEM);


            document.getElementById("td_myProduct" + td_myProduct_Counter + "_Quantity").innerHTML = newELEM;
            td_myProduct_Counter++;
        } //

    }
};
