<?php
namespace Chunhei2008\YunPian\Foundation\Http;

use GuzzleHttp\Client;

/**
 * Http.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 11:22
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class HttpClient
{

    protected $client;

    public function __construct()
    {
        $this->initializeClient();
    }

    protected function initializeClient()
    {
        $this->client = new Client();
    }

    public function json()
    {


    }

}