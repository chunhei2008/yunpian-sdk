<?php
namespace Chunhei2008\YunPian\Foundation\Http;

use Chunhei2008\YunPian\Foundation\Support\YunPianException;
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

    public function json($api, $params)
    {

        $response = $this->client->post($api, [
            'form_params' => $params,
        ]);

        if ($response->getStatusCode() == 200) {
            return json_decode($response->getBody(), true);
        }

        throw new YunPianException('网络错误');
    }

}