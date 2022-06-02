<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/ico">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Database Tables</title>
    <!-- This Page is not suppose to be shwan to the user, it's only for displaying the data in the database. Since I'm Using A free DB It's Better to display it here. -->
</head>

<body>
    <table>
        <tr>
            <th>product_ID
            <th>Quantity
        </tr>

        <tbody id="data"></tbody>
    </table>

    <script>
        var ajax = new XMLHttpRequest();
        ajax.open("GET", "data.php", true);
        ajax.send();

        ajax.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var data = JSON.parse(this.responseText);
                console.log(data);

                var myRetrievedData = "";
                for (var number = 0; number < data.length; number++) {
                    var myProduct_ID = data[number].product_ID; //first column in database
                    var myQuantity = data[number].quantity; //second column in database

                    // writing the Retrieved Data in html
                    myRetrievedData += "<tr>";
                    myRetrievedData += "<td>" + myProduct_ID + "</td>";
                    myRetrievedData += "<td>" + myQuantity + "</td>";

                    myRetrievedData += "</tr>";
                }
                var theOldDataInHTML = document.getElementById("data").innerHTML;
                document.getElementById("data").innerHTML = theOldDataInHTML + myRetrievedData;
            }
        };
    </script>
</body>

</html>