<header>
    <div class="container">
        <nav>
            <div class="brand">Top Veilingen</div>
            <a href='/' class="">
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


                foreach($auctions as $auction) {
                    include BASE_DIR . '/views/_partials/detail_item.php';
                }
    ?>
          
    </div>
    <div class="previous">
        <h2>Vorige veiligen</h2>
        <div class="list">
            <div class="list-item-header">
                <span>Veiling</span>
                <span>Bod</span>
            </div>
            <?php


                foreach($auctions as $auction) {
                    include BASE_DIR . '/views/_partials/detail_verlopen_item.php';
                }
    ?>
                

        </div>
    </div>

</div>



