<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Http\Requests\EditStudentRequest;
use App\model\Coach;
use App\model\Courses;
use App\model\Student;
use App\model\Degree;
use Session;
use Response;

class StudentController extends Controller
{
    public function print($id){
        $items=Student::find($id);
        return view('student.print',compact('items'));
    }
    public function index(Request $request)
    {
        $coaches = Coach::all();
        $degrees = Degree::all();
        $courses = Courses::all();
//        $items=Student::get();
        $q = $request->q;
        $course_id=$request->course_id;
        $gender=$request->gender;
//        $coach_id=$request->coach_id;

        $items=Student::whereRaw("true");
        if($q){
            $items->whereRaw("(name like ? )", ["%$q%"]);
        }
        if($course_id){
            $items->where("course_id", $course_id);
        }
        if($gender){
            $items->where("gender", $gender);
        }
//        if($coach_id){
//            $items->where("coach_id", $coach_id);
//        }
        $items =  $items->get();

        return view('student.index',compact('items','items','coaches','degrees','courses'));
    }

    public function create()
    {
        $items=Student::get();
        $coaches = Coach::get();
        $degrees = Degree::get();
        $courses = Courses::get();

        return view('student.create',compact('items','coaches','degrees','courses'));
    }

    public function store(StudentRequest $request)
    {
        Student::create($request->all());
//        dd($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح");
        return redirect()->route('student.create');
    }

    public function show($id)
    {
//        $items=Coach::find($id);
//        if(!$items){
//            Coach::flash("msg", "e:Invalid Country ID, please check your URL");
//            return redirect()->route("coach.index");
//        }
//        return view('coach.show',compact('items'));
    }

    public function edit($id)
    {
        $items=Student::find($id);
        if (!$items) {
            Session::flash("msg", "e:Invalid ID, please check your URL");
            return redirect()->route("student.index");
        }
        $coaches = Coach::get();
        $degrees = Degree::get();
        $courses = Courses::get();
        return view('student.edit', compact('items','id','coaches','degrees','courses'));
    }
    public function update(EditStudentRequest $request, $id)
    {
        Student::find($id)->update($request->all());

        Session::flash("msg", "i:تمت عملية التعديل بنجاح ");
        return redirect()->route('student.index');
    }
    public function destroy(Request $request)
    {
//        Student::find($id)->update(['deleted' => 1]);
//        Session::flash("msg","w: تمت عملية الحذف بنجاح");
//        return redirect(route("writers.index"));
        $id_coach=$request->id;
        $items = Student::find($id_coach);
        $items->delete();
        return Response::json(['status' => true]);
    }

//    function getCoachFromCourse(Request $request){
//        $main_id=$request->main_id;
//
//        $sub_list = Courses::where('coach_id',$main_id)->get();
//
//        if(!empty($sub_list)){
//            return Response::json(['status'=>true,'coach_key'=>$sub_list]);
//        }else{
//            return Response::json(['status'=>false,'coach_key'=>[]]);
//        }
//    }

}
