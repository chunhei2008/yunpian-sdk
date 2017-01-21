<?php
/**
 * Flow.php
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

class Flow extends Base
{
    use HttpTrait;

    /**
     * @param null $carrier
     *
     * @return mixed
     */
    public function getPackage($carrier = null)
    {
        $http = $this->getHttp();
        return $http->json(Api::FLOW_GET_PACKAGE_API, [
            'apikey'  => $this->getApiKey(),
            'carrier' => $carrier,
        ]);
    }

    /**
     * @param      $mobile
     * @param      $sn
     * @param null $callback
     *
     * @return mixed
     */

    public function recharge($mobile, $sn, $callback = null)
    {
        $http = $this->getHttp();
        return $http->json(Api::FLOW_RECHARGE_API, [
            'apikey'       => $this->getApiKey(),
            'mobile'       => $mobile,
            'sn'           => $sn,
            'callback_url' => $callback,
        ]);
    }

    /**
     *
     * @param int $pageSize
     *
     * @return mixed
     */
    public function pullStatus($pageSize = 20)
    {
        $http = $this->getHttp();
        return $http->json(Api::FLOW_PULL_STATUS, [
            'apikey'    => $this->getApiKey(),
            'page_size' => $pageSize,
        ]);
    }
}