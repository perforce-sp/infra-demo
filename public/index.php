<?php

$env =
    array_merge(
        (parse_ini_file('../.env') ? parse_ini_file('../.env') : []),
        (parse_ini_file('../.env.local') ? parse_ini_file('../.env.local') : [])
    );

print getenv('APP_NAME') ?: 'No var';
print '</br>';
print getenv('APP_ENV') ?: 'No var';
print '</br>';
print getenv('APP_SECRET') ?: 'No var';
print '</br>';
print $env['APP_NAME'] ?: 'No var';
print '</br>';
print $env['APP_ENV'] ?: 'No var';
print '</br>';
print $env['APP_SECRET'] ?: 'No var';
print '</br>';