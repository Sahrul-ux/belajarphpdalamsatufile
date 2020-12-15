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

        public function hello()
        {
            // Cetak "Saya adalah ____"
            echo 'Saya adalah ' . $this->name;
        }
    }

    $curry = new Menu();
    $pasta = new Menu();
    $curry->name = 'GULAI';
    $pasta->name = 'PASTA';
    $curry->hello();
    echo '<br>';
    $pasta->hello();

    ?>
</body>

</html>