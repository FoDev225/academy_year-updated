<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    protected $students;
    
    public function __construct(){
        
        $this->students = new Student();
        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sutdents = Student::all();
        
        //return view('student.list')->with($response);

        return response()->json([
            'status' => true,
            'message' => "Student list !",
            'sutdents' => $sutdents
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function Search()
    {
        $q = request()->input('$id');

        $find_student = Student::where('matricul', 'like', "$q")
                ->orWhere('matricul', 'like', "$q")
                ->get();

        //return view('student.search')->with('find_student', $find_student);
        
        return response()->json([
            'status' => true,
            'message' => "Student find successfuly !",
            'find_student' => $find_student
        ], 200);
    }

    /** 
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        $student = $this->students->find($id);

        if ($student) {
            
            $student->update([
               'academy_year' => '2024-2025'
            ]);
        }

        //return redirect()->route('student')->with('success', 'L\'année académique a été mis à jour !');

        return response()->json([
            'status' => true,
            'message' => "Student update successfuly !",
            'student' => $student
        ], 200);
    }
}
