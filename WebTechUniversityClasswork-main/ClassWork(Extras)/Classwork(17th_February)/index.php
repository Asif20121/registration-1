<?php 
    $fileReader = fopen('data.txt', 'r') or die('Unable to read the file');

    echo fread($fileReader, filesize('data.txt'));
    fclose($fileReader);

    $fileWriter = fopen('data.txt', 'w') or die('Unable to open the file');

    $text = "Hello world";
    fwrite($fileWriter, $text);
    fclose($fileWriter);

    $simplexml = new SimpleXMLElement('<?xml version="1.0" ?><books />');
    $book1 = $simplexml->addChild('book');
    $book1->addChild('book', 'The Wandering Oz');
    $book1->addChild('PublicationDate', 2007);

    $book2 = $simplexml->addChild('book');
    $book2->addChild('Booktitle', 'The Roaming Fox');
    $book2->addChild('PublicationDate', 2009);

    file_put_contents('books.xml', $simplexml->asXML());
?>