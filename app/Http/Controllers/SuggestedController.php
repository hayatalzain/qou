<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CoursesRequest;
use App\Http\Requests\EditCoachRequest;
use App\model\Suggested;

use Session;
use Response;

class SuggestedController extends Controller
{
    public function index()
    {
        $items=Suggested::all();
        return view('suggested.index',compact('items'));
    }


    public function destroy(Request $request)
    {
        $id_courses=$request->id;
        $items = Suggested::find($id_courses);
        $items->delete();
        return Response::json(['status' => true]);
    }
}
