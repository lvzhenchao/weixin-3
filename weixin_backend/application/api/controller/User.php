<?php
namespace app\api\controller;

use think\Controller;
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

        halt($ret);
        return json($ret);
    }

    private function decryUser($iv, $sessionKey, $encryptedData, $appid)
    {
        import('wxBizDataCrypt', EXTEND_PATH);
        $pc = new \WXBizDataCrypt($appid, $sessionKey);
        $errCode = $pc->decryptData($encryptedData, $iv, $data);

        return $data;
    }

}
