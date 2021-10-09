<?php

use App\CommandBus\PingAction;

$router = resolve('missive:router');

$router->register('PING', PingAction::class);
