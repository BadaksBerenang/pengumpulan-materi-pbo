<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Static Propherties</title>
</head>

<body>
    <?php
    class Ortu
    {

        public static $judul = "Hai,saya KumahaBarudak~ " . __CLASS__;
        public function display()
        {
            echo $this->judul;
        }
    }

    class Anak extends Ortu
    {
        public static $judul = "Hai,saya KumahaBarudak~ " . __CLASS__;
    }           
    ?>
    <h1> Testing, <?php echo Ortu::$judul?> </h1>
    <p> Testing, <?php echo Anak::$judul?> </p>
</body>

</html>