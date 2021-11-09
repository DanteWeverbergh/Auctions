<?php

require_once 'models/AuctionModel.php';
require_once 'models/BidModel.php';
require_once 'models/CategoryModel.php';
require_once 'models/UserModel.php';

class VeilingController {


    function index() {

        $current_date = date('Y-m-d H:i:s');


        $categories = Category::getAllCategories();
        $auctions = Auction::getAllAuctions();
        include BASE_DIR . '/views/pages/home.php';
    }

    

    function detail() {

        $current_date = date('Y-m-d H:i:s');
       
        $request  = $_SERVER['REQUEST_URI'];
        $path = explode('/', $request);
        $slug = $path[3];

        
        $categories = Category::getAllCategories();
        $category = Category::getCategoryBySlug($slug);
        

        $auctions = Auction::getAuctionByCategory($category->category_id);

        
        
        include BASE_DIR . '/views/pages/detail.php';

           
    }

    function auction( $auction_id) {
        
        $categories = Category::getAllCategories();

        $auction = Auction::getAuctionById($auction_id);

        $bids = Bid::getBidsByAuctionId($auction_id);


        $highest_bid = Bid::getHighestBidder($auction_id);

        

        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['price'])) {
            
            

            $data = [];
            $data['name'] = $_POST['name'];
            $data['email'] = $_POST['email'];
            if($highest_bid < $_POST['price']){
                 $data['price'] = $_POST['price'];

                 $bid_id = Bid::placeBid($data, $auction_id);

                 if($bid_id) {
                     header('Refresh:0');
                 }
            } else {
                echo '<h1>Uw bod is niet het hoogste bod, probeer opnieuw met een hoger bod.</h1>';
            }
        } 

    
        include BASE_DIR . '/views/pages/auction.php';
    }
}