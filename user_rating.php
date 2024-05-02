<?php
// Include necessary files and initialize session if not already done
// This assumes you have already established a database connection

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $bookId = $_POST["book_id"];
    $rating = $_POST["rating"];
    $userId = $_SESSION["user_id"]; // Assuming you have stored the user's ID in a session variable

    // Perform validation and ensure user has not already rated this book

    // Insert user rating into the database
    // Replace 'ratings' with your actual ratings table name
    $query = "INSERT INTO ratings (user_id, book_id, rating) VALUES ('$userId', '$bookId', '$rating')";
    // Execute the query

    // Optionally, you can update the book's average rating based on all user ratings
}

// Fetch book details from the database to display to the user
// You can display the book's title, description, etc.

// Display the book rating form
?>
<h2>Rate This Book</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="book_id" value="<?php echo $bookId; ?>">
    <label for="rating">Rating:</label>
    <select id="rating" name="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <input type="submit" value="Submit Rating">
</form>
