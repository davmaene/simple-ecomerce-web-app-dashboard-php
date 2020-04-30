<?php 

class Customer
{
      public $fstName;
      public $lstName;
      public $addMail;
      public $phoneNumber;
      
     function __construct($fstName,$lstName,$addMail,$phoneNumber)
     {
         $this->fstName = $fstName;
         $this->lstName = $lstName;
         $this->addMail = $addMail;
         $this->phoneNumber = $phoneNumber;
     }

     function get_fstName(){return $this->fstName;}
     function get_lastName(){return $this->lstName;}
     function get_addMail(){return $this->addMail;}
     function get_phoneNum(){return $this->phoneNumber;}
    // -------------------------------------------------- //
}
?>