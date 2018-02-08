<?php
return array(
':l/Tags/:module/:tag/:p' => 'Home/Tags/index',
':l/Tags/:tag/:p' => 'Home/Tags/index',
':l/Tags/:module/:tag' => 'Home/Tags/index',
':l/Tags/:p\d' => 'Home/Tags/index',
':l/Tags/:tag' => 'Home/Tags/index',
':l/Tags' => 'Home/Tags/index',
'Tags/:module/:tag/:p' => 'Home/Tags/index',
'Tags/:tag/:p' => 'Home/Tags/index',
'Tags/:module/:tag' => 'Home/Tags/index',
'Tags/:p\d' => 'Home/Tags/index',
'Tags/:tag' => 'Home/Tags/index',
'Tags' => 'Home/Tags/index',
'/^([\w^_]+)_(\d+)-(\d+)$/' => 'Urlrule/show?catdir=:1&id=:2&p=:3&',
'/^([\w^_]+)_(\d+)$/' => 'Urlrule/show?catdir=:1&id=:2&',
'/^([\w^_]+)-(\d+)$/' => 'Urlrule/index?catdir=:1&p=:2&',
'/^([\w^_]+)$/' => 'Urlrule/index?catdir=:1&'
);
?>