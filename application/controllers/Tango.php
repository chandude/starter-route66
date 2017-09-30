<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controller that shows 5.
 *
 * @author Andrew
 */
class Tango extends Application
{
    
    /**
     * Shows 5.
     */
    public function index() {
        $this->show(5);
    }
}
