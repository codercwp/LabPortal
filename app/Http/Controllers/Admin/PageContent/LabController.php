<?php

namespace App\Http\Controllers\Admin\PageContent;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PageContent\labEdit;
use App\Models\Labor;
use App\Models\Link;
use App\Models\WebInformation;
use Illuminate\Http\Request;



/**
 * caiwenpin
 */
class LabController extends Controller
{
    public function labShow(){

        $data = Labor::LabShow();
        return $data?
            json_success('成功!',$data,200) :
            json_fail('失败!',null,100);
    }

    public function labEdit(labEdit $request){

        $data = Labor::LabEdit($request);
        return $data?
            json_success('成功!',$data,200) :
            json_fail('失败!',null,100);

    }




}
