<?php

namespace App\Controllers;

class Api extends BaseController
{

    
    // 新增會員
    /**
     * @api {put} /api/user/ 新增會員
     * @apiName 新增會員
     * @apiGroup User
     * @apiVersion  1.0.0
     * @apiSampleRequest /api/user/
     * 
     * 
     * @apiBody {String} name 會員名稱
     * @apiBody {String} email 會員信箱
     * @apiBody {String} password 
     * @apiBody {String} user_id 帳號
     * @apiBody {String} birthday 生日
     * @apiBody {String} phone_number 電話
     * @apiBody {String} address 地址
     * @apiBody {String} company_id 公司編號
     * @apiBody {String} job_title 職稱
     * @apiBody {String} department 
     */
    function user()
    {
        $data = $this->request->getJSON(true);
        $data['id'] = 1;
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => '新增成功'
            ],
            'data'=> $data
        ];
        return json_encode($response);
    }

    // 取得會員資料
    /**
     * @api {post} /api/userInfo/:id 取得會員資料
     * @apiName 取得會員資料
     * @apiGroup User
     * @apiVersion  1.0.0
     * @apiSampleRequest /api/userInfo/:id
     * 
     * @apiParam  {Number} id 會員編號
     * @apiBody {String} user_id
     * @apiBody {String} password
     * 
     
     * @apiSuccess {String} name 會員名稱
     * @apiSuccess {String} email 會員信箱
     * @apiSuccess {String} user_id 帳號
     * @apiSuccess {String} birthday 生日
     * @apiSuccess {String} phone_number 電話
     * @apiSuccess {String} address 地址
     * @apiSuccess {String} company_id 公司編號
     * @apiSuccess {String} job_title 職稱
     * @apiSuccess {String} department 
     */
    function userInfo($id){
        $data = [
            'name' => 'test',
            'email' => 'test@gmail.com',
            'user_id' => 'testuserId',
            'birthday' => '2020-01-01',
            'phone_number' => '0912345678',
            'address' => '台北市',
            'company_id' => 'testcompanyId',
            'job_title' => 'testjobTitle',
            'department' => 'testdepartment'
        ];
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => '取得成功'
            ],
            'data'=> $data
        ];
        return json_encode($response);
    }
    
    //上傳成績
    /**
     * @api {put} /api/sendUserTestData/:id 上傳成績
     * @apiName 上傳成績
     * @apiGroup Test
     * @apiSampleRequest /api/sendUserTestData/:id
     * 
     * @apiParam  {Number} id 會員編號
     * @apiBody {String} total_score
     * @apiBody {String} scores
     * @apiBody {String} stage_action_types
     * @apiBody {Srting} stage_weights
     */
    function sendUserTestData($id){
        $data = $this->request->getJSON(true);
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => '新增成功'
            ],
            'data'=> $data
        ];
        return json_encode($response);
    }

    //取得成績
    /**
     * @api {put} /api/getUserTestData/:id 取得成績
     * @apiName 取得成績
     * @apiGroup Test
     * @apiSampleRequest /api/getUserTestData/:id
     * 
     * @apiParam  {Number} id 會員編號
     * @apiSuccess {String} total_score
     * @apiSuccess {String} scores
     * @apiSuccess {String} stage_action_types
     * @apiSuccess {Srting} stage_weights
     */


    function getUserTestData($id){
        $data = [
            'total_score'=> 0.0,
            'scores'=> [0.0,0.0,0.0,0.0,0.0,0.0,0.0,0.00.0,0.00.0],
            'stage_action_types'=> [0,0,0,0,0,0,0,0,0,0,0],
            'stage_weights'=> [0.8,1.1,2.1,1.9,0,2.1,0.4,1.3,1.9,1.3,2]
        ];
        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => '取得成功'
            ],
            'data'=> $data
        ];
        return json_encode($response);
    }
}
