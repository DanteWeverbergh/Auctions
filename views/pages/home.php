<header>
    <div class="container">
        <nav>
            <div class="brand">Top Veilingen</div>
            <a href='/' class="active">
                <i class="fal fa-home"></i>
                <span>Home</span>
            </a>

        <?php

            foreach($categories as $category) {
                include BASE_DIR . '/views/_partials/header_link.php';
            }
        ?>

            
        </nav>
    </div>
</header>




<div class="container">
    <div class="auctions">
       <?php

            foreach ($auctions as $auction) {
                include BASE_DIR . '/views/_partials/home_item.php';
            }
        ?>
    </div>

</div>