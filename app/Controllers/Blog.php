<?php

namespace App\Controllers;

use App\Models\BlogModel;

class Blog extends BaseController {
    public function index() {
        return view('v_blog');
    }

    public function tampil() {
        $model = new BlogModel();
        Echo $model -> getData();
    }
}