<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $htmlContent = $_POST['htmlContent'];
    $search = $_POST['search'];
    $replace = $_POST['replace'];

    // Perform the find and replace operation
    $updatedContent = str_replace($search, $replace, $htmlContent);

    // Output the updated content
    echo "<h2>Updated HTML Content</h2>";
    echo "<pre>" . htmlspecialchars($updatedContent) . "</pre>";
}
?>
