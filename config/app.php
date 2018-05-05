<?php


return [
    /**
     * 初始启动组件
     */
    'component' => [
        \HuanL\Core\Components\RouteComponents::class
    ],
    /**
     * 绑定抽象类型
     */
    'abstract' => [
        \HuanL\Core\Components\RouteComponents::class => \App\RouteComponents::class
    ]
];