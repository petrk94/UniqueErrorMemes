<?php
// Determines the HTTP status code
$statuscode = http_response_code();

// Path to the folder where the memes are located
$meme_folder = 'path/to/meme/folder/';

// Selects the appropriate meme and error message based on the status code
switch ($statuscode) {
    case 200:
        $meme_image = '200.jpg';
        $message = "Everything is OK!";
        break;
    case 400:
        $meme_image = '400.jpg';
        $message = "Bad Request. Please check your request and try again.";
        break;
    case 404:
        $meme_image = '404.jpg';
        $message = "Not Found. The resource you are looking for might have been removed, had its name changed, or is temporarily unavailable.";
        break;
    case 500:
        $meme_image = '500.jpg';
        $message = "Internal Server Error. We're having some trouble with our system. Please try again later.";
        break;
    default:
        // Default meme if no specific status code is present
        $meme_image = 'default.jpg';
        $message = "An unexpected error occurred.";
}

// Full path to the meme image
$meme_path = $meme_folder . $meme_image;

// Ensures that the image exists
if (file_exists($meme_path)) {
    // HTML Content-Type
    header('Content-Type: text/html');
    echo "<html><body>";
    echo "<h1>Error {$statuscode}</h1>";
    echo "<p>{$message}</p>";
    // Embeds the image
    echo "<img src='{$meme_path}' alt='Error Meme'>";
    echo "</body></html>";
} else {
    // Error message if the image doesn't exist
    echo "Meme not found.";
}
?>
