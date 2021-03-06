<?php

return [
    'email' => [
        'title' => 'Actualizar Correo',
        'updated' => 'Su dirección de correo electrónico ha sido actualizada.',
    ],
    'password' => [
        'title' => 'Cambiar su contraseña',
        'requirements' => 'Su nueva contraseña debe tener al menos 8 caracteres de longitud.',
        'updated' => 'Tu contraseña ha sido actualizada.',
    ],
    'two_factor' => [
        'button' => 'Configure 2-Factor Authentication',
        'disabled' => 'Two-factor authentication has been disabled on your account. You will no longer be prompted to provide a token when logging in.',
        'enabled' => 'Two-factor authentication has been enabled on your account! From now on, when logging in, you will be required to provide the code generated by your device.',
        'invalid' => 'The token provided was invalid.',
        'setup' => [
            'title' => 'Setup two-factor authentication',
            'help' => 'Can\'t scan the code? Enter the code below into your application:',
            'field' => 'Enter token',
        ],
        'disable' => [
            'title' => 'Disable two-factor authentication',
            'field' => 'Enter token',
        ],
    ],
];
