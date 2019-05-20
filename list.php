<?php

require 'lib/functions.php';

$posts = get_posts(100);

?>

<div class="container">
        <div class="row">
            <?php foreach ($posts as $post) { ?>
                <div class="col-lg-4 pet-list-item">
                    <h2>
                        <a href="/list.php?id=<?php echo $post['id'] ?>">
                            <?php echo $post['name']; ?>
                        </a>
                    </h2>
                    <p>
                        <?php echo $post['email']; ?>
                    </p>
                    <p>
                        <?php echo $post['message']; ?>
                    </p>
                </div>
            <?php } ?>
        </div>
</div>