<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //用__construct建構子宣告那些action要加入中介層
    // public function __construct()
    // {
    //     // $this->middleware('auth');
    //     // $this->middleware('auth')->only('index');//只對該action規範

    //     // $this->middleware('auth')->except('index');//排除auth的規範
    // }
/**
 * Display a listing of the resource.
 *
 * @return \Illuminate\Http\Response
 */
    public function index()
    {
        return '所有文章';
        // $data['name'] = 'Penny';
        // $data['age'] = '<b>19</b >';
        // return view('posts', $data);

    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(PostRequest $request)
    {

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required | max:10',
        //     'age' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     // return $validator;
        //     return redirect('..')->withErrors($validator)->withInput();
        // }
        return 'ok';
        //網址轉向用法:
        //1.返回到index網頁
        // return redirect(url('posts/' . .1));
        //2. return redirect()->route('login');

    }

/**
 * Display the specified resource.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function show($id)
    {
        return '文章' . $id;
    }

/**
 * Update the specified resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function update(Request $request, $id)
    {

    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        //
    }
}