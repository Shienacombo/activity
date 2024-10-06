<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .container {
            background-color: white;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .user-info {
            margin-bottom: 20px;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }
        .user-info:last-child {
            border-bottom: none;
        }
        .user-info p {
            margin: 5px 0;
            font-size: 18px;
            color: #555;
        }
        .user-info p strong {
            color: #333;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>User Information</h2>

    <?php
    $firstName = "Name: Fran Daniel";
    $lastname = "Lastname: Garcia";
    $age = "Age: 22";
    $address = "Address: Antipolo City";
    $contact = "Contact: 09090903654";
    
    $firstName1 = "Name: Charles";
    $lastname1 = "Lastname: Del Rosario";
    $age1 = "Age: 20";
    $address1 = "Address: Angono City";
    $contact1 = "Contact: 09049504969";
    
    $firstName2 = "Name: Shiena";
    $lastname2 = "Lastname: Combo";
    $age2 = "Age: 23";
    $address2 = "Address: Antipolo City";
    $contact2 = "Contact: 09090903657";
    ?>

    <div class="user-info">
        <p><?= $firstName ?></p>
        <p><?= $lastname ?></p>
        <p><?= $age ?></p>
        <p><?= $address ?></p>
        <p><?= $contact ?></p>
    </div>

    <div class="user-info">
        <p><?= $firstName1 ?></p>
        <p><?= $lastname1 ?></p>
        <p><?= $age1 ?></p>
        <p><?= $address1 ?></p>
        <p><?= $contact1 ?></p>
    </div>

    <div class="user-info">
        <p><?= $firstName2 ?></p>
        <p><?= $lastname2 ?></p>
        <p><?= $age2 ?></p>
        <p><?= $address2 ?></p>
        <p><?= $contact2 ?></p>
    </div>
</div>

</body>
</html>
