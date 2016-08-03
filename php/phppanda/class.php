<?php
//define the book class
class Book{
	//declare class properties 
	var $title;
    var $author;
    var $publisher;
    var $yearOfPublication;
    var $format = 'paperback';
}
//first instanciate the book class
$first = new Book ;

//setting properties for book class
$book->title = "General Biology";
$book->author = "Abibio";
$book->publisher = "Macmillan Books Ltd";
$book->yearOfPublication = 1990;

echo $book->title 					. PHP_EOL;
echo $book->author          		. PHP_EOL;
echo $book->publisher       		. PHP_EOL;
echo $book->yearOfPublication		. PHP_EOL;


//second instance of the book class
$second = new Book;

//set properties of second book
$second->title                = 'The Colour Of Magic';
$second->author               = 'Terry Pratchett';
$second->publisher            = 'Colin Smythe';
$second->yearOfPublication    = 1983;