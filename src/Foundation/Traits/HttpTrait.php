<?php
namespace Chunhei2008\YunPian\Foundation\Traits;

use Chunhei2008\YunPian\Foundation\Support\HttpClient;

/**
 * HttpTrait.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 11:50
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
trait HttpTrait
{
    /**
     * http client
     * @var
     */
    protected $http;

    /**
     * set http client
     *
     * @param HttpClient $http
     *
     * @return $this
     */
    public function setHttp(HttpClient $http)
    {
        $this->http = $http;
        return $this;
    }

    /**
     * get http client
     * @return HttpClient
     */
    public function getHttp()
    {
        return $this->http ?: new HttpClient();
    }
}