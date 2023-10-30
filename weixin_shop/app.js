//app.js
var  config = require("utils/config.js");

App({
  onLaunch: function () {
    if(wx.getStorageSync('thr_session')){
      return '';
    }
    wx.login({
      success: (res_login) => {
        var code = res_login.code
        wx.getUserInfo({
          success: function (res_userInfo) {
            wx.setStorage({key: 'userInfo', data: res_userInfo.userInfo});
            wx.request({
              url: config.URL + '/getSess',
              method: 'POST',
              data:{
                code:code,
                encryptedData:res_userInfo.encryptedData,
                iv:res_userInfo.iv,
              },
              success:function (res_req) {
                wx.setStorageSync('thr_session', res_req.data);
                
              }
            })
          }
        })
      }
    })
    
  }
})