<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoran</title>
</head>

<body>
    <?php
    class Menu
    {
        public $name;

        // Definisikan constructor
        public function __construct()
        {
            echo 'Sebuah instance telah diciptakan.';
        }

        public function hello()
        {
            echo 'Saya adalah ' . $this->name;
        }
    }

    $curry = new Menu();
    echo '<br>';
    $pasta = new Menu();
    echo '<br>';
    $curry->name = 'GULAI';
    $pasta->name = 'PASTA';
    $curry->hello();
    echo '<br>';
    $pasta->hello();

    ?>
</body>

</html>