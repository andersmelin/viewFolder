<?php

abstract class CompactList{

  private $memberList;

  public function __construct($memberList){
    $this->memberList = $memberList;
  }

  public function show(){
    $str = "";

    foreach ($this->memberList as $key => $value) {
      $str .= "
      <div class="listBox">
        name: {$key['firstName']} {$key['lastName']}<br>
      </div>
      ";
    }
  }

}


// name, member id and number of boats
