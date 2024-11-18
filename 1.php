<?php
    $time_start = microtime(true);

    // Спим некоторое время
    usleep(100);

    $time_end = microtime(true);
    $time = $time_end - $time_start;

  echo "Ничего не делал $time секунд\n";
phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
