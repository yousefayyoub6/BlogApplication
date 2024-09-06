<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\IRepository\HomeInterface;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $home;
    public function __construct(HomeInterface $_home)
    {
        $this->home = $_home;
    }
    public function index()
    {
        return $this->home->index();
    }
}
