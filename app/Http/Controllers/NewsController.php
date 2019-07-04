<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewsRequest;
use App\model\News;
use Session;
use Response;

class NewsController extends Controller
{
    public function index()
    {
        $items=News::get();
        return view('news.index',compact('items'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(NewsRequest $request)
    {
        if($request->adv_image){
            $fileName = $request->adv_image->store("public/images");
            $request['image'] = basename($fileName);
        }

        News::create($request->all());
        Session::flash("msg", "s:تمت  عملية الاضافة بنجاح");
        return redirect()->route('news.create');
    }

    public function show($id)
    {
    }


    public function edit($id)
    {
        $items=News::find($id);
        if (!$items) {
            Session::flash("msg", "e:Invalid ID, please check your URL");
            return redirect()->route("news.index");
        }

        return view('news.edit', compact('items','id'));
    }


    public function update(NewsRequest $request, $id)
    {
        if($request->adv_image){
            $fileName = $request->adv_image->store("public/images");
            $request['image'] = basename($fileName);
        }

        News::find($id)->update($request->all());
        Session::flash("msg", "i:تمت عملية التعديل بنجاح ");
        return redirect()->route('news.index');

    }


    public function destroy(Request $request)
    {
        $id_coach=$request->id;
        $items = News::find($id_coach);
        $items->delete( );
        return Response::json(['status' => true]);
    }
}
