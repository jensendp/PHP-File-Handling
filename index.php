<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dream Catcher</title>
</head>
<body>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST["name"];
            $dream = $_POST["dream"];

            catch_dream($name, $dream);
        }

        function catch_dream($name, $dream) {
            $file_name = "dreams.txt";
            $text = $name . "::" . $dream . "\n";
            file_put_contents($file_name, $text, FILE_APPEND);
        }
    ?>

    <?php echo "<h2>Please enter your dreams!</h2>" ?>

    <form method="post" action="index.php">
        Name: <input type="text" name="name" id="name">
        <br><br>
        Dream: <br>
        <textarea name="dream" id="dream" cols="50" rows="10"></textarea>
        <br><br>
        <input type="submit" value="Send Your Dream">
    </form>
</body>
</html>