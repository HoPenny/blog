<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Throwable;

class PostController extends Controller
{
    //用於生成 JSON 字串
    private function makeJson($status, $data, $msg)
    {
        //轉 JSON 時確保中文不會變成 Unicode
        return response()->json(['status' => $status, 'data' => $data, 'message' => $msg])->setEncodingOptions(JSON_UNESCAPED_UNICODE);
    }
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
        // return '所有文章';
        // $data['name'] = 'Penny';
        // $data['age'] = '<b>19</b >';
        // return view('posts', $data);
        $posts = Post::get();
        // dd($posts);
        if (isset($posts) && count($posts) > 0) {
            $data = ['posts' => $posts];
            return $this->makeJson(1, $data, null);
        } else {
            return $this->makeJson(0, null, '找不到任何文章');
        }

    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        //$input = ['title' => $request->title , 'content' => $request->content];
        $input = $request->only(['title', 'pic', 'status', 'content', 'sort']);
        $post = Post::create($input);
        // dd($input);
        if (isset($post)) {
            $data = ['post_id' => $post->id];
            return $this->makeJson(1, $data, '新增文章成功');
        } else {
            return $this->makeJson(0, null, '新增文章失敗');
        }

        // $validator = Validator::make($request->all(), [
        //     'title' => 'required | max:10',
        //     'age' => 'required',
        // ]);
        // if ($validator->fails()) {
        //     // return $validator;
        //     return redirect('..')->withErrors($validator)->withInput();
        // }
        // return 'ok';
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
        // return '文章' . $id;
        $post = Post::find($id);

        if (isset($post)) {
            $data = ['post' => $post];
            return $this->makeJson(1, $data, null);
        } else {
            return $this->makeJson(0, null, '找不到該文章');
        }

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
        try {
            $post = Post::findOrFail($id);
            // $post->title = $request->title;
            // $post->content = $request->content;
            // $post->save();
            $input = $request->only(['title', 'pic', 'status', 'content', 'sort']);
            $post->update($input);

        } catch (Throwable $e) {
            //更新失敗
            $data = ['post' => $post];
            return $this->makeJson(0, null, '更新文章失敗');
        }

        $data = ['post' => $post];
        return $this->makeJson(1, $data, '更新文章成功');

    }

/**
 * Remove the specified resource from storage.
 *
 * @param  int  $id
 * @return \Illuminate\Http\Response
 */
    public function destroy($id)
    {
        try {
            $post = Post::findOrFail($id);
            $post->delete();
        } catch (Throwable $e) {
            //刪除失敗
            return $this->makeJson(0, null, '刪除文章失敗');
        }
        return $this->makeJson(1, null, '刪除文章成功');

    }
}