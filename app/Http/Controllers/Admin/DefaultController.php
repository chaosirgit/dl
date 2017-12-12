<?php
/**
 * @author chaosir
 */

namespace App\Http\Controllers\Admin;

use App\Admin;
use App\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
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
        $news = Article::where('type',2)->get();
        return view('admin/news',['news'=>$news]);
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

    public function delall(Request $request){
        $arr = $request->input('arr');
        foreach($arr as $row){
            $query = Article::where('id',$row)->delete();
            if(!$query){
                break;
                return response()->json(['code'=>0]);
            }
        }
        return response()->json(['code'=>1,'row_count'=>Article::where('type',2)->count()]);
    }
}
