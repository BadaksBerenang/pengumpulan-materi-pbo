<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class objek</title>
</head>
<body>
    <h1> Belajar clash objek </h1>
<?php
    // pengertian class -> blue print atau cetakan
     class user
     
     {
        // deklarasi properti global
       public $id;
       public $user_name;
       public $email;
     } 

     // melakukan instansiasi/inisialisasi
     // melakukan tranform dari sebuah class ke sebuah objek
     $user = new user();

     var_dump($user);

     // melakukan pemberian nilai 
     $userId = $user->id = 3;
     $username = $user->user_name = "ayam";
     $useremail = $user->email = "tewsting@gmail.com";
    // buat dua objek tampilan
    
    /* tugas 1 
    buat 1 class dengan nama class Post
    yang memiliki 4 properti global (id, title, user_id, description)
    buat dua objek yang berdasarkan class yang telah dibuat 
    berikan nilai pada setiap properti yang dimiliki 
    dan tampilkan semua data dalam bentuk html */
     $userId1 = $user->id = 3;
     $username1 = $user->user_name = "Cocote";
     $useremail1 = $user->email = "tomewew@gmail.com";

?>
<h2>Data user</h2>
<p>id : <?php echo $userId  ?></p>
<p>user_name : <?php echo $username ?></p>
<p>email : <?php echo $useremail  ?></p>
<hr>
<p>id : <?php echo $userId1  ?></p>
<p>user_name : <?php echo $username1 ?></p>
<p>email : <?php echo $useremail1  ?></p>
</body>
</html>