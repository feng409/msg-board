# laravel搭建的留言板项目

## 介绍
---
- session认证登录
- 留言支持emoji表情
- 留言支持markdown语法

## 安装方法:
---
```bash
git clone https://github.com/feng409/msg-board.git
cd msg-board
composer install
npm install
cp .env.example .env
vim .env # 修改env配置中的数据库连接
php artisan serve # 运行程序
```

## Docker Compose 安装
---
关于怎么安装和使用 **docker** 以及 **docker-compose** 这里就不介绍了  
PS: 被服务器环境配置搞烦了,用上 **docker** 神器: 
>一次配置,导出运行
```bash
cp .env.example .env
sudo docker-compose up -d
sudo docker exec msgboard_php-fpm_1 composer install && php artisan migrate:refresh # 数据库迁移
```
## TODO
- 增加用户头像设置
- 登录注册验证码功能

