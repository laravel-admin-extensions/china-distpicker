Distpicker extension for laravel-admin
======

[Distpicker](https://github.com/fengyuanchen/distpicker)是一个中国省市区三级联动选择组件，这个包基于`Distpicker`的`laravel-admin`扩展，用来将`Distpicker`集成进`laravel-admin`的表单中

## 截图

![wx20180905-212332](https://user-images.githubusercontent.com/1479100/45096011-186c8580-b152-11e8-8a38-dcd94cd46d4b.png)

## 安装

```bash
composer require laravel-admin-ext/china-distpicker
```

然后
```bash
php artisan vendor:publish --tag=laravel-admin-china-distpicker
```

## 配置

在`config/admin.php`文件的`extensions`，加上属于这个扩展的一些配置
```php

    'extensions' => [

        'china-distpicker' => [
        
            // 如果要关掉这个扩展，设置为false
            'enable' => true,
        ]
    ]

```

## 使用

比如在表中有三个字段`province_id`, `city_id`, `district_id`, 在form表单中使用它：
```php
$form->distpicker(['province_id', 'city_id', 'district_id']);

// 设置placeholder
$form->distpicker([
    'province_id' => '省',
    'city_id'     => '市',
    'district_id' => '区'
]);

// 设置label
$form->distpicker(['province_id', 'city_id', 'district_id'], '请选择区域');

// 设置自动选择, 可以设置1,2,3 表示自动选择到第几级
$form->distpicker(['province_id', 'city_id', 'district_id'])->autoselect(1);

```

## 支持

如果觉得这个项目帮你节约了时间，不妨支持一下;)

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).