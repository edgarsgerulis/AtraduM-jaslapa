<?php
// Array to store lost and found items
$lostAndFoundItems = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $itemName = $_POST['item_name'];
    $itemCategory = $_POST['item_category'];
    $itemDescription = $_POST['item_description'];
    $itemStatus = $_POST['item_status'];

    // Create an array with the submitted data
    $item = [
        'name' => $itemName,
        'category' => $itemCategory,
        'description' => $itemDescription,
        'status' => $itemStatus
    ];

    // Add the item to the lost and found list
    $lostAndFoundItems[] = $item;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Lost and Found Items</title>
</head>
<body>
    <h2>Report Lost or Found Item</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Item Name: <input type="text" name="item_name"><br>
        Item Category: <input type="text" name="item_category"><br>
        Description: <textarea name="item_description"></textarea><br>
        Status (Lost/Found): <input type="text" name="item_status"><br>
        <input type="submit" value="Submit">
    </form>

    <h2>Lost and Found Items</h
