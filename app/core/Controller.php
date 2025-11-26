<?php
class Controller
{
    protected $data = [];

    public function __construct()
    {
        // place for common initialization
    }

    // Simple view renderer: `view('folder/file', ['k'=> 'v'])`
    protected function view($view, $data = [])
    {
        $this->data = array_merge($this->data, $data);
        $viewFile = APP_PATH . '/views/' . $view . '.php';
        if (!file_exists($viewFile)) {
            throw new Exception("View not found: $viewFile");
        }

        extract($this->data, EXTR_SKIP);
        include $viewFile;
    }
}
