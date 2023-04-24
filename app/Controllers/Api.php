<?php

namespace App\Controllers;

class Api extends BaseController
{

    protected function respondCreated($data = null)
    {
        return $this->respond($data, 201);
    }
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

        $response = [
            'status'   => 200,
            'error'    => null,
            'messages' => [
                'success' => '新增成功'
            ]
        ];
        return $this->respondCreated($response);
    }

    // 取得會員資料
    // 編輯會員列表
}
