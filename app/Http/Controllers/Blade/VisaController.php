<?php

namespace App\Http\Controllers\Blade;

use App\Http\Controllers\Controller;
use App\Models\VisaDeadline;
use Illuminate\Http\Request;

class VisaController extends Controller
{
    //
    public function index()
    {
        $deadline = VisaDeadline::get()->all();
        //dd($day);
        return view('pages.visa.index', compact('deadline'));
    }
    
    public function add()
    {
        return view('pages.visa.add');
    }
    
    public function create(Request $request)
    {
        //dd($request);
        $day = VisaDeadline::create([
            'deadline' => date('Y-m-d', strtotime($request->get('deadline'))),
            
            'name_uz'   => $request->get('name_uz')  ?? $request->get('name_ru'),
            
            'name_ru'   => $request->get('name_ru')  ?? $request->get('name_uz'),
        ]);

        //dd($day);
        return redirect()->route('visaIndex');
    }
    
    public function edit($id)
    {
        $day = VisaDeadline::find($id);
        //dd($day);
        //dd($countries);
        return view('pages.visa.edit', compact('day'));
    }
    
    public function update(Request $request,$id)
    {
        $day = VisaDeadline::find($id);
        $day->deadline    = date('Y-m-d', strtotime($request->get('deadline')));
        $day->name_uz = $request->get('name_uz');
        $day->name_ru = $request->get('name_ru');

        $day->save();
        return redirect()->route('visaIndex');
    }
}
