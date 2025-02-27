<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the character and opinion from the POST request
    $character = trim($_POST['character']);
    $opinion = trim($_POST['opinion']);
    $timestamp = date('Y-m-d H:i:s');

    // Validate input
    if (empty($character) || empty($opinion)) {
        // Redirect back with an error message
        header("Location: characters/$character.php?error=empty_fields");
        exit();
    }

    // Sanitize input
    $opinion = htmlspecialchars($opinion);

    // Define the file path
    $filePath = "opinions/{$character}_opinions.txt";

    // Check if the opinions directory exists, if not create it
    if (!is_dir('opinions')) {
        mkdir('opinions', 0755, true);
    }

    // Save opinion with timestamp
    if (file_put_contents($filePath, "[$timestamp] User opinion:\n$opinion\n\n", FILE_APPEND | LOCK_EX) === false) {
        // Redirect back with an error message
        header("Location: characters/$character.php?error=save_failed");
        exit();
    }

    // Redirect back to character page with success message
    header("Location: characters/$character.php?success=true");
    exit();
}
?>