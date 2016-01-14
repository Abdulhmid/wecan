<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    protected $model;
    protected $title = "Dashboard";
    protected $url = "/";
    protected $folder = "module.home";
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
