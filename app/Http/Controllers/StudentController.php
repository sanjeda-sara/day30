<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\student\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    protected $students;

    public function student()
    {
//        $this->students = Student::index();
//
//        return view('student.view-students', ['students' => $this->students]);

        $products =  new Product();
        $products -> category_id = 10;
        $products -> product_name = 'Sharee' ;
        $products -> price = 250;
        $products -> description = 'lorem';
        $products -> save();

    }
}
