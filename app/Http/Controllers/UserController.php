<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 注册用户
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * 显示个人信息页面
     */
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
