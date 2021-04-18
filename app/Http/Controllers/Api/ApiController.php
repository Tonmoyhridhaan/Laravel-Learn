<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Product;
use App\Models\Student;
use App\Models\Teacher;
class ApiController extends Controller
{
    public function products(){
        $products = DB::table('products as p')
        ->join('categories as c','p.category_id','c.id')
        ->select('c.name as category','p.id','p.price','p.name as product')
        ->get();
        return response()->json([
            'products' => $products,
            'msg' => 'Successfully Retrived'
        ]);
    }
    public function categories(){
        $categories = DB::table('categories as c')
            ->select('c.id','c.name')
            ->get();
        return response()->json([
            'categories' => $categories
        ]);
    }
    public function createProduct(Request $request){
        $obj = new Product();
        $obj->name = $request->pname;
        $obj->category_id = $request->pcategory;
        $obj->price = $request->pprice;
        $obj->status = $request->status;
        if($obj->save()){
            return response() -> json([
                'data' => $obj,
                'msg' => 'Successfully inserted'
            ]);
        }
    }

    public function createStudent(Request $request){
        $obj = new Student();
        $obj->name = $request->sname;
        $obj->email = $request->semail;
        $obj->password = $request->spassword;
        if($obj->save()){
            return response() -> json([
                'data' => $obj,
                'msg' => 'Successfully inserted'
            ]);
        }
    }

    public function createTeacher(Request $request){
        $obj = new Teacher();
        $obj->name = $request->tname;
        $obj->email = $request->temail;
        $obj->password = $request->tpassword;
        if($obj->save()){
            return response() -> json([
                'data' => $obj,
                'msg' => 'Successfully inserted'
            ]);
        }
    }

    public function listStudents(){
            $students = Student::all();
            return response() -> json([
                'students' => $students,
                'message' => 'Students retrieved'
            ]);
        }

    public function listTeachers(){
        $teachers = Teacher::all();
        return response() -> json([
            'teachers' => $teachers,
            'message' => 'Teachers retrieved'
        ]);
        
    }

    public function getTeacher($id){
        $teacher = Teacher::where('id', '=', $id)
                    ->first();
            return response() -> json([
                'teacher' => $teacher
            ]);
        
    }

    public function updateTeacher(Request $request){
        $id = $request->tid;
        $obj = Teacher::find($id);
        
        $obj->name = $request->tname;
        $obj->email = $request->temail;

        if($obj->save()){
            return response() -> json([
                'data' => $obj,
                'msg' => 'Successfully Updated'
            ]);
        }

    }
    public function getStudent($id){
        $student = Student::where('id', '=', $id)
                    ->first();
            return response() -> json([
                'student' => $student
            ]);
        
    }

    public function updateStudent(Request $request){
        $id = $request->sid;
        $obj = Student::find($id);
        
        $obj->name = $request->sname;
        $obj->email = $request->semail;

        if($obj->save()){
            return response() -> json([
                'data' => $obj,
                'msg' => 'Successfully Updated'
            ]);
        }

    }
}
