<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     //
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     //
    // }
    public function demo(Request $request)
    {

        dd($request->x); //用動態屬性取輸入的值
        //with方法:
        // return view('test.demo')->with(['name' => 'Penny', 'age' => '<b>18</b>']);
        //view函式:
        $data['name'] = 'Penny';
        $data['age'] = '<b>19</b >';
        return view('test.demo', $data);
        //compact方法:
        // $name = 'Penny';
        // $age = '<b>20</b>';
        return view('test.demo', compact('name', 'age'));
    }
    public function dogetFile(Request $request)
    {
        //取得完整路徑檔名
        $filenameWithExt = $request->file('pic')->getClientOriginalName();
        //只取檔名
        $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
        //只取副檔名
        $extension = $request->file('pic')->getClientOriginalExtension();
        //生成新檔名
        $fileNameToStore = $filename.'_'.time().'.'.$extension;
        //儲存圖片
        $path = $request->file('pic')->storeAs('public/storage/pic',$fileNameToStore);
        return $path;
    }

}
