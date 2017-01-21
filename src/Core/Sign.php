<?php
namespace Chunhei2008\YunPian\Core;

use Chunhei2008\YunPian\Foundation\Support\Api;
use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

/**
 * Sign.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 11:47
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class Sign extends Base
{
    use HttpTrait;

    /**
     * @param       $sign
     * @param array $options
     *
     * @return mixed
     */

    public function add($sign, $options = [])
    {
        $http   = $this->getHttp();
        $params = [
            'apikey' => $this->getApiKey(),
            'sign'   => $sign,
        ];
        return $http->json(Api::SIGN_ADD_API, array_merge($params, $options));
    }

    /**
     * @param array $options
     *
     * @return mixed
     */

    public function get($options = [])
    {
        $http   = $this->getHttp();
        $params = [
            'apikey' => $this->getApiKey(),
        ];
        return $http->json(Api::SIGN_GET_API, array_merge($params, $options));
    }

    /**
     * @param       $oldSign
     * @param       $sign
     * @param array $options
     *
     * @return mixed
     */
    public function update($oldSign, $sign, $options = [])
    {
        $http   = $this->getHttp();
        $params = [
            'apikey'  => $this->getApiKey(),
            'oldSign' => $oldSign,
            'sign'    => $sign,
        ];
        return $http->json(Api::SIGN_UPDATE_API, array_merge($params, $options));
    }

}