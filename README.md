## Install

Copy `.env` into `.env.local` file and add your local informations.

```
composer install
yarn install
bin/console d:d:c
bin/console d:m:m -n
bin/console d:f:l -n
bin/console assets:install --symlink public
bin/console fos:js-routing:dump --format=json --target=public/js/fos_js_routes.json
yarn encore dev
```

Launch PHP server 

```
symfony server:start
```

## Tests

### PHPUnit

Run execute PHPUnit test

```
bin/phpunit
```

### Behat

Run selenium and execute behat tests

```
java -Dwebdriver.chrome.driver="chromedriver" -jar selenium-server-standalone-3.141.59.jar
bin/behat
```
