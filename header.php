<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo wp_get_document_title(); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css" media="screen" />
    <?php wp_head() ?>
</head>
<body <?php body_class()?>>
<?php wp_body_open()?>
    <header>
        Header
    </header>
    <nav>
        Nav
    </nav>