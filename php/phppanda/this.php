<?php
//create book class
class Book {
	var $title ;
	var $author;
	var $publisher;

//declare the summary function for books
	function summary(){

		echo 'Title : ' . $this->title . "<br />"; 
		echo 'Author : ' .$this->author ."<br />";
		echo 'Publisher : ' .$this->publisher. "<br />";
	}
}

//instanciate the book object
$book = new Book;

//setting the properties of the book
$book->title = 'PHP for Dummies';
$book ->author = 'Dummies Inc';
$book -> publisher = 'Dummies Ltd';

//output the summary of book
echo $book->summary();