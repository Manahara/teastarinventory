<?php
class HomeController extends BaseController{
    public function getIndex()
    {
        return view::make('home.index');
    }
    public function getLogin(){
        return view::make('home.login');
    }
    public function getRegister(){
        return view::make('home.register');
    }
}