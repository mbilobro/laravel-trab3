<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(Request $request) {
        $student = new Student;
        $student->nameStudent = $request->input('nameStudent');
        $student->courseStudent = $request->input('courseStudent');
        $student->emailStudent = $request->input('emailStudent');
        $student->phoneStudent = $request->input('phoneStudent');
        $student->save();

        return response()->json([
            'status' => 200,
            'message' => 'Estudante adicionado com sucesso!'
        ]);
    }

    public function index(Request $request) {
        $students = Student::all();

        return response()->json([
            'status' => 200,
            'students' => $students
        ]);
    }

    public function edit($id) {
        $student = Student::find($id);

        return response()->json([
            'status' => 200,
            'student' => $student
        ]);
    }

    public function update(Request $request, $id) {
        $student = Student::find($id);
        $student->nameStudent = $request->input('nameStudent');
        $student->courseStudent = $request->input('courseStudent');
        $student->emailStudent = $request->input('emailStudent');
        $student->phoneStudent = $request->input('phoneStudent');
        $student->update();

        return response()->json([
            'status' => 200,
            'message' => 'Estudante editado com sucesso!'
        ]);
    }

    public function delete($id) {
        $student = Student::find($id);
        $student->delete();

        return response()->json([
            'status' => 200,
            'message' => 'Estudante deletado com sucesso!'
        ]);
    }
}
