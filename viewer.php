<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dream Viewer</title>
</head>
<body>
    <?php 

    function read_dreams() {
        $file_name = "dreams.txt";
        if(file_exists($file_name)) {
            $file_data = file($file_name, FILE_IGNORE_NEW_LINES);

            return $file_data;
        }else {
            return "";
        }
    }

    ?>

    <h2>Here are all the dreams</h2>
    <dl>
        <?php
            $file_contents = read_dreams();
            if($file_contents != "") {
                foreach($file_contents as $line) {
                    $pieces = explode("::", $line);
                    echo "<dt>" . $pieces[0] . "</dt>";
                    echo "<dd>" . $pieces[1] . "</dd>";
                }
            }else {
                echo "<h3>No dreams yet!</h3>";
            }
        ?>
    </dl>
</body>
</html>