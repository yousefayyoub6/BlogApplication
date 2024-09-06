<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
     public function index(){
        $countPosts = Post::count();
        $countUsers = User::count();
        return view('Dashboard.Layouts.dashboard', compact('countPosts','countUsers'));
    }
}
