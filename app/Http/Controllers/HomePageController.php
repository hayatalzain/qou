<?php

namespace App\Http\Controllers;

use App\model\News;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

use App\model\Suggested;
//use App\model\Newsd;
use App\model\Advertisement;
use App\model\Slider;
use App\model\Courses;
use App\model\Student;
use App\model\Degree;
use App\model\Coach;

use Session;
use Response;
class HomePageController extends Controller
{
    public function index()
    {
        $items=Student::get();
        return view('homePage.registration',compact('items'));
    }
    public function create()
    {
        $coaches = Coach::get();
        $degrees = Degree::get();
        $courses = Courses::get();
        return view('homePage/registration',compact('coaches','degrees','courses'));
    }
    public function store(StudentRequest $request)
    {
        Student::create($request->all());
//        dd($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح");
        return redirect()->route('homePage.registration');
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
            return redirect()->route("homePage.registration.index");
        }
        $coaches = Coach::get();
        $degrees = Degree::get();
        $courses = Courses::get();
        return view('homePage.registration.edit', compact('items','id','coaches','degrees','courses'));
    }
    public function update(StudentRequest $request, $id)
    {
        Student::find($id)->update($request->all());
        Session::flash("msg", "i:تمت عملية التعديل بنجاح ");
        return redirect()->route('homePage.registration.index');
    }
    public function pagHome()
    {
        $advertisements=Advertisement::get();
        $silders=Slider::get();
        return view('homePage.index',compact('advertisements','silders'));
    }
    public function readMore()
    {
        $advertisements=Advertisement::get();
        $silders=Slider::get();
        return view('homePage.readMore',compact('advertisements','silders'));
    }
    public function news()
    {
        $newses=News::get();
        return view('homePage.news',compact('newses'));
    }
    public function about()
    {
        return view('homePage.about');
    }
    public function por1()
    {
        return view('por1');
    }
    public function registration()
    {
        $coaches = Coach::get();
        $degrees = Degree::get();
        $courses = Courses::get();
        $items=Student::get();
        return view('homePage.registration',compact('items','coaches','degrees','courses'));
    }

    public function registrationCreate(StudentRequest $request)
    {
        Student::create($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح");
        return redirect()->route('home.page.registration');

    }
    public function suggested(Request $request)
    {
        $items = new Suggested();
        $request->validate([
            'email' => 'email|max:255,email',
            "name"=>"required|max:100",
            "mobile"=>"required|digits:10",
            "title"=>"required|max:200",
        ]);

        $items->email=$request->email;
        $items->name=$request->name;
        $items->mobile=$request->mobile;
        $items->title=$request->title;
        $items->save();

        return Response::json(['status' => true]);
    }


}
