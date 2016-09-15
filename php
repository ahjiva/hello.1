<?php                                                                                                                                                                                                            
require 'password.php';

$passwordHash = password_hash('secret-password', PASSWORD_DEFAULT);

if (password_verify('bad-password', $passwordHash)) {
    //Правильный пароль
} else {
    //Неправильный пароль
}
