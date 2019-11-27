bin/console d:d:d --force
bin/console d:d:c
bin/console d:m:m -n

bin/console doctrine:query:sql "INSERT INTO category (name, image) VALUE ('rhum', 'https://www.cave-bruant.fr/5075-large_default/william-hinton-6-ans-brandy-cask-rhum-agricole-de-madere.jpg');"
bin/console doctrine:query:sql "INSERT INTO category (name, image) VALUE ('vodka', 'https://d3r6kbofdnmd8.cloudfront.net/media/catalog/product/cache/image/1536x/a4e40ebdc3e371adff845072e1c73f37/1/0/102323_absolut-vodka-a-drop-of-love_1000_2.jpg');"
bin/console doctrine:query:sql "INSERT INTO category (name, image) VALUE ('sans alcool', 'https://www.lesfruitsetlegumesfrais.com/_upload/cache/ressources/produits/fruits-exotiques/fruits-exotiques-_4__346_346_filled.jpg');"
bin/console doctrine:query:sql "INSERT INTO category (name, image) VALUE ('gin', 'https://d3r6kbofdnmd8.cloudfront.net/media/catalog/product/cache/image/1536x/a4e40ebdc3e371adff845072e1c73f37/1/0/102094_roku_japanese-craft-gin_700.jpg');"

bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Coucou', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 1);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Paquito Fiesta', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 2);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Mojiji', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 3);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Petit Guy', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 4);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Wolo', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 1);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Super Green', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 2);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Toto', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 3);"
bin/console doctrine:query:sql "INSERT INTO cocktail (name, description, ingredients, receipe, image, created_at, category_id) VALUE ('Blago', 'desc', 'ingredients', 'receipe', 'https://assets.afcdn.com/recipe/20190320/89690_w1024h768c1cx696cy2740cxt0cyt0cxb2330cyb3500.jpg', '2038-01-19 03:14:07', 4);"

bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (4, 1);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (3, 1);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (4, 2);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (1, 3);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (1, 3);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (2, 4);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (1, 5);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (5, 5);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (5, 6);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (3, 6);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (4, 7);"
bin/console doctrine:query:sql "INSERT INTO rate (rate, cocktail_id) VALUE (3, 8);"

bin/console doctrine:query:sql "INSERT INTO comment (name, comment, created_at, cocktail_id) VALUE ('Albert', 'Super', '2028-01-19 03:14:07', 1);"
bin/console doctrine:query:sql "INSERT INTO comment (name, comment, created_at, cocktail_id) VALUE ('Robert', 'Pas top top, manque l\'alcool', '2038-01-19 03:14:07', 1);"
bin/console doctrine:query:sql "INSERT INTO comment (name, comment, created_at, cocktail_id) VALUE ('Michel', 'Trop cool', '2018-01-19 03:14:07', 2);"
bin/console doctrine:query:sql "INSERT INTO comment (name, comment, created_at, cocktail_id) VALUE ('Roberto', 'Incroyable', '2058-01-19 03:14:07', 3);"
