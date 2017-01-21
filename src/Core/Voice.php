<?php
/**
 * Voice.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:33
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Api;
use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class Voice extends Base
{

    use HttpTrait;

    /**
     * @param       $mobile
     * @param       $code
     * @param array $options
     *
     * @return mixed
     */

    public function send($mobile, $code, $options = [])
    {
        $http   = $this->getHttp();
        $params = [
            'apikey' => $this->getApiKey(),
            'mobile' => $mobile,
            'code'   => $code,
        ];
        return $http->json(
            Api::VOICE_SEND_API,
            array_merge($params, $options)
        );
    }

    /**
     * @param int $pageSize
     *
     * @return mixed
     */
    public function pullStatus($pageSize = 20)
    {
        $http = $this->getHttp();
        return $http->json(
            Api::VOICE_PULL_STATUS_API,
            [
                'apikey'    => $this->getApiKey(),
                'page_size' => $pageSize,
            ]
        );
    }

}