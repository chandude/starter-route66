<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Controller that gets JSON data instead of an HTML page
 *
 * @author Andrew
 */
class Juliet extends CI_Controller
{
    public function index()
    {
        $record = $this->quotes->get(1);
        header("Content-type: application/json");
        echo json_encode($record);
    }
}
