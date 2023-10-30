# 1、点击预览，可以通过二维码，下载预览版,点击三个点，查看性能测试

# 2、微信文档-> API -> 开放接口 ->
## wx.login:获取登录凭证code
## wx.getUserInfo：获取用户信息，里面的信息注意：encryptedData,iv+code，去后段请求解密，详细的用户信息
## 后端调用一个接口，获取sessonKey