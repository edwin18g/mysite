<?php
class Home extends Controller
{
    public function index()
    {
        $data = ['title' => 'Home', 'message' => 'Welcome to your fresh PHP micro-framework!'];
        $this->view('home', $data);
    }

    public function hello($name = 'Guest')
    {
        $data = ['title' => 'Hello', 'name' => htmlspecialchars($name, ENT_QUOTES, 'UTF-8')];
        $this->view('home', $data);
    }
}
