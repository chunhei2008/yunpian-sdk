<?php
namespace Chunhei2008\YunPian\Foundation\Support;
/**
 * Api.php
 *
 * Author: wangyi <chunhei2008@qq.com>
 *
 * Date:   2017/1/20 11:24
 * Copyright: (C) 2014, Guangzhou YIDEJIA Network Technology Co., Ltd.
 */
final class Api
{
    //user api
    const USER_GET_API = 'https://sms.yunpian.com/v2/user/get.json';
    const USER_SET_API = 'https://sms.yunpian.com/v2/user/set.json';
    //sign api
    const SIGN_ADD_API    = 'https://sms.yunpian.com/v2/sign/add.json';
    const SIGN_GET_API    = 'https://sms.yunpian.com/v2/sign/get.json';
    const SIGN_UPDATE_API = 'https://sms.yunpian.com/v2/sign/update.json';
    //template api
    const  TPL_ADD_API    = 'https://sms.yunpian.com/v2/tpl/add.json';
    const  TPL_GET_API    = 'https://sms.yunpian.com/v2/tpl/get.json';
    const  TPL_UPDATE_API = 'https://sms.yunpian.com/v2/tpl/update.json';
    const  TPL_DEL_API    = 'https://sms.yunpian.com/v2/tpl/del.json';
    //sms api
    const SMS_SINGLE_SEND_API    = 'https://sms.yunpian.com/v2/sms/single_send.json';
    const SMS_BATCH_SEND_API     = 'https://sms.yunpian.com/v2/sms/batch_send.json';
    const SMS_MULTI_SEND_API     = 'https://sms.yunpian.com/v2/sms/multi_send.json';
    const SMS_PULL_STATUS_API    = 'https://sms.yunpian.com/v2/sms/pull_status.json';
    const SMS_PULL_REPLY_API     = 'https://sms.yunpian.com/v2/sms/pull_reply.json';
    const SMS_GET_RECORD_API     = 'https://sms.yunpian.com/v2/sms/get_record.json';
    const SMS_GET_BLACK_WORD_API = 'https://sms.yunpian.com/v2/sms/get_black_word.json';
    //voice api
    const VOICE_SEND_API        = 'https://voice.yunpian.com/v2/voice/send.json';
    const VOICE_PULL_STATUS_API = 'https://voice.yunpian.com/v2/voice/pull_status.json';
    //flow api
    const FLOW_GET_PACKAGE_API = 'https://flow.yunpian.com/v2/flow/get_package.json';
    const FLOW_RECHARGE_API    = 'https://flow.yunpian.com/v2/flow/recharge.json';
    const FLOW_PULL_STATUS     = 'https://flow.yunpian.com/v2/flow/pull_status.json';
    //call api
    const CALL_BIND_API   = 'https://call.yunpian.com/v2/call/bind.json';
    const CALL_UNBIND_API = 'https://call.yunpian.com/v2/call/unbind.json';
    const CALL_PULL_API   = 'https://call.yunpian.com/v2/call/pull.json';

}