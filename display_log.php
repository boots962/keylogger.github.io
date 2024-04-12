<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keylogger Tracker</title>
</head>
<body>
    <?php
    // Read the contents of log.txt
    $log_content = file_get_contents('log.txt');
    
    // Output the contents within a <pre> tag to maintain formatting
    echo '<pre>' . htmlspecialchars($log_content) . '</pre>';
    ?>
</body>
</html>