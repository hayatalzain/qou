<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EditCoachRequest;
use App\model\Courses;
use App\model\Coach;
use Session;
use Response;
class CoursesController extends Controller
{

    public function index(Request $request)
    {
        $coaches = Coach::get();
        $q = $request->q;
        $coach_id=$request->coach_id;
        $items=Courses::whereRaw("true");
        if($q){
            $items->whereRaw("(name like ? )", ["%$q%"]);
        }
        if($coach_id){
            $items->where("coach_id", $coach_id);
        }

        $items =  $items->get();
        return view('courses.index',compact('items','coaches'));
    }

    public function create()
    {
        $coaches = Coach::get();
        return view('courses.create',compact('coaches'));
    }

    public function store(CoursesRequest $request)
    {
        Courses::create($request->all());
//        dd($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح ");
        return redirect()->route('courses.create');
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
        $items=Courses::find($id);
        if (!$items) {
            Session::flash("msg", "e:Invalid ID, please check your URL");
            return redirect()->route("courses.index");
        }
        $coaches = Coach::get();
        return view('courses.edit', compact('items','id','coaches'));
    }

    public function update(CoursesRequest $request, $id)
    {
        Courses::find($id)->update($request->all());
        Session::flash("msg", "i:تمت عملية التعديل بنجاح");
        return redirect()->route('courses.index');
    }

    public function destroy(Request $request)
    {
        $id_courses=$request->id;
        $items = Courses::find($id_courses);
        $items->delete();
        return Response::json(['status' => true]);
    }
}
