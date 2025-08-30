<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charest="UTF-8">
    <title>PHP16章課題</title>
</head>

<body>
    <p>
        <?php
        // クラスを定義する
        class Food{
            // プロパティを定義する
            private $name;
            private $price;

            // メソッドを定義する
                public function show_price(int $price){
                $this->price = $price;
                echo $this->price . '<br>';

                }

            // コンストラクタを定義する
            public function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
        }

        // インスタンス化する
        $Food = new Food('potato',250);

        // インスタンス$Foodの各プロパティの値を出力する
        print_r($Food);
        print_r('<br>');

        // クラスを定義する
        class Animal{
            private $name;
            private $height;
            private $weight;

            // メソッドを定義する
                public function show_height(int $height){
                    $this->height = $height;
                    echo $this->height . '<br>';

                }

            // コンストラクタを定義する
                public function __construct(string $name, int $height, int $weight){
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
            }
        }

        //インスタンス化する
        $Animal = new Animal('dog', 60, 5000);

        //インスタンス$Animalの各プロパティの値を出力する
        print_r($Animal);
        print_r('<br>');


        // メソッドにアクセスして実行する
        $Food->show_price(250);
        $Animal->show_height(60);

        ?>
        </p>
    </body>

    </html>