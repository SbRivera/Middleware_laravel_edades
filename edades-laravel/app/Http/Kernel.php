<?php
protected $routeMiddleware = [
    // ...
    'clasificar.edad' => \App\Http\Middleware\ClasificarEdad::class,
];
