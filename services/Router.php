<?php

class Router
{
    public function handleRequest(array $get) : void
    {
        $bc = new BlogController();

        if(!isset($get["route"]))
        {
            $bc->home();
        }
    }
}