<?php

namespace App\Controllers;

class Dashboard extends BaseController {
    public function index() {
        $data = [
            'title' => 'Dashboard',
            'content' => 'v_dashboard'
        ];
        return view('template', $data);
    }
}