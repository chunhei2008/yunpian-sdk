<?php
namespace Chunhei2008\YunPian\Core;

use Chunhei2008\YunPian\Foundation\Support\Api;
use Chunhei2008\YunPian\Foundation\Support\Base;
use Chunhei2008\YunPian\Foundation\Support\YunPianException;
use Chunhei2008\YunPian\Foundation\Traits\HttpTrait;

/**
 * Sms.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:43
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
class Sms extends Base
{
    const SMS_MOBILE_LIMIT = 1000;

    use HttpTrait;

    /**
     * @param       $mobile
     * @param       $text
     * @param array $options
     *
     * @return mixed
     */
    public function singleSend($mobile, $text, $options = [])
    {
        $http   = $this->getHttp();
        $params = [
            'apikey' => $this->getApiKey(),
            'mobile' => $mobile,
            'text'   => $text,
        ];
        return $http->json(Api::SMS_SINGLE_SEND_API, array_merge($params, $options));
    }

    /**
     * @param       $mobile
     * @param       $text
     * @param array $options
     *
     * @return mixed
     */

    public function batchSend($mobile, $text, $options = [])
    {
        $mobile = $this->mobile($mobile);
        $http   = $this->getHttp();
        $params = [
            'apikey' => $this->getApiKey(),
            'mobile' => $mobile,
            'text'   => $text,
        ];
        return $http->json(Api::SMS_BATCH_SEND_API, array_merge($params, $options));
    }

    /**
     * @param       $mobile
     * @param       $text
     * @param array $options
     *
     * @return mixed
     */
    public function multiSend($mobile, $text, $options = [])
    {
        $mobile = $this->mobile($mobile);
        $http   = $this->getHttp();
        $params = [
            'apikey' => $this->getApiKey(),
            'mobile' => $mobile,
            'text'   => $text,
        ];
        return $http->json(Api::SMS_MULTI_SEND_API, array_merge($params, $options));
    }

    /**
     * @param int $pageSize
     *
     * @return mixed
     */
    public function pullStatus($pageSize = 20)
    {
        $http = $this->getHttp();
        return $http->json(Api::SMS_PULL_STATUS_API, [
            'apikey'    => $this->getApiKey(),
            'page_size' => $pageSize,
        ]);
    }

    /**
     * @param int $pageSize
     *
     * @return mixed
     */
    public function pullReply($pageSize = 20)
    {
        $http = $this->getHttp();
        return $http->json(Api::SMS_PULL_REPLY_API, [
            'apikey'    => $this->getApiKey(),
            'page_size' => $pageSize,
        ]);
    }

    /**
     * @param       $startTime
     * @param       $endTime
     * @param array $options
     *
     * @return mixed
     */
    public function getRecord($startTime, $endTime, $options = [])
    {
        $http   = $this->getHttp();
        $params = [
            'apikey'     => $this->getApiKey(),
            'start_time' => $startTime,
            'end_time'   => $endTime,
        ];
        return $http->json(Api::SMS_GET_RECORD_API, array_merge($params, $options));
    }

    /**
     * @param $text
     *
     * @return mixed
     */
    public function getBlackWord($text)
    {
        $http = $this->getHttp();
        return $http->json(Api::SMS_GET_BLACK_WORD_API, [
            'apikey' => $this->getApiKey(),
            'text'   => $text,
        ]);
    }

    /**
     * @param $mobile
     *
     * @return string
     * @throws YunPianException
     */
    protected function mobile($mobile)
    {
        if (is_string($mobile)) {
            $mobile = trim($mobile, ',');
            $mobile = explode(',', $mobile);
        }

        if (count($mobile) > self::SMS_MOBILE_LIMIT) {
            throw new YunPianException('批量发送手机数量不能超过' . self::SMS_MOBILE_LIMIT);
        }
        return implode(',', $mobile);
    }
}