<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET and POST Methods</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1>Web Form Processor</h1>
    <form action="<?php echo $SERVER["PHP_SELF"]?>" method="get">
        <label for="fName">First Name:</label>
        <input type="text" id="fName" autocomplete="off">

        <label for="lName">Last Name:</label>
        <input type="text" id="lName" autocomplete="off">

        <div class="buttons">
            <button type="submit">Submit</button>
            <button type="submit">Submit using POST</button>
            <button type="reset">Reset</button>

        </div>
    </form>
    
</body>
</html>