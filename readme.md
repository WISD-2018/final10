

# 勤益「米其林」星級評鑑網

我們針對勤益商圈做一個美食評論系統，我們預設每一位學生都是專業美食達人，可以在吃完美食後，直接在我們的系統上，對該店家打分數，最高可以打到五顆星。你也可以想像自己是一個專業的美食評論家，可以在我們的系統針對某家餐廳發表文章，寫出你的想法、意見或是純粹分享美食！

## 系統的主要功能
### 前端
1. 文章的新增、修改、刪除、按讚
> a.新增(相關路由、Controller方法、View：3A532055 / Controller方法、View完善：3A532067)

> b.修改(相關路由、Controller方法、View：3A532055 / Controller方法、View完善：3A532067)

> c.刪除(相關路由、Controller方法、View：3A532055 / 更改在View中的位置：3A532067)

> d.按讚(相關路由、Controller方法、View：3A532067)

2. 留言的新增、刪除
> a.新增(相關路由、Controller方法、View：3A532055)

> b.刪除(相關路由、Controller方法、View：3A532055 / Controller方法完善：3A532067)

3. 查看所有餐廳
> (相關路由、Controller方法、View：3A532067)

4. 依餐廳類別查詢相關文章
> (相關路由、Controller方法、View：3A532067)

5. 為餐廳評分
> (相關路由、Controller方法、View：3A532067)

### 後端
1. 餐廳管理：查看所有餐廳並有刪除功能
> (相關路由、Controller方法、View：3A532055)

2. 會員管理：查看所有會員並有刪除功能
> (相關路由、Controller方法、View：3A532055)

3. 檢舉文章管理
> a.查看所有被檢舉的文章(相關路由、Controller方法、View：3A532067)

> b.查看功能查看文章是否不妥(相關路由、Controller方法、View：3A532067)

> c.清白功能：查看若無不妥可清除檢舉狀態(相關路由、Controller方法、View：3A532067)

> d.刪除功能：查看若不妥當可刪除該篇文章(相關路由、Controller方法、View：3A532067)

4. 回報問題管理：查看所有回報的問題
> (相關路由、Controller方法、View：3A532055)

## 初始專案與DB、migration建立、關聯
- 初始專案 [3A532067 鄭一緯](https://github.com/3A532067)
- 資料庫及資料表建立 [3A532067 鄭一緯](https://github.com/3A532067)
- 資料表關聯 [3A532067 鄭一緯](https://github.com/3A532067)
- 假資料建立 [3A532067 鄭一緯](https://github.com/3A532067)

## 額外使用的套件或樣板
- Bootstrap 套件(按鈕、下拉式選單、card等等...)
> https://getbootstrap.com/docs/4.2/getting-started/download/
- Materialize 套件(在個人頁面那裡設計特殊的card效果)
> https://materializecss.com/getting-started.html
- 參考 3 Col Portfolio 樣板(在主畫面呈現所有貼文)
> https://startbootstrap.com/template-overviews/3-col-portfolio/
- 參考 Simple Sidebar 樣板(使用於後台，方便管理後台功能)
> https://startbootstrap.com/template-overviews/simple-sidebar/

## 系統復原步驟
1. > 利用Source tree，來clone我們的系統 https://github.com/WISD-2018/final10.git
2. > 打開Cmder輸入以下命令
     - cd final10 (clone下來的名稱)
     - composer install
     - composer run-script post-root-package-install
     - composer run-script post-create-project-cmd
3. > 利用UwAmp，點選PHPMyAdmin，進入mysql的管理介面後，新增一個新的資料庫final10(自由命名)
4. > 打開專案在.env檔設定連結資料庫
     - DB_PORT=33060
     - DB_DATABASE=final10(剛剛命名的名稱)
     - DB_USERNAME=root
     - DB_PASSWORD=root
5. > 打開Cmder輸入以下命令，來建立資料表的屬性
     - php artisan migrate
6. > 打開Cmder輸入以下命令，來建立所有測試資料
     -  php artisan db:seed

## 系統使用帳號
1. default user
> a.可以自行註冊

> b.或使用seed後的測試帳號，內已有30組帳號，密碼皆為：123456
2. Admin
> 帳號：admin@mail.com 密碼:admin

## 系統開發人員
- [3A532067 鄭一緯](https://github.com/3A532067)
- [3A532055 林建勳](https://github.com/3A532055)
