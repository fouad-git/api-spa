<?php

namespace App;

class Countries
{
    public $json;
    public $parsed_json;
//     private $name;
//   public  function __construct($name )
//   {
//       $this->name = $name;
//       $this->name = $_POST['name'];
//   }
 
public  function callCountries()
{
    $this->json = file_get_contents('https://restcountries.eu/rest/v2/all');
    $this->parsed_json = json_decode($this->json);
   return ($this->parsed_json);
}

}