<?php

class books {

//public

public $title = array(); 
public $image = array(); 
public $author = array(); 
public $description = array(); 
public $year = array ();
public $price = array(); 

// private 

private $filename = "data.txt";

//class constructor

function __construct()
{

 //get the lines as an array

  $i=-1;
  $lines = file($this->filename);

// strip "\n" at the end of each array
// get each variable in an array

  foreach ( $lines as $line) {

	if (strlen($line) > 2) {
	
	$line = rtrim($line);

	list($what, $content) = explode("=> ", $line);

	if ($what == "Title") {
		$i++;
		$this->title[$i]=$content;
		}
	elseif ($what == "Image") {
		$this->image[$i]=$content;
		}
	elseif ($what == "Author") {
		$this->author[$i]=$content;
		}
	elseif ($what == "Description") {
		$this->description[$i]=$content;
		}
	elseif ($what == "Year") {
		$this->year[$i]=$content;
		}
	elseif ($what == "Price") {
		$this->price[$i]=$content;
 
		};
	    };
	};

} // end constructor

} // end GetData
