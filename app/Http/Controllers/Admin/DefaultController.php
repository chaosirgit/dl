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


    public function index()
    {
        return view('admin/index');
    }

    public function welcome()
    {
        return view('admin/welcome');
    }

    public function form()
    {
        return view('admin/form');
    }

    public function news()
    {
        $news = Article::where('type', 2)->orderBy('id','desc')->get();
        return view('admin/news', ['news' => $news]);
    }

    public function letter()
    {
        return view('admin/letter');
    }

    public function about()
    {
        return view('admin/about');
    }

    public function category()
    {
        return view('admin/category');
    }

    public function goods()
    {
        return view('admin/goods');
    }

    public function banner()
    {
        return view('admin/banner');
    }

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

    public function newsAdd()
    {
        return view('admin/newsAdd');
    }

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

    public function doNewsAdd(Request $request){
        $title = $request->input('title');
        $author = $request->input('author');
        $content = $request->input('content');

        $article = new Article;
        $article->title = $title;
        $article->author = $author;
        $article->content = $content;
        $article->type = 2;
        if($article->save()){
            return response()->json(['code'=>1,'msg'=>'添加成功']);
        }else{
            return response()->json(['code'=>0,'msg'=>'添加失败']);
        }
    }

    public function newsEdit(Request $request){
        $id = $request->get('id');
        dd($id);
        return view('admin/newsEdit');
    }
}
