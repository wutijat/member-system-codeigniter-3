<?php

function make_authen_cooke($value)
{
    $cookie = [
        'name'   => 'authen',
        'value'   => $value[0]->reg_id,
        'expire' => 60 * 60 * 0.5, //second // 30  minute to exprice
    ];

    return $cookie;
}
