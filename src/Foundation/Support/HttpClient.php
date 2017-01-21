<?php
namespace Chunhei2008\YunPian\Foundation\Support;

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
    /**
     * client
     * @var
     */
    protected $client;


    public function __construct()
    {
        $this->createClient();
    }

    /**
     * create client
     */
    protected function createClient()
    {
        $this->client = new Client();
    }

    public function json($api, $params)
    {

        $response = $this->client->post($api, [
            'form_params' => $params,
        ]);

        if ($response->getStatusCode() == 200) {
            $body = $response->getBody();
            return json_decode($body->getContents(), true);
        }

        throw new YunPianException('网络错误');
    }

}