<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    protected $model;
    protected $title = "Dashboard";
    protected $url = "/";
    protected $folder = "module.dashboard";
    protected $form;

    public function __construct()
    {
    }

    public function getIndex()
    {
        $data['title'] = '';
        $data['title'] = $this->title;
        return view($this->folder . '.index', $data);
    }
}
