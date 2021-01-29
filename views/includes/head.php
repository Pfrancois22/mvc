

<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Meta Tags -->
    <meta charset="UTF-8" />
    <meta name="viewport"       content="width=device-width, initial-scale=1.0" />
    <meta name="author"         content="<?WEBSITE_AUTHOR?>" />
    <meta name="description"    content="<?WEBSITE_DESCRIPTION?>" />
    <meta name="keywords"       content="<?WEBSITE_KEYWORDS?>" />
    <meta name="reply-to"       content="<?WEBSITE_AUTHOR_MAIL?>" />
    <meta name="copyright"      content="<?WEBSITE_AUTHOR?>" />
    <meta name="language"       content="<?WEBSITE_LANGUAGE?>" />


    <!-- Open Graph tags -->
    <meta property="og:type"                content="websie" />
    <meta property="og:url"                 content="<?= WEBSITE_FACEBOOK_URL ?>" />
    <meta property="og:title"               content="<?= WEBSITE_FACEBOOK_NAME ?>" />
    <meta property="og:description"         content="<?= WEBSITE_FACEBOOK_DESCRIPTION ?>" />
    <meta property="og:image"               content="<?= WEBSITE_FACEBOOK_IMAGE ?>" />


    <!-- css  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">

    <title><?= ucfirst($page) ?> - Mon MVC</title>
</head>
<body>
    <div class="container">

    <?php include_once './views/includes/header.php'?>
    <?php include_once './views/includes/nav.php'?>
