<?php
$config['template'] = [
    'header' => 'templates/t_header',
    'footer' => 'templates/t_footer'
];

$config['upload'] = [
    'upload_path' => 'images/',
    'allowed_types' => 'jpg|jpeg|png|gif',
    'encrypt_name' => TRUE,
    'max_size' => 10024,
    'max_width' => 6000,
    'max_height' => 6000
];

$config['member_ex_picture'] = 'member-place-holder.png';