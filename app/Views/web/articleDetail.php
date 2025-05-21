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
            padding: 30px;
            border-radius: 10px;
    padding: 8.6rem 0;

        }
        .title {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
        }
    </style>
    </script>

</head>
<body>
    
<div class="container">
        <div class="content">
            <h1 class="title"><?= esc($article['ARTICLE_TITLE']) ?></h1>
            <p style="font-size:35px"><?= esc($article['ARTICLE_CONTENT']) ?></p>
            <div class="related-rights">
                <h2>Related Rights</h2>
                <ul>
                    <?php if (!empty($relatedRights)) : ?>
                        <?php foreach ($relatedRights as $right) : ?>
                            
                            <a href="<?= site_url('/right/' . $right['RIGHT_ID']) ?>">
                                <?= esc($right['RIGHT_TITLE']) ?></a><br>
                            
                        <?php endforeach; ?>
                    <?php else : ?>
                        <li>No related rights found.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
