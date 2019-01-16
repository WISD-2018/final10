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

<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of any modern web application framework, making it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 1100 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell):

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
