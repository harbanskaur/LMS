<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
    // all pages from admin side 
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function courses()
    {
        return view('admin.courses');
    }
    public function teachers()
    {
        return view('admin.teachers');
    }
    public function students()
    {
        return view('admin.students');
    }
    public function improvements()
    {
        return view('admin.improvements');
    }
    public function messages()
    {
        return view('admin.messages');
    }
    // all  pages from teacher side 
    public function main()
    {
        return view('teacher.main');
    }
    // all pages from common side 
    public function login()
    {
        return view('common.login');
    }
    public function signup()
    {
        return view('common.signup');
    }
}
