<?php
/**
 * Created by PhpStorm.
 * User: Getry
 * Date: 2017-10-15
 * Time: 3:40 PM
 */
class Helpme extends Application
{

    public function index()
    {
        $this->data['pagetitle'] = 'Help Wanted!';
        $stuff = file_get_contents('../data/jobs.md');
        $this->data['content'] = $this->parsedown->parse($stuff);
        $this->render();
    }

}