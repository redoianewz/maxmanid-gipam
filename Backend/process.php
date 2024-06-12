<?php
$db = new PDO('sqlite:sample.db');
// $query = "CREATE TABLE post (
//     id INTEGER PRIMARY KEY AUTOINCREMENT,
//     title TEXT,
//     description TEXT,
//     image TEXT,
//     content TEXT ,
//     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
// )";

// $db->exec($query);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $content = $_POST['content'];

    // Prepare the SQL statement
    $query = "INSERT INTO post (title, description, \"image\", \"content\") VALUES (:title, :description, :image, :content)";
    $stmt = $db->prepare($query);

    // Bind parameters to the statement
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':image', $image);
    $stmt->bindParam(':content', $content);

    // Execute the statement
    $stmt->execute();

    // Move the uploaded file to the desired directory
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $image);

    // Redirect to index.php
    header('Location: home.php');
}
