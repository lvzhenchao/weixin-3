<?php
namespace app\api\controller;

use think\Controller;
use think\Db;
use think\Request;

class User extends Controller
{


    public function getSess(Request $request)
    {
        $params = $request->param();
        $code   = $request->param('code');
        $enData = $request->param('encryptedData');
        $iv     = $request->param('iv');
        $appid  = config('xcx.APPID');
        $secret = config('xcx.SECRET');

        $url = "https://api.weixin.qq.com/sns/jscode2session?appid=".$appid."&secret=".$secret."&js_code=".$code."&grant_type=authorization_code";
        $res = file_get_contents($url);

        $res = json_decode($res, true);

        $ret = $this->decryUser($iv, $res['session_key'], $enData, $appid);

        $ret = json_decode($ret, true);
        $thr_session = md5($ret['openId'].$res['session_key']);
        $data = [
            'nick_name'   => $ret['nickName'],
            'avatar_url'  => $ret['avatarUrl'],
            'open_id'     => $ret['openId'],
            'session_key' => $res['session_key'],
            'thr_session' => $thr_session,
        ];

        $id = Db::name("user")->where(['open_id'=>$ret['openId']])->value("id");
        if ($id) {//防止信息有更新
            Db::name("user")->where(['open_id'=>$ret['openId']])->update($data);
        }

        $ins = Db::name("user")->insert($data);
        if ($ins) {
            return $thr_session;
        }
    }

    private function decryUser($iv, $sessionKey, $encryptedData, $appid)
    {
        import('wxBizDataCrypt', EXTEND_PATH);
        $pc = new \WXBizDataCrypt($appid, $sessionKey);
        $errCode = $pc->decryptData($encryptedData, $iv, $data);

        return $data;
    }

}
