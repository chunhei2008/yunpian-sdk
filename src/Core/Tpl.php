<?php
/**
 * Tpl.php
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

class Tpl extends Base
{

    use HttpTrait;

    /**
     * @param     $tplContent
     * @param int $notifyType
     *
     * @return mixed
     */
    public function add($tplContent, $notifyType = 0)
    {
        $http = $this->getHttp();
        return $http->json(Api::TPL_ADD_API, [
            'apikey'      => $this->getApiKey(),
            'tpl_content' => $tplContent,
            'notify_type' => $notifyType,
        ]);
    }

    /**
     * @param null $tplId
     *
     * @return mixed
     */
    public function get($tplId = null)
    {
        $http = $this->getHttp();
        return $http->json(Api::TPL_GET_API, [
            'apikey' => $this->getApiKey(),
            'tpl_id' => $tplId,
        ]);
    }

    /**
     * @param $tplId
     * @param $tplContent
     *
     * @return mixed
     */
    public function update($tplId, $tplContent)
    {
        $http = $this->getHttp();
        return $http->json(Api::TPL_UPDATE_API, [
            'apikey'      => $this->getApiKey(),
            'tpl_content' => $tplContent,
            'tpl_id'      => $tplId,
        ]);
    }

    /**
     * @param $tplId
     *
     * @return mixed
     */

    public function del($tplId)
    {
        $http = $this->getHttp();
        return $http->json(Api::TPL_DEL_API, [
            'apikey' => $this->getApiKey(),
            'tpl_id' => $tplId,
        ]);
    }

    /**
     * get tpl sms count
     *
     * @param $tplContent
     *
     * @return float|int
     */
    public function smsCount($tplContent)
    {
        $tplLen = 0;
        $count  = preg_match_all('/#[^#]+#/', $tplContent);
        if ($count > 0) {
            $tplLen += $count * 10;
            $tplContent = preg_replace('/#[^#]+#/', '', $tplContent);
        }

        $tplLen += mb_strlen($tplContent);

        if ($tplLen > 70) {
            return ceil($tplLen / 67);
        }
        return 1;
    }

}