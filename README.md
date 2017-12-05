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

## 使用 **[laradock](https://github.com/laradock/laradock)** 项目 配置 **docker** 环境
---

```bash
vim .env
DB_HOST=mysql

cd laradock
cp env-example .env
sudo docker-compose up -d nginx mysql # 启动容器
sudo docker exec workspace composer install && php artisan migrate:refresh # 数据库迁移
```
## TODO
- 增加用户头像设置
- 登录注册验证码功能

