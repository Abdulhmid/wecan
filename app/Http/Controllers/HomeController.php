<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models as Md;

class HomeController extends Controller
{
    protected $model;
    protected $title = "We Can If We Together";
    protected $url = "/";
    protected $folder = "module.home";
    protected $form;

    public function __construct(Md\Users $users)
    {
        $this->model    = $users;
        $this->form     = UsersForm::class;
    }

    public function getIndex()
    {
        $data['title'] = $this->title;
        $data['breadcrumb'] = $this->url;
        return view($this->folder.'.index', $data);
    }
}
