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

        // Tambahkan parameter $name ke constructor
        public function __construct($name)
        {
            // Tetapkan $name ke property name
            $this->name = $name;
        }

        public function hello()
        {
            echo 'Saya adalah ' . $this->name;
        }
    }

    // Berikan 'GULAI' ke new Menu() sebagai argument
    $curry = new Menu('GULAI');
    // Berikan 'PASTA' ke new Menu() sebagai argument
    $pasta = new Menu('PASTA');
    // Hapus satu baris dibawah
    // Hapus satu baris dibawah
    echo '<br>';


    ?>
</body>

</html>