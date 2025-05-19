<?php

namespace App\Models;

use CodeIgniter\Model;

class BlogModel extends Model {
    function getData() {
        return "ini return dari Model";
    }
}