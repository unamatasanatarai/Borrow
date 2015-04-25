<?php

class Home extends Borrow\Controller
{
  public function index()
  {
    Session::start(SESSION_NAME);
    echo 'index';
  }

  public function show($what){
    var_dump($what);
  }
}
