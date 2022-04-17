<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use URL;
class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $question = Question::query();

        if ($keyword = request('search')) {
            $question->where('name', 'LIKE', "%{$keyword}%")->orWhere('content', 'LIKE', "%{$keyword}%")->orWhere('fullcontent', 'LIKE', "%{$keyword}%");
        }
        $question = $question->latest()->paginate(25);

        return view('Admin.questions.index',compact('question'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question= new Question();
        $action = Url::route('admin.question.store');
        $title='افزودن سوال جدید';
        return view('Admin.questions.create',compact(['question','action','title']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $question = auth()->user()->questions()->create(
            [
                'name' => $request->name,
                'content' => $request->content,
                'active' => $request->active,
            ]
        );
        alert()->success('اطلاعات با موفقیت ثبت شد','پیغام سیستم')->persistent("تایید");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $action = URL::route('admin.question.update', ['question' => $question->id]);
        $title='ویرایش سوال';
        return view('Admin.questions.create',compact(['question','action','title']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        $question->update(
            [
                'name' => $request->name,
                'content' => $request->content,
                'active' => $request->active,
            ]
        );
        alert()->success('ویرایش  با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return redirect(route('admin.questions.index'));
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        alert()->success('حذف با موفقیت انجام شد','پیغام سیستم')->persistent('تایید');
        return back();

    }
}
