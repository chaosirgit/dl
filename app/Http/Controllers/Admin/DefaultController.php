<?php
/**
 * @author chaosir
 */

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Article;
use App\Images;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Validator;

class DefaultController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('admin/login');
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function loginPost(Request $request)
    {
        $validate = Validator::make($request->all(), ['username' => 'required',
                                                      'password' => 'required'], ['username.required' => '用户名称必须填写',
                                                                                  'password.required' => '密码必须填写']);

        $validate->after(function ($validate) {
            if ($validate->errors()->count() == 0) {
                $admin = Admin::where('username', Input::get('username'))->where('password', md5(Input::get('password')))->first();

                if ($admin == null) {
                    $validate->errors()->add('username', '用户名或密码错误');
                } else {
                    session(['admin_id' => $admin->id]);
                }
            }
        });
        //如果有失败的
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate)->withInput();
        }

        return redirect('admin/index');

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin/index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function welcome()
    {
        return view('admin/welcome');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function form()
    {
        return view('admin/form');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function news()
    {
//        $news = Article::where('type', 2)->orderBy('id','desc')->get();
        return view('admin/news');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function letter()
    {
        return view('admin/letter');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function about()
    {
        return view('admin/about');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function category()
    {
        return view('admin/category');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function goods()
    {
        return view('admin/goods');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function banner()
    {
        return view('admin/banner');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function delall(Request $request)
    {
        $arr = $request->input('arr');
        foreach ($arr as $row) {
            $query = Article::where('id', $row)->delete();
            if (!$query) {
                break;
                return response()->json(['code' => 0]);
            }
        }
        return response()->json(['code' => 1, 'row_count' => Article::where('type', 2)->count()]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newsAdd()
    {
        return view('admin/newsAdd',['act'=>'add']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function letterAdd()
    {
        return view('admin/letterAdd',['act'=>'add']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function uploadImage(Request $request)
    {
        $validator = Validator::make($request->all(), ['file' => 'required|image']);
        if ($validator->fails()) {
            return response()->json(['code' => 1, 'msg' => '文件必须为图片']);
        } else {
            $file          = $request->file('file');     //获取文件
            $file_initname = $file->getClientOriginalName(); //文件原名
            $file_name     = md5($file_initname . time());
            $save_path     = date('Y-m-d', time()) . '/' . $file_name;
            $bool          = Storage::disk('uploads')->put($save_path, File::get($file));
            if ($bool) {
                $image      = new Images;
                $image->url = 'uploads/' . $save_path;
                if ($image->save()) {
                    return response()->json(['code' => 0, 'data' => array('src' => '../'.$image->url)]);
                } else {
                    return response()->json(['code' => 1, 'msg' => '上传失败']);
                }
            } else {
                return response()->json(['code' => 1, 'msg' => '上传失败']);

            }
        }

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doNewsAdd(Request $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $content = $request->input('content');
        $type = $request->input('type');
        $article = new Article;
        $article->title = $title;
        $article->author = $author;
        $article->content = $content;
        $article->type = $type;
        if($article->save()){
            return response()->json(['code'=>1,'msg'=>'添加成功']);
        }else{
            return response()->json(['code'=>0,'msg'=>'添加失败']);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function newsEdit(Request $request){
        $id = $request->id;
        $results = Article::where('id',$id)->get()->first();
        return view('admin/newsAdd',['result'=>$results],['act'=>'edit']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function letterEdit(Request $request){
        $id = $request->id;
        $results = Article::where('id',$id)->get()->first();
        return view('admin/letterAdd',['result'=>$results],['act'=>'edit']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function doNewsEdit(Request $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $content = $request->input('content');
        $id = $request->input('id');
        $type = $request->input('type');

        $article = Article::find($id);
        $article->title = $title;
        $article->author = $author;
        $article->content = $content;
        $article->type = $type;
        if($article->save()){
            return response()->json(['code'=>1,'msg'=>'编辑成功']);
        }else{
            return response()->json(['code'=>0,'msg'=>'编辑失败']);
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function search(Request $request){
        $date_start = $request->input('dateStart');
        $date_end = $request->input('dateEnd');
        $search_title = $request->input('searchTitle');
        $type = $request->input('type');
//        $nums = $request->input('nums');
        $search = new Article;
        if(!empty($date_start)) {
            $search = $search->where('updated_at', '>', $date_start);
        }
        if(!empty($date_end)){
            $search = $search->where('updated_at','<',$date_end);
        }
        if(!empty($search_title)){
            $search = $search->where('title','like','%'.$search_title.'%');
        }
        $results = $search->where('type',$type)->orderBy('id','desc')->get();
        $inner_html = '';
        foreach($results as $row){
            $inner_html .= '<tr>';
            $inner_html .= '<td><input type="checkbox" value="'.$row->id.'" name=""></td>';
            $inner_html .= '<td>'.$row->id.'</td>';
            $inner_html .= '<td>'.$row->title.'</td>';
            $inner_html .= '<td>'.$row->author.'</td>';
            $inner_html .= '<td>'.$row->updated_at.'</td>';
            $inner_html .= '<td class="td-manage"><a title="编辑" href="javascript:;" onclick="question_edit(\'编辑\',\'newsEdit?id='.$row->id.'\',\''.$row->id.'\',\'\',\'510\')" class="ml-5" style="text-decoration:none"><i class="layui-icon">&#xe642;</i></a><a title="删除" href="javascript:;" onclick="question_del(\this,'.$row->id.') "style="text-decoration:none"><i class="layui-icon">&#xe640;</i></a></td>';
            $inner_html .= '</tr>';
        }
        $row_count = $results->count();
        return response()->json(['results'=>$results,'innerContent'=>$inner_html,'row_count'=>$row_count]);
    }
}
