<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load JSON data
        $jsonFile = FCPATH . 'assets/data/content.json';
        
        if (!file_exists($jsonFile)) {
            return view('pages/home');
        }

        $jsonData = json_decode(file_get_contents($jsonFile), true);

        // Pass data to view
        return view('pages/home', $jsonData);
    }
}

