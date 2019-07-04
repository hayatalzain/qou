<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdvertisementRequest;
use App\model\Advertisement;
use Session;
use Response;

class AdvertisementController extends Controller
{
    public function index()
    {
        $items=Advertisement::get();
        return view('advertisement.index',compact('items'));
    }

    public function create()
    {

        return view('advertisement.create');
    }

    public function store(AdvertisementRequest $request)
    {

        if($request->adv_image){
        $fileName = $request->adv_image->store("public/images");
        $request['image'] = basename($fileName);
    }

        Advertisement::create($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح");
        return redirect()->route('advertisement.create');
    }

    public function show($id)
    {
    }

    public function edit($id)
    {

        $items=Advertisement::find($id);
        if (!$items) {
            Session::flash("msg", "e:Invalid ID, please check your URL");
            return redirect()->route("advertisement.index");
        }

        return view('advertisement.edit', compact('items','id'));
    }


    public function update(AdvertisementRequest $request, $id)
    {
        if($request->adv_image){
            $fileName = $request->adv_image->store("public/images");
            $request['image'] = basename($fileName);
        }
        Advertisement::find($id)->update($request->all());
        Session::flash("msg", "i:تمت عملية التعديل بنجاح ");
        return redirect()->route('advertisement.index');
    }


    public function destroy(Request $request)
    {
        $id_coach=$request->id;
        $items = Advertisement::find($id_coach);
        $items->delete( );
        return Response::json(['status' => true]);
    }
}
