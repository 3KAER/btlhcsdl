<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use App\Models\TutorReviewRate;

use Illuminate\Http\Request;

class tutorController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tutors =Tutor::all();
        
        return view('tutor.index',compact('tutors'));
        
    }

    public function search(Request $request){

        $search = $request->input('search');
        $sex = $request->sex;
        $start_age = $request->start_age;
        $end_age = $request->end_age;
        
        if($request->input('search')){
        $tutors = Tutor::query()
            ->leftJoin('tutor_review_rate', 'tutor.id', '=', 'tutor_review_rate.tutor_id')
            ->select('tutor.*', 'tutor_review_rate.rate')
            ->where(function ($query) use ($search) {
                $query->orWhere(function ($innerQuery) use ($search) {
                    $innerQuery->where('tutor_review_rate.rate', 'LIKE', "%{$search}%")
                        ->orWhere('tutor.name', 'LIKE', "%{$search}%")
                        ->orWhere('tutor.current_address', 'LIKE', "%{$search}%");
                })
                ->orWhereNull('tutor_review_rate.rate');
        })
        ->get();
        if ($tutors->count() > 0) {
            // Thông báo tìm kiếm thành công
            session()->forget('warning');
            session()->flash('success', 'Tìm kiếm thành công!');
            

        } else {
            // Thông báo không có kết quả
            session()->forget('success');
            session()->flash('warning', 'Không tìm thấy kết quả nào.');
            
        }
        
        return view('tutor.index',compact('tutors'));}
        elseif($request->sex && $request -> start_age && $request -> end_age ){
        $tutors =Tutor::query()
        ->where('sex', 'LIKE', "%{$sex}%")
        ->Where('age', '>=', $start_age)
        ->Where('age', '<=', $end_age)
        ->get();
        if ($tutors->count() > 0) {
            // Thông báo tìm kiếm thành công
            session()->forget('warning');
            session()->flash('success', 'Tìm kiếm thành công!');
            

        } else {
            // Thông báo không có kết quả
            session()->forget('success');
            session()->flash('warning', 'Không tìm thấy kết quả nào.');
            
        }
        return view('tutor.index',compact('tutors'));
        }
        else{
            
            $tutors = Tutor::all();
            return view('tutor.index',compact('tutors'));

        }
       
    
        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('tutor.create');
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
        $tutor = new Tutor($data);
        $tutor->save();
        return redirect() -> route('tutor.index');
        
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
    {   $tutor = Tutor::find($id);
        //dd($Tutor);
        return view('tutor.edit',compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $tutor = Tutor::find($id);    
        $tutor->update($request->all());
        return redirect() -> route('tutor.index')->with('thongbao','Cập nhật thông tin thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $tutor = Tutor::find($id);
        $tutor->delete();
        return redirect() -> route('tutor.index')->with('thongbao','Xoá thông tin thành công');
    }
    
    
   
}