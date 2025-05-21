<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($pageTitle) ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-image: url('https://st4.depositphotos.com/1316534/23232/i/450/depositphotos_232322154-stock-photo-lady-justice-themis-statue-justice.jpg');
            background-size: cover;
            background-position: center;
            color: #fff;
        }
        .content {
            background: rgba(0, 0, 0, 0.7);
            padding: 20px;
            margin-top: 10px;
            border-radius: 10px;
            padding: 7.5rem 0;
        }
       
        .title {
            font-size: 2.5em;
            margin-bottom: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
            <!-- <?php print_r($right) ?> -->
            <h1 class="title"><?= esc($right['RIGHT_TITLE']) ?></h1>
            <p style="font-size:20px"><?php echo $right['RIGHT_DESCRIPTION'] ?></p>
            <h2>Related Article</h2>
            <?php if (!empty($relatedArticles)) : ?>
                        <?php foreach ($relatedArticles as $article) : ?>
                            
                            <a style="font-size:19px" href="<?= site_url('/article/' . $right['ARTICLE_ID']) ?>">
                                <?= esc($right['ARTICLE_TITLE']) ?></a><br>
                                <p style="font-size:19px"><?php echo $right['ARTICLE_CONTENT'] ?></p>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li>No related articles found.</li>
                    <?php endif; ?>
            <!-- <h4><?php echo $right['ARTICLE_TITLE'] ?></h4>
            <p><?php echo $right['ARTICLE_CONTENT'] ?></p> -->
        </div>
    </div>
</body>
</html>
