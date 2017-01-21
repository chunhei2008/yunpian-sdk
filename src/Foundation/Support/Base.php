<?php
/**
 * Base.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 23:51
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */

namespace Chunhei2008\YunPian\Foundation\Support;


abstract class Base
{
    /**
     * @var
     */
    protected $config;

    /**
     * apikey
     * @var
     */
    protected $apiKey;


    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    /**
     * get apikey
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey ?: $this->getDefaultApiKey();
    }

    /**
     * set apikey
     *
     * @param $apiKey
     *
     * @return $this
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $this->config->get('apiKeys.' . $apiKey);
        return $this;
    }

    /**
     * get default apikey
     * @return string
     */
    protected function getDefaultApiKey()
    {
        $default = $this->config->get('default', 'system');
        return $this->config->get('apiKeys.' . $default, '');
    }
}