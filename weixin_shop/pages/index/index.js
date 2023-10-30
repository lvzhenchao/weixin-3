//index.js
//获取应用实例
const app = getApp();
Page({
  data: {
   bookUrls:[
     "../../images/book/book-1.png",
     "../../images/book/book-2.png",
     "../../images/book/book-3.png"
   ]
  },

  detail:function(){
    wx.navigateTo({
      url: '../detail/detail',
    })
  },


  
})
