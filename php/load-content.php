<!-- loads text file content from data.txt, sends to front end -->

<?php
// Read the content from the file
$content = file_get_contents("../data.txt");

// Output the content as a textarea within a form
echo "<form>";
echo "<textarea rows='10' cols='50'>$content</textarea>";
echo "<br>";
echo "<input type='submit' value='Save'>";
echo "</form>";
?>
