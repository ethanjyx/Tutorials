You will need to install redis first. Keep running redis when using this. 

####To start workers:
Go to `vendor/chrisboulton/php-resque/demo`, on command line enter:
`QUEUE=default APP_INCLUDE=../../../../My_Job.php VVERBOSE=1 INTERVAL=1 php resque.php`

#### Assign work
`php main.php`