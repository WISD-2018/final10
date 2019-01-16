##系統主畫面

##系統的作用
針對勤益商圈做一個美食評論的系統。
會員(學生)可以直接在我們的系統上，對該店家打分數，最高可以打到五顆星。
你也可以想像自己是一個專業的美食評論家，可以在我們的系統對某家餐廳發表文章，
提出你的想法、意見或是純粹分享美食！

##系統的主要功能
#前端
1.文章的新增、修改、刪除、按讚
a.新增(相關路由、Controller方法、View：3A532055/Controller方法、View完善：3A532067)
b.修改(相關路由、Controller方法、View：3A532055/Controller方法、View完善：3A532067)
c.刪除(相關路由、Controller方法、View：3A532055/更改在View中的位置：3A532067)
d.按讚(相關路由、Controller方法、View：3A532067)

2.留言的新增、刪除
a.新增(相關路由、Controller方法、View：3A532055)
b.刪除(相關路由、Controller方法、View：3A532055/Controller方法完善：3A532067)

3.查看所有餐廳
(相關路由、Controller方法、View：3A532067)

4.依餐廳類別查詢相關文章
(相關路由、Controller方法、View：3A532067)

5.為餐廳評分
(相關路由、Controller方法、View：3A532067)

#後端
1.餐廳管理：查看所有餐廳並有刪除功能
(相關路由、Controller方法、View：3A532055)

2.會員管理：查看所有會員並有刪除功能
(相關路由、Controller方法、View：3A532055)

3.檢舉文章管理
(a~d相關路由、Controller方法、View：3A532067)
a.查看所有被檢舉的文章
b.查看功能查看文章是否不妥
c.清白功能：查看若無不妥可清除檢舉狀態
d.刪除功能：查看若不妥當可刪除該篇文章

4.回報問題管理：查看所有回報的問題
(相關路由、Controller方法、View：3A532055)

##初始專案與DB、migration建立、關聯
3A532067 鄭一緯

##額外使用的套件或樣板
3A532067 鄭一緯


##系統復原步驟
1. git clone https://github.com/WISD-2018/final10.git
2. composer install
3.composer run-script post-root-package-install
4.composer run-script post-create-project-cmd
5.新增一資料庫並在.env檔DB部分設定連結該資料庫
6.php artisan migrate
7.php artisan db:seed


##系統使用帳號
1.default user
a.自行註冊
b.使用db:seed後的帳號資料 密碼皆為 123456
2.Admin
帳號:admini@gmail.com 密碼:admin


##系統開發人員
3A532067 鄭一緯
3A532055 林建勳