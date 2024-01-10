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
    public function subjects()
    {
        return view('teacher.courses');
    }
    public function addcourse()
    {
        return view('teacher.addcourse');
    }
    public function upload_assignments()
    {
        return view('teacher.assignment');
    }
    public function report()
    {
        return view('teacher.report');
    }
    public function batches()
    {
        return view('teacher.batches');
    }
    public function allBatches()
    {
        return view('teacher.allBatches');
    }
    public function msg()
    {
        return view('teacher.messages');
    }
    public function reminders()
    {
        return view('teacher.reminders');
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
    //student side
    public function index()
    {
        return view('student.index');
    }
    public function batchStudent()
    {
        return view('student.batchStudent');
    }
    public function single()
    {
        return view('student.single');
    }
    public function subjectList()
    {
        return view('student.subjectList');
    }
    public function assign()
    {
        return view('student.assign');
    }
    public function syllabus()
    {
        return view('student.syllabus');
    }
    public function reminderStudent()
    {
        return view('student.reminders');
    }
    public function attendence()
    {
        return view('student.attendence');
    }
}
