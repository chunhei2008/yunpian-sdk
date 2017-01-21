<?php
/**
 * User.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/21 10:38
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Core;


use Chunhei2008\YunPian\Foundation\Support\Api;
use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

class User extends Base
{

    use HttpTrait;

    /**
     * @return mixed
     */
    public function get()
    {
        $http = $this->getHttp();
        return $http->json(Api::USER_GET_API, [
            'apikey' => $this->getApiKey(),
        ]);
    }

    /**
     * @param array $options
     *
     * @return mixed
     */

    public function set($options = [])
    {
        $http = $this->getHttp();
        return $http->json(Api::USER_SET_API, [
            'apikey' => $this->getApiKey(),
            $options,
        ]);
    }


}