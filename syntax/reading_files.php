<?php


// FILE INTO STRING
$content = file_get_contents("reading_files_test.txt");
echo $content;
echo "<br>";
echo gettype($content);
echo "<br>";
// this wont bring the line breaks, are converted to spaces.

//FILE INTO ARRAY
$content2 = file("reading_files_test.txt");
print_r($content2);
echo "<br>";
echo gettype($content2);
echo "<br>";

//READING FILE WITH MORE OPTIONS
$resource = fopen("reading_files_test.txt", "r");
// r is for just read
$content3 = fread($resource, filesize("reading_files_test.txt"));
// with filesize() it will read all the file, is the size of the file
print_r($content3);
echo "<br>";
echo gettype($content3);
echo "<br>";

//WRITING TO A FILE by OVERRIDE
$text_file = fopen("reading_files_test.txt", "w");
// w deletes everything of the file and overwrites it
$content4 = "new line";
fwrite($text_file, $content4);

//ADDING OR MODIFYING A FILE
$text_file = fopen("reading_files_test.txt", "a");
// a mode lets you add lines
$content5 = "<br>second line<br>";
fwrite($text_file, $content5);

//CREATE A NEW FILE
// w or a modes create a file if it doesnt exist
$new_file = fopen("new_file.txt", "w");
$content6 = "new file content";
fwrite($new_file, $content6);

//new FILE INTO ARRAY
$file2 = file("new_file.txt");
print_r($file2);
echo "<br>";
echo gettype($file2);
echo "<br>";

//delete a file
unlink("newfile.txt");

//read the files in a folder

$folder = opendir("reading_files_test_directory");
// READDIR FUNCTION returns false if there are no more files
// and returns the next file to perform an iteration

/*while (readdir($folder) != FALSE){

}*/