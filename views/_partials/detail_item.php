<?php

    $auction_date = $auction['deadline'];

    ?>

<?php if($current_date < $auction_date) : ?>
<div class="auction">
    <a href="/veiling/auction/<?= $auction['auction_id']; ?>" class="details">
        <img src="/images/<?= $auction['image']; ?>">
        <div class="text">
            <h1><?= $auction['title']; ?></h1>
        </div>
    </a>
</div>

<?php endif ?>