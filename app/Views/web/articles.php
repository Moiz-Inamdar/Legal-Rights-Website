<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Assistant for Legal Awareness</title>
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
            min-height: 100vh;
            background-image: url('https://t3.ftcdn.net/jpg/04/85/39/76/360_F_485397626_ydPEYshMKRIyY7HIH2jUCLu8nkC7X2KH.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            color: #fff;
        }
     
        .title {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: bold;
            color: whitesmoke;
            margin-top: -40px;
        }
        .btn-custom {
            height: 100px;
            width: 170px;
            margin: 10px;
            background-color: #36C2CE;
            border: none;
            color: #fff;
            transition: background-color 0.3s ease;
        }
        .btn-custom:hover {
            background-color: #478CCF;
        }
        a{
            color:white
        }
        
    </style>
</head>
<body>
    
    <div class="container">
        <div class="title">ARTICLES</div>
        <div class="row justify-content-start">
            <?php if (!empty($list)) {
                foreach ($list as $article) { ?>
                    <div class="col-md-2 m-3 text-start">
                        <button class="btn btn-custom btn-block">
                        <a href="article/<?php echo $article['ARTICLE_ID']; ?>">
                            <?php echo $article['ARTICLE_TITLE'] ?></a>
                        </button>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</body>
</html>





