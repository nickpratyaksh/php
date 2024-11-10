<?php
// Specify the file name (you may add the path manually if needed)
// $file = "/path/to/your/file.txt";
$file = "sample.txt";  // This file will be created in the same directory as this PHP file

// Create and open the file for writing
$fileHandle = fopen($file, "w");
if ($fileHandle) {
    // Write some text to the file
    $content = "This is a sample file created with PHP";
    fwrite($fileHandle, $content);
    echo "Content written to file successfully.<br>";
    fclose($fileHandle);
} else {
    echo "Error: Could not open the file for writing.";
}

// Open the file for reading
$fileHandle = fopen($file, "r");
if ($fileHandle) {
    // Read the content from the file
    echo "Reading content from file:<br>";
    while (($line = fgets($fileHandle)) !== false) {
        echo $line . "<br>";
    }
    fclose($fileHandle);
} else {
    echo "Error: Could not open the file for reading.";
}
