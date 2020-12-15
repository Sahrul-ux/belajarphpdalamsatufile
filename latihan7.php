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

        public function __construct($name)
        {
            $this->name = $name;
        }

        public function hello()
        {
            echo 'Saya adalah ' . $this->name;
        }
    }

    $curry = new Menu('GULAI');
    $pasta = new Menu('PASTA');

    ?>

    <!-- Cetak property name milik $curry didalam tag <p> -->
    <p><?php echo $curry->name; ?></p>

    <!-- Cetak property name milik $pasta didalam tag <p> -->
    <p><?php echo $pasta->name; ?></p>

    <p></p>

</body>

</html>