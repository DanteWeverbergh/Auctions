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
      <div class="auction">
        <div class="details">
          <img src="/images/<?= $auction->image; ?>" />
          <div class="text">
            <h1><?= $auction->title; ?></h1>
            <p></p>
          </div>
        </div>
        <div class="bid">
          <div
            class="countdown"
            id="countdown"
            data-date="<?= date('D d Y h:i:s', strtotime($auction->deadline)) ?>"
          >
          
            00:00:00
          </div>

          <form method="POST" action='/veiling/auction/<?= $auction->auction_id; ?>' id="bidform" >
            <h2>Plaats een hoger bod</h2>
            <div class="form-item">
              <label>Naam</label>
              <input type="text" name="name" />
            </div>
            <div class="form-item">
              <label>E-mail</label>
              <input type="email" name="email" />
            </div>
            <div class="form-item">
              <label>Uw bod</label>
              <input type="number" name="price" />
            </div>
            <input type="hidden" name="auction_id" value="1" />
            <button type="submit" name="place_bid">Plaats bod</button>
          </form>
        </div>
      </div>

      <h2>Biedingen</h2>
      <div class="list">
        <div class="list-item-header">
          <span>Naam</span>
          <span>Bod</span>
        </div>

        <?php
            foreach($bids as $bid) {
                include BASE_DIR . '/views/_partials/bid_list_item.php';
            }
        ?>
        
        
        
      </div>
    </div>