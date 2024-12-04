<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    class OrangTua
{
    public $judul;

    public function __construct()
{
    $this ->judul = 'ini class-'.__CLASS__;

}

public function display()
{
return $this->judul;
}
}
?>
<h1> <?php echo (new OrangTua)->display() ?> </h1>
</body>
</html>