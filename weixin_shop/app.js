//app.js
var  config = require("utils/config.js");

App({
  onLaunch: function () {

    wx.login({
      success: (res_login) => {
        var code = res_login.code
        wx.getUserInfo({
          success: function (res_userInfo) {
            console.log(config.URL)
            wx.request({
              url: config.URL + '/getSess',
              method: 'POST',
              data:{
                code:code,
                encryptedData:res_userInfo.encryptedData,
                iv:res_userInfo.iv,
              },
              success:function (res_req) {
                console.log(res_req); 
              }
            })
          }
        })
      }
    })
    
  }
})