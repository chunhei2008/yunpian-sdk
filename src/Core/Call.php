<?php
/**
 * Call.php
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

class Call extends Base
{
    use HttpTrait;

    /**
     * @param      $from
     * @param      $to
     * @param      $duration
     * @param null $areaCode
     *
     * @return mixed
     */

    public function bind($from, $to, $duration, $areaCode = null)
    {
        $http = $this->getHttp();
        return $http->json(Api::CALL_BIND_API, [
            'apikey'    => $this->getApiKey(),
            'from'      => $from,
            'to'        => $to,
            'duration'  => $duration,
            'area_code' => $areaCode,
        ]);
    }

    /**
     * @param $from
     * @param $to
     * @param $duration
     *
     * @return mixed
     */

    public function unbind($from, $to, $duration)
    {
        $http = $this->getHttp();
        return $http->json(Api::CALL_UNBIND_API, [
            'apikey'   => $this->getApiKey(),
            'from'     => $from,
            'to'       => $to,
            'duration' => $duration,
        ]);
    }

    /**
     * @param int $pageSize
     *
     * @return mixed
     */

    public function pull($pageSize = 20)
    {
        $http = $this->getHttp();
        return $http->json(Api::CALL_PULL_API, [
            'apikey'    => $this->getApiKey(),
            'page_size' => $pageSize,
        ]);
    }
}