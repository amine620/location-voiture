<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Voiture;
use App\Http\Requests\VoitureRequest;
use App\Reserve;

class VoitureController extends Controller
{
    public function index()
    {
        $data=Voiture::all();
        return view("voiture.index",['data'=>$data]);
    }

   public function home()
   {

       return view("voiture.home");
   }
   public function create()
   {
       return view('voiture.create');
   }
   public function store(VoitureRequest $request)
   {
    $v=new Voiture();
    $v->name=$request->input('name');
    if($request->HasFile('image'))
    {
        $v->image=$request->image->store('images');
    }
    $v->save();
             return redirect('show');
   }
   public function edit($id)
   {
        $ed=Voiture::find($id);       
        return view('voiture.edit',['ed'=>$ed]);
   }
   public function update($id,VoitureRequest $request)
    {
        $up=Voiture::find($id);
        $up->name=$request->input('name');
        $up->image=$request->image->store('images');
        $up->save();
        return redirect('index');
        
    }
   public function delete($id)
   {
    $ed=Voiture::find($id);
    $ed->delete();
    return redirect('index');
   }
   public function show()
   {
    $data=Voiture::all();

       return view('voiture.voiture',['data'=>$data]);
   }

   public function booking()
   {
      return view('voiture.booking');
   }
   

}
