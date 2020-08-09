<?php

$xml=simplexml_load_file("default.xml") or die("Error: Cannot create object");

foreach($xml->children() as $books) {
    echo "Title: " . $books->title . "<br>";
    echo "Author: " . $books->author . "<br>";
    echo "Year: " . $books->year . "<br>";
    echo "Price: " .$books->currency . $books->price ."<br>";
    echo "Condition: " . $books->condition . "<br>";
    echo "------------------------------- <br>";
}
?>