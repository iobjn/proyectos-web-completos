<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $data['tag_page'];?></title>


</head>
<body>

<section id="<?php echo $data['page_id']; ?>">

    <h1><?php echo $data['page_title']; ?></h1>

    <p><?php echo $data['page_content'] ?></p>


<?php  print_r($data) ?>
</section>
</body>
</html>