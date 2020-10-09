<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageContent\friendAdd;
use App\Http\Requests\Admin\PageContent\friendAlter;
use App\Http\Requests\Admin\PageContent\studentBack;
use App\Http\Requests\Admin\PageContent\studentAdd;
use App\Http\Requests\Admin\PageContent\teacherAdd;
use App\Http\Requests\Admin\PageContent\teacherAlter;
use App\Http\Requests\Admin\Pagecontent\teacherBack;
use App\Models\GoodMember;
use App\Models\Link;
use App\Models\Teacher;
use Illuminate\Http\Request;

/**
 * caiwenpin
 */

class PersonController extends Controller
{

    public function teacherShow(){
//        $teacher = Teacher::select(['name','t_url','profession'])->paginate(6);
//        return $teacher?
//        json_success('成功!',$teacher,200):
//        json_fail('失败!',null,100);


        $teacher = Teacher::teacherShow();
        return $teacher?
            json_success('成功!',$teacher,200):
            json_fail('失败!',null,100);
    }



    public function teacherAdd(teacherAdd $request){
//
//            if ($request->hasFile('avatar') && $request->file('avatar')->isValid()) {
//                $path = md5(time() . rand(1000, 9999)) .
//                    '.' . $request->file('avatar')->getClientOriginalExtension();
//
//                $request->file('avatar')->move('./public', $path);
//
//                $data = $request->all();
//
//                $data['avatar'] = './public' . $path;
//
//                Teacher::create([
//                   'name'=>$data['name'],
//                    'priority'=>$data['priority'],
//                    't_url'=>$data['avatar'],
//                ]);
//                return json_success('成功!',null,200) ;
//            }
//        return json_fail('失败!',null,100);

       $teacher = Teacher::teacherAdd($request);
        return $teacher?
            json_success('成功!',$teacher,200):
            json_fail('失败!',null,100);


    }


    public function teacherBack(teacherBack $request){


        $teacher = $request->input('id');
        $teacher = Teacher::teacherBack($teacher);

        return $teacher?
            json_success('成功!',$teacher,200):
            json_fail('失败!',null,100);
    }





    public function teacherAlter(teacherAlter $request){

        $teacher = Teacher::teacherAlter($request);
        return $teacher?
            json_success('成功!',$teacher,200):
            json_fail('失败!',null,100);
    }


    public function teacherDelete(Request $request){

        $teacher = $request->input('id');
        $data=Teacher::teacherDelete($teacher);
        return $data?
            json_success('成功!',null,200) :
            json_fail('失败!',null,100);
    }



    public function studentShow(){

        $student = GoodMember::studentShow();
        return $student?
            json_success('成功!',$student,200):
            json_fail('失败!',null,100);
    }


    public function studentAdd(studentAdd $request){

        $student = GoodMember::studentAdd($request);
        return $student?
            json_success('成功!',$student,200):
            json_fail('失败!',null,100);


    }




    public function studentBack(studentBack $request){


        $data = GoodMember::studentBack($request);
        return $data?
            json_success('成功!',$data,200):
            json_fail('失败!',null,100);
    }


    public function studentAlter(Request $request){

        $student = GoodMember::studentAlter($request);
        return $student?
            json_success('成功!',$student,200):
            json_fail('失败!',null,100);
    }




    public function studentDelete(Request $request){
        $student = $request->input('member_id');

        $data=GoodMember::studentDelete($student);
        return $data?
            json_success('成功!',null,200) :
            json_fail('失败!',null,100);
    }





    public function friendShow(){

        $friend = Link::friendShow();
        return $friend?
            json_success('成功!',$friend,200):
            json_fail('失败!',null,100);
    }


    public function friendBack(Request $request){
        $data =Link::friendBack($request);
        return $data?
            json_success('成功!',$data,200):
            json_fail('失败!',null,100);
    }



    public function friendAdd(friendAdd $request)
    {

        $friend = Link::friendAdd($request);
        return $friend?
            json_success('成功!',null,200) :
            json_fail('失败!',null,100);
    }


    public function friendDelete(Request $request){


        $friend = $request->input('link_id');
        $data=Link::friendDelete($friend);
        return $data?
            json_success('成功!',null,200) :
            json_fail('失败!',null,100);
    }


    public function friendAlter(friendAlter $request){

        $data = Link::friendAlter($request);
        return $data?
            json_success('成功!',null,200) :
            json_fail('失败!',null,100);
    }



}
