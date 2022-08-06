<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="Hello World"?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
          <div class="container">
            <a class="navbar-brand" href="index.php">PHP & Bootstrap 5</a>
            <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Main Menu (PHP) </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="00-template.php">Template</a>
                    </li>
                </ul>
            </div>
      </div>
      
    </nav>    
    <main class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <?php echo "<h1 class='text-center my-5'>Hello World</h1>"; ?>
                <hr>
                <?php
                    print('<p class="text-start text-muted lh-lg">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit obcaecati earum, eum debitis odio, tenetur laudantium cupiditate ratione reprehenderit incidunt similique ipsum sunt? Quis suscipit eligendi adipisci sunt impedit illum.
                    Impedit libero corrupti sit rem molestias, fugiat veniam vero, vel tempora reprehenderit magni dignissimos voluptatem fugit, esse similique. Deserunt odio eos rerum sunt provident nesciunt dolor quas, nihil magnam dignissimos.
                    Omnis illum doloribus nulla nemo impedit tenetur. Officia, ratione voluptates. Blanditiis voluptas error pariatur. Accusantium ullam maiores reprehenderit? Eveniet velit quasi molestiae facilis accusamus tenetur nostrum minus iure! Ipsa, laborum.
                    Tempore maiores dolorum, magnam unde, qui earum illum impedit hic sunt aut debitis eligendi cumque incidunt enim quaerat? Illo necessitatibus dolor molestiae vitae a sint fugiat libero nulla praesentium dicta!
                    Quod nesciunt natus tempore, perferendis eaque quibusdam error magni, soluta asperiores est architecto in, quae magnam perspiciatis assumenda? Deleniti delectus rerum voluptatibus placeat in nemo minima quas distinctio magni dignissimos.</p>')
                ?>
            </div>
        </div>
    </main>

    <script src="Js/bootstrap.min.js"></script>
</body>
</html>