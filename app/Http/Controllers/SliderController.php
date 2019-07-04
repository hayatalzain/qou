<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use App\model\Slider;
use Session;
use Response;

class SliderController extends Controller
{
    public function index()
    {
        $items=Slider::get();
        return view('slider.index',compact('items'));
    }

    public function create()
    {
        return view('slider.create');
    }

    public function store(SliderRequest $request)
    {
        if($request->adv_image){
            $fileName = $request->adv_image->store("public/images");
            $request['image'] = basename($fileName);
        }

        Slider::create($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح");
        return redirect()->route('slider.create');
    }

    public function show($id)
    {
    }


    public function edit($id)
    {
        $items=Slider::find($id);
        if (!$items) {
            Session::flash("msg", "e:Invalid ID, please check your URL");
            return redirect()->route("slider.index");
        }

        return view('slider.edit', compact('items','id'));
    }


    public function update(SliderRequest $request, $id)
    {
        if($request->adv_image){
            $fileName = $request->adv_image->store("public/images");
            $request['image'] = basename($fileName);
        }

        Slider::find($id)->update($request->all());
        Session::flash("msg", "i:تمت عملية التعديل بنجاح ");
        return redirect()->route('slider.index');

    }


    public function destroy(Request $request)
    {
        $id_coach=$request->id;
        $items = Slider::find($id_coach);
        $items->delete( );
        return Response::json(['status' => true]);
    }
}
