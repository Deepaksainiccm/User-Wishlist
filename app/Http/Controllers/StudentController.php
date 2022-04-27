<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function show()
    {
        $students=[];

        // retrieving all data
        $students =Student::all();

        //  using query
        // $students =Student::where('city','gokal')->orderBy('name')->get();

        // chunk dATA
        // $students =Student::chunk(2,function($students){
        //     echo "chunk";
        //     foreach($students as $s){
        //         echo $s->name;
        //     }
        // });

        //  retrieving single data
        // $students =Student::find(1);

        // firstorCreate  and firstOrnew
        // $students =Student::firstOrCreate(
        //     ['name'=>'mohit'],
        //     ['email'=>'ms@gmail.com', 'city'=>'pataudi', 'marks'=>'40']
        // );

        // aggregates min ,max, count etc
        // $students =Student::where('city','rewari')->count();
        // $students =Student::min('marks');
        // dd($students);

        return view('Student',['students'=>$students]);
    }
}
