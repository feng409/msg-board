# laravel搭建的留言板项目

## 介绍
- session认证登录
- 留言支持emoji表情
- 留言支持markdown语法

## 安装方法:
```shell
git clone https://github.com/feng409/msg-board.git
cd msg-board
composer install
npm install
cp .env.example .env
vim .env # 修改env配置中的数据库连接
php artisan serve # 运行程序
```

## TODO
- 增加用户头像设置
- 登录注册验证码功能

