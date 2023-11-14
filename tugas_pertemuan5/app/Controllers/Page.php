<?php namespace app\Controllers;

class Page extends BaseController
{
    public function contact(): string
    {
        return 'welcome_message';
    }
    public function about(): string
    {
        return 'welcome_message about';
    }
    
}
