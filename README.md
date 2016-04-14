去[官网][1]下载basic；

##新的目录结构
```php
basic/                  应用根目录
    composer.json       Composer 配置文件, 描述包信息
    config/             包含应用配置及其它配置
        console.php     控制台应用配置信息
        web.php         Web 应用配置信息
    commands/           包含控制台命令类
    controllers/        包含控制器类
    models/             包含模型类
    runtime/            包含 Yii 在运行时生成的文件，例如日志和缓存文件
    vendor/             包含已经安装的 Composer 包，包括 Yii 框架自身
    views/              包含视图文件
    web/                Web 应用根目录，包含 Web 入口文件
        assets/         包含 Yii 发布的资源文件（javascript 和 css）
        index.php       应用入口文件
    yii              
```

##MVC
Yii 实现了[模型-视图-控制器 (MVC)](http://wikipedia.org/wiki/Model-view-controller)设计模式，这点在上述目录结构中也得以体现。 `models` 目录包含了所有[模型类](http://www.getyii.com/doc-2.0/guide/structure-models.html)，`views` 目录包含了所有[视图脚本](http://www.getyii.com/doc-2.0/guide/structure-views.html)，`controllers` 目录包含了所有[控制器类](http://www.getyii.com/doc-2.0/guide/structure-controllers.html)。

[1]:http://www.yiichina.com/download

##补充
* 表达式 `Yii::$app` 代表[应用](http://www.getyii.com/doc-2.0/guide/structure-applications.html)实例，它是一个全局可访问的单例。同时它也是一个[服务定位器](http://www.getyii.com/doc-2.0/guide/concept-service-locator.html)，能提供 `request`，`response`，`db` 等等特定功能的组件
