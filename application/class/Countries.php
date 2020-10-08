<?php

namespace App;

class Countries
{
    public $json;
    public $parsed_json;

 
public  function callCountries()
{
    $this->json = file_get_contents('https://restcountries.eu/rest/v2/all');
    $this->parsed_json = json_decode($this->json);
   return ($this->parsed_json);
}
public  function callRegion($region)
{
    $this->json = file_get_contents('https://restcountries.eu/rest/v2/region/'.$region);
    $this->parsed_json = json_decode($this->json);
   return ($this->parsed_json);
}
}
?>