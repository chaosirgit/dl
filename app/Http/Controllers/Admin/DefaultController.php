<?php
/**
 * @author chaosir
 */

namespace App\Http\Controllers\Admin;

use App\Admin;
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
        $validate = Validator::make($request->all(),
                                    ['username' => 'required',
                                     'password' => 'required'],
                                    ['username.required' => '用户名称必须填写',
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

    public function main()
    {
        return view('admin/main');
    }

    public function form()
    {
        return view('admin/form');
    }
}
