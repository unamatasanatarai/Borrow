<?php

class Home extends Borrow\Controller
{
  public function index()
  {
    return 'index';
  }

  public function show($what){
    var_dump($what);
  }
}
