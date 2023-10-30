// pages/user/user.js
Page({
  data:{
    avartarUrl: null,
    nick_name: null
  },
  onLoad:function () {
    var userInfo = wx.getStorageSync('userInfo');
    this.setData({
      avartarUrl: userInfo.avatarUrl,
      nick_name: userInfo.nickName
    });
  },

  getAdd:function(){
    wx.chooseAddress({
      
    })
  }
})