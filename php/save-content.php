<?php
if (isset($_POST['content'])) {
    $content = $_POST['content'];

    // Write the updated content to the file
    if (file_put_contents("../data.txt", $content)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
