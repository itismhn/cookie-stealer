<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clear Cookies</title>
</head>
<body>
    <h2>Clear Cookies</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <button type="submit" name="clear_cookies">Clear Cookies</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['clear_cookies'])) {
        $file = 'cookie.txt';

        // Open the file in write mode to clear its contents
        $handle = fopen($file, 'w');
        
        if ($handle === false) {
            echo "Error opening file '$file'.";
        } else {
            // Clear the contents of the file
            if (fwrite($handle, '') !== false) {
                echo "Contents of file '$file' cleared successfully.";
            } else {
                echo "Error clearing contents of file '$file'.";
            }

            // Close the file handle
            fclose($handle);
        }
    }
    ?>
</body>
</html>

