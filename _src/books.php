<?php

class bo_books {

//public

public $title = array(); 
public $image = array(); 
public $author = array(); 
public $description = array(); 
public $year = array ();
public $price = array(); 
public $discount = array();
public $discounted = array();

//private 

protected $DataObject;

function __construct()
 {

  $this->DataObject = new books();

 }

public function apply_discount()
 {

  $this->title = $this->DataObject->title;
  $this->image = $this->DataObject->image;
  $this->author = $this->DataObject->author;
  $this->description = $this->DataObject->description;
  $this->year = $this->DataObject->year; 
  $this->price = $this->DataObject->price;

  $j = 0;  

  foreach($this->year as $year)
	{

	if ($this->year[$j] == '2004')
		$this->discount[$j] = '20';
	  elseif ($this->year[$j] == '2005')
		$this->discount[$j] = '10';

	$this->discounted[$j] = intval($this->price[$j] * (100 - $this->discount[$j])  ) / 100 ; 
	$j++;

	};
 
 } // end function apply_discount()

} // end class bo_books
