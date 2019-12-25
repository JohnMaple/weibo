<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * 用户注册表单
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

    /**
     * 保存注册用户
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users|max:255',
            'password' => 'required|confirmed|min:6'
        ]);

        return ;
    }
}
