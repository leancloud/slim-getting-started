# Slim Getting Started

一个基于 [Slim 框架](http://slimframework.com/) 的 PHP 应用,可以
运行在 LeanEngine PHP 运行时环境。

## 本地运行

首先确认本机已经安装 PHP 和 [composer](https://getcomposer.org/) 以及 [LeanCloud 命令行工具](https://www.leancloud.cn/docs/leanengine_cli.html)，然后执行下列指令：

```
$ git clone git@github.com:leancloud/slim-getting-started.git
$ cd slim-getting-started
```

安装依赖：

```
composer install
```

关联应用：

```
lean app add origin <appId>
```

这里的 appId 填上你在 LeanCloud 上创建的某一应用的 appId 即可。origin 则有点像 Git 里的 remote 名称。

启动项目：

```
lean up
```

应用即可启动运行：[localhost:3000](http://localhost:3000)

同时开启的还有云函数的本地调试工具：[localhost:3001](http://localhost:3001)

## 部署到 LeanEngine

部署到预备环境（若无预备环境则直接部署到生产环境）：
```
lean deploy
```

将预备环境的代码发布到生产环境：
```
lean publish
```

## 相关文档

* [PHP 网站托管开发指南](https://leancloud.cn/docs/leanengine_webhosting_guide-php.html)
* [PHP 云函数开发指南](https://leancloud.cn/docs/leanengine_cloudfunction_guide-php.html)
* [PHP 数据存储开发指南](https://leancloud.cn/docs/leanstorage_guide-php.html)
* [PHP SDK API 文档](https://leancloud.cn/api-docs/php/)

