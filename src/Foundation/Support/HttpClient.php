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
        $this->client = new Client(
            [
                'http_errors' => false,
            ]
        );
    }

    /**
     * @param $method
     * @param $api
     * @param $params
     *
     * @return mixed
     */

    protected function request($method, $api, $params)
    {
        $response = $this->client->request($method, $api, [
            'form_params' => $params,
        ]);
        return $response;
    }

    /**
     * @param $api
     * @param $params
     *
     * @return mixed
     */
    public function json($api, $params)
    {
        $response = $this->request('POST', $api, $params);
        $body     = $response->getBody();
        $content  = $body->getContents();
        Log::info($content);
        return json_decode($content, true);
    }
}