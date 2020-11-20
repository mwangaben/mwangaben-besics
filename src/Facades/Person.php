<?php 
namespace Mwangaben\Basics\Facades;

use Illuminate\Support\Facades\Facade;
use Mwangaben\Basics\Person as Personal;

class Person  extends Facade
{
    
    protected static function getFacadeAccessor()
    {
          return  new Personal();
    }
}
