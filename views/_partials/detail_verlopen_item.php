
<?php

    $auction_date = $auction['deadline'];

    ?>

<?php if($current_date > $auction_date) : ?>
    <div class="list-item">
    <span><a href="/veiling/auction/<?= $auction['auction_id']; ?>" ?> <?= $auction['title'];?></a></span>
    <span>€ hoogste bod,-</span>
</div>

<?php endif ?>