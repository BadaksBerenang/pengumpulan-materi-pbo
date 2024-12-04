<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Objek</title>
</head>
<body>
    <h1> Tugas Class Objek</h1>
    <?php
    class Post {
       public $id;
       public $title;
       public $user_id;
       public $description;
    };
    $user = new Post ();
    $user1 = new Post ();

     $userId = $user->id = 3;
     $title = $user->title = "jago";
     $user_id = $user->user_id = "21212133";
     $description = $user->description = "karena suka makan nasi";

     $userId1 = $user1->id = 1;
     $title1 = $user1->title = "veteran";
     $user_id1 = $user1->user_id = "37846321";
     $description1 = $user1->description = "karena suka berperang";
    ?>

<h2>Data user</h2>
<p>id : <?php echo $userId  ?></p>
<p>title : <?php echo $title ?></p>
<p>userid : <?php echo $user_id  ?></p>
<p>description : <?php echo $description  ?></p>
<hr>
<p>id : <?php echo $userId1  ?></p>
<p>title : <?php echo $title1 ?></p>
<p>userid : <?php echo $user_id1  ?></p>
<p>description : <?php echo $description1  ?></p>
</body>
</html>