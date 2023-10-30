# 1、点击预览，可以通过二维码，下载预览版,点击三个点，查看性能测试

# 2、微信文档-> API -> 开放接口 ->
## wx.login:获取登录凭证code
## wx.getUserInfo：获取用户的基本信息，不包含敏感数据；
```
普通基本信息
{
    cloudID: "74_bt6iKlNtnRK2SUXzCJslcXQlAj0fQJHxcSbWgG0j-r_BUuhxoWnwKTwxDwU"
    encryptedData: "/aEO1IRXNNAfUdS6wURN3Ztm6geQD1332ihM0hI3LpPb3Sov7Ay+cDjCtKLOvOMi7MeRA91Lj/lFJipNSCRzjvaOXDkAJvd4slbR4JYmHBHnnKi1uJshgFkvsF7Yp0dhWl+hJ50ujMWHfrygpdzpAHd8V/IhTLp2SOoHvqXZEYBDOlcdF1imaAYXVo9TUWgDCj99Dzalz1BHHX6ezcsWz8WPjeOHWrWp8Yqvj93lAcQT6pdswrd6lum9R6uHb0SGrAb53jaazXqyGfoZ6U4tZUH/ogAufEWuzsV/YsaKGxYWbv0mZs25ENMcN7TUmuKk6jP90sB2ZMtH/bdb9fVnA0Cj1zgA1NagfubcNFlnrQa4MMG2cpAgMYcNjqf/DCJ2YYQqhGMuIKWHr+7IvMiMhp8U10V0s9T3bN43Y77vFiIxuLjOA12sThbVH9EstRCi5a8cYOChdON9zCamZzO8Pg=="
    errMsg: "getUserInfo:ok"
    iv: "cuqHHUs5ErFM01NNiCbmOQ=="
    rawData: "{"nickName":"微信用户","gender":0,"language":"","city":"","province":"","country":"","avatarUrl":"https://thirdwx.qlogo.cn/mmopen/vi_32/POgEwh4mIHO4nibH0KlMECNjjGxQUq24ZEaGT4poC6icRiccVGKSyXwibcPq4BWmiaIGuG1icwxaQX6grC9VemZoJ8rg/132"}"
    signature: "2102b67191bb700f0651d2341bcfe5cab37525f3" //signature = sha1( rawData + session_key )
    userInfo: {...}
}

敏感信息+普通基本信息
userInfo:{
    "openId": "OPENID",
    "nickName": "NICKNAME",
    "gender": GENDER,
    "city": "CITY",
    "province": "PROVINCE",
    "country": "COUNTRY",
    "avatarUrl": "AVATARURL",
    "unionId": "UNIONID",//如果获取不到，可能是 【小程序，或者公众号，需要先绑定到 微信开放平台】https://www.u72.net/shili/show-669944.html
    "watermark":
    {
        "appid":"APPID",
        "timestamp":TIMESTAMP
    }
}
{
    "openId": "o-ox468zUqSqfH9EA4Pxmzo0kr8o",
    "nickName": "微信用户",
    "gender": 0,
    "language": "",
    "city": "",
    "province": "",
    "country": "",
    "avatarUrl": "https://thirdwx.qlogo.cn/mmopen/vi_32/POgEwh4mIHO4nibH0KlMECNjjGxQUq24ZEaGT4poC6icRiccVGKSyXwibcPq4BWmiaIGuG1icwxaQX6grC9VemZoJ8rg/132",
    "watermark": 
    {
        "timestamp": 1698676321,
        "appid": "wx2ec72e21d73f9044"
    }
}

方法：
第一步：调用微信wx.login获取登录凭证code
第二步：通过code 获取 openid 和 session_key
    https://api.weixin.qq.com/sns/jscode2session?appid=APPID&secret=SECRET&js_code=JSCODE&grant_type=authorization_code
    参考https://developers.weixin.qq.com/miniprogram/dev/OpenApiDoc/user-login/code2Session.html
    openid: "o-ox468zUqSqfH9EA4Pxmzo0kr8o"
    session_key: "8MFmKfEySZsyhqWNV7ZUqA=="
第三步：加密数据解密：下载demo
    参考 https://developers.weixin.qq.com/miniprogram/dev/framework/open-ability/signature.html

```
## 后端调用