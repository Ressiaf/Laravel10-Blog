<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index(){
        return "Courses index";
    }

    public function create(){
        return "On this page you can create a course - Form ";
    }

    public function show($course){
        return "Welcome to course $course";
    }
}


