<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
</head>
<body>
    <h1>Cross site Scripting</h1>
    <?php
    echo htmlspecialchars('<script>alert("바보");</script>');
    ?>
</body>
</html>