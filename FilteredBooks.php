 <?php
    include './php/function.php';
    ?>
 <!DOCTYPE html>
 <html>

 <head>
     <title>Filtered books</title>
     <link rel="stylesheet" href="css/wishList.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">
     <script src="functions.js"></script>
 </head>

 <body>
     <div class="header">
         <div class="start">logo</div>
         <div class="middle">
             <img class="find" src="img/icons8-search-48.png" width="18" height="18">
             <input class="enterSpace" type="text" placeholder="Search for name or author...">
         </div>
         <div class="end">
             <div class="ava_menu">
                 <div>
                     <img class="ava" src="img/81nq+ewtkcL._AC_UF1000,1000_QL80_.jpg">
                 </div>
                 <div class="account_name">
                     Account name
                 </div>
                 <img class="drop_down_menu" src="img/icons8-expand-arrow-64.png" width="25px" height="25px">
             </div>
         </div>
     </div>
     <div class="container">
         <div class="menu">
             <button class="home" onclick="goToHome()">
                 <img src="img\icons8-home-96.png" width="30" height="30">
                 Home
             </button>
             <button class="bookshelf" onclick="goToBookshelf()">
                 <img src="img/icons8-bookshelf-96.png" width="30" height="30">
                 Bookshelf
             </button>
             <button class="wishlist" onclick="goToWishlist()">
                 <img src="img/icons8-bookmark-96.png" width="30" height="30">
                 Wishlist
             </button>
             <div>
                 <button class="log_out_button" onclick="logOut()">
                     <img src="img/icons8-log-out-96.png" width="30" height="30">
                     Logout
                 </button>
             </div>
         </div>
         <div class="main_board">
             <div class="white_container">
                 <div class="white_container2">
                 </div>
                 <?php
                    // Gọi hàm search_books($keyword) và hiển thị kết quả

                    if (isset($_GET['search'])) {
                        $searchKeyword = $_GET['search'];
                        $result = search_books($searchKeyword);

                        // Hiển thị kết quả
                        while ($row = $result->fetch_assoc()) {
                            echo "<div class='book'>";
                            echo "<img class='book_cover' src='" . $row['image'] . "' width='120px' height='160px'>";
                            echo "<div class='name'>" . $row['title'] . "</div>";
                            echo "<div class='author'>" . $row['id'] . "</div>";
                            echo "</div>";
                        }
                    }
                    echo $_GET['search'];
                    ?>


             </div>

         </div>

         <!-- <?php
            if (isset($_GET['search'])) {
                $searchTerm = $_GET['search'];
                echo "<p>Kết quả tìm kiếm cho: " . htmlspecialchars($searchTerm) . "</p>";
                // Thực hiện xử lý tìm kiếm và hiển thị kết quả ở đây
            }
            ?> -->
     </div>

     </div>
 </body>

 </html>