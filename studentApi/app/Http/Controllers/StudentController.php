<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Student::select('id', 'nome', 'idade', 'sexo')->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;
        $student->nome = $request->nome;
        $student->idade = $request->idade;
        $student->sexo = $request->sexo;

        if ($student->save()) {
            return response()->json(["success" => "Studend was created"]);
        }
        return response()->json(["error" => "Student wasn't created"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $findStudent = Student::find($id);
        if ($findStudent) {
            return response()->json($findStudent, 200);
        }
        return response("Student doesn't exist", 404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateStudent = Student::find($id);
        if ($updateStudent) {
            $updateStudent->update($request->all());
            return response()->json($updateStudent, 201);
        }
        return response()->json('Nao foi possivel atualizar', 304);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleteStudent = Student::find($id);
        if ($deleteStudent) {
            $deleteStudent->delete($id);
            return response()->json("Student was deleted", 204);
        }
        return response()->json($deleteStudent, 304);
    }
}
