<!doctype html>
<html>
<head>
    <title><?php the_title(); ?></title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<?php wp_head() ?>

<body>
    <div>
        <h1><?php bloginfo("name"); ?> </h1>
        <h3><?php bloginfo("description"); ?></h3>
        <p>
            This domain is established to be used for illustrative examples in documents.
            You may use this domain in examples without prior coordination or asking for permission.
        </p>
        <hr>
        <!-- the loop -->
        <?php while (have_posts()){
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
        <?php } ?>
        <hr>

    </div>
<?php wp_footer(); ?>
</body>
</html>