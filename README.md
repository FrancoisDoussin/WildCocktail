## Install

Copy `.env` into `.env.local` file and add your local informations.

```
composer install
yarn install
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
