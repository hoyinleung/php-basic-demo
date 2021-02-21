<?php
$hashedPassword = password_hash("password123", PASSWORD_BCRYPT);

if (password_verify("password123",$hashedPassword))
{
    echo '<br>密碼對得上';
} else {
    echo '<br>密碼不對';
}