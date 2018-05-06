<?php


return [
    /**
     * 初始启动组件
     */
    'component' => [

    ],
    /**
     * 绑定抽象类型
     */
    'abstract' => [
        /**
         * 将核心的路由组件替换成自定义的组件
         */
        \HuanL\Core\Components\RouteComponents::class => \App\RouteComponents::class
    ]
];