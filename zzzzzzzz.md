##  npm mirrors in aliyun
alias cnpm="sail npm --registry=https://registry.npmmirror.com --cache=$HOME/.npm/.cache/cnpm --disturl=https://npmmirror.com/mirrors/node --userconfig=$HOME/.cnpmrc"

## composer  aliyun mirror 

sail composer config -g repo.packagist composer https://mirrors.aliyun.com/composer/


### deploy
sail php artisan optimize

sail php artisan config:cache

sail php artisan event:cache

sail php artisan route:cache

sail php artisan view:cache

APP_DEBUG=false