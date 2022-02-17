<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\students;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = DB::table('students')->get();
        return view('welcome', ['students' => $students]);
        // $students= DB::select('SELECT * FROM students WHERE id=?',[5]);
        //Insert Method//
        //$students=DB::insert('INSERT INTO students(name, city, marks)VALUES(?,?,?)', ['jack', 'kolkata', '300']);

        //Update Method//
        //$students=DB::update('UPDATE students SET city=? WHERE id=?',['Uluberia', 12]);
        //Delete Method//
        // $students=DB::delete('DELETE FROM students WHERE id=?',[11]);
        // if($students){
        //     dd("Delete success");
        // }else{
        //     dd("Delete Falied");
        // }
        // dd($students);
        // $students=DB::select('SELECT * FROM students');
        // return view('welcome', ['students'=>$students]);

        //$students=DB::table('students')->where('city', 'uluberia')->first();
        //$students=DB::table('students')->where('city', 'uluberia')->value('name');
        // $students=DB::table('students')->find(7);
        // dd($students);

        // $blog = students::find(5);
        // dd($blog);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $validate = $request->validate([
        //     'name' => 'required',
        //     'city'=> 'required'
        // ]);
        DB::table('students')->insert([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        return redirect(route('index'))->with('status', 'Student Data Added Succesfuly');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = DB::table('students')->find($id);
        
        return view('editform', ['student' => $student]);
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
        DB::table('students')->where('id', $id)->update([
            'name' => $request->name,
            'city' => $request->city,
            'marks' => $request->marks,
        ]);
        return redirect(route('index'))->with('status', 'Student Data Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('students')->where('id',$id)->delete();
        return redirect(route('index'))->with('status', 'Student Data Delete Success');
    }
}
