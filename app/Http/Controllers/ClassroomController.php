<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class ClassroomController extends Controller
{ 
    public function __construct()
    {
        //$this->middleware('auth');sinhvien
        //$this->middleware('classroom_null');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        $classroom = classroom::paginate(5);
        return view('classroom.index', compact('classroom'))->with('i',(request()->input('page',1)-1)*5);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('classroom.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();
        $classroom = new Classroom($data);
        $classroom->save();
        return redirect() -> route('classroom.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $classroom = classroom::find($id);
        //dd($classroom);
        return view('classroom.edit',compact('classroom'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $classroom = Classroom::find($id);    
        $classroom->update($request->all());
        return redirect() -> route('classroom.index')->with('thongbao','Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $classroom = Classroom::find($id);
        $classroom->delete();
        return redirect() -> route('classroom.index')->with('thongbao','Xoá thông tin thành công');
    }
}
