<?php
//define the book class
class Book{
	//declare class properties 
	var $title;
    var $author;
    var $publisher;
    var $yearOfPublication;
    var $format = 'paperback';

    //hello function 

    function sayHello(){
    	return 'Hello';

    }
}
//first instanciate the book class
$first = new Book ;

//setting properties for book class
$first->title = "General Biology";
$first->author = "Abibio";
$first->publisher = "Macmillan Books Ltd";
$first->yearOfPublication = 1990;

echo $first->title 					. PHP_EOL;
echo $first->author          		. PHP_EOL;
echo $first->publisher       		. PHP_EOL;
echo $first->yearOfPublication		. PHP_EOL;


//second instance of the book class
$second = new Book;

//set properties of second book
$second->title                = 'The Colour Of Magic';
$second->author               = 'Terry Pratchett';
$second->publisher            = 'Colin Smythe';
$second->yearOfPublication    = 1983;

//echo the value of format
echo $first->format;
echo $second->format;

echo "<br />";
//echo Hello function
echo $first->sayHello();