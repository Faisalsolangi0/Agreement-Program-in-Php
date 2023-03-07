<!DOCTYPE html>
<html>

<head>
    <title>Policy Selection Result</title>
</head>

<body>

    <?php
    $range = 0;
    if (isset($_POST['stipend'])) {
        $range++;
    }
    if (isset($_POST['discipline'])) {
        $range++;
    }
    if (isset($_POST['attendance'])) {
        $range++;
    }
    if (isset($_POST['assignment'])) {
        $range++;
    }
    if (isset($_POST['agree']) && $range >= 3) {
        echo "you are selected";
    } elseif ($range == 3 || $range == 4 && !isset($_POST['agree'])) {
        echo "Fail";
    } else {
        echo "You are not agree";
    }

    ?>

</body>

</html>