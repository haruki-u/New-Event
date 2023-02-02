<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circle;

class CircleController extends Controller
{
    public function index(Circle $circle)
    {
       return view('circles/index')->with(['circles' => $circle->getPaginateByLimit(5)]);
    }
    
    public function show(Circle $circle)
    {
         return view('circles/show')->with(['circle' => $circle]);
    }
    
    public function create()
    {
        return view('circles/create');
    }
    
    public function store(Circle $circle,Request $request)
    {
        $input=$request['circle'];
        // $input['user_id'] = auth()->id();
        $circle->fill($input)->save();
        return redirect('/circles/'. $circle->id);
    }
    
    public function edit(Circle $circle)
    {
        return view('circles/edit')->with(['circle'=>$circle]);
    }
    
    public function update(CircleRequest $request, Circle $circle)
    {
        $input_post=$request['circle'];
        $circle->fill($input_circle)->save();
        return redirect('/circles/'. $circle->id);
    }
    
    public function delete(Circle $circle)
    {
        $circle->delete();
        return redirect('/');
    }
    
    public function upload(Request $request)
    {
        $img=$request->file('qrcord_image');
        if(isset($img)){
           $path=$img->upload('img','public');
           if($path){
               Circle::create([
                      'qrcord_image'=>$path,
               ]);
            }
        }
        
        return redirect()->route('/');
    }
}