<?php
// result.php   

if (isset($_POST['username'])) {

    echo "Form data received successfully!";
} else {
    // Handle invalid requests
    http_response_code(400);
    echo "Invalid request.";
}
?>
