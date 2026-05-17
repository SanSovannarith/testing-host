
<?php include 'include/cn.php'; 
if(isset($_REQUEST['brandID'])) $bID = $_REQUEST['brandID'];
else $bID=0;
// echo $bID;

// if(isset($_POST['txtSearch'])){
//     echo $txtSearch = $_POST['txtSearch'];
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $brandName; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php echo include 'include/header.php' ?>

    <!-- Shop Hero Section -->
    <section class="page-hero">
        <div class="container">
            <h1>Our Shop</h1>
            <p>Discover amazing deals on the latest electronics and gadgets</p>
        </div>
    </section>

    <!-- Featured Products Section -->
    <section class="featured-products">
        <div class="container">
            <div class="section-header">
                <h2>All Products</h2>
                <div class="filter-options">
                    <select class="filter-select">
                        <option>Sort by: Latest</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Most Popular</option>
                    </select>
                </div>
            </div>
            <div class="products-grid">
                <!-- Product 1 -->
                 <?php
                if($bID==0){
                    $sqlProduct = "SELECT * FROM `tbl_product`  ORDER BY ID DESC LIMIT 12";

                }
                else{
                    $sqlProduct = "SELECT * FROM `tbl_product` WHERE `brand`=$bID";
                }
                $sqlProduct = "SELECT * FROM `tbl_product` WHERE `brand`=$bID";
                $qrProduct = $myCon->query($sqlProduct);
                if($qrProduct->num_rows>0){
                while($rowProduct=$qrProduct->fetch_assoc()){
                    echo'
                        <div class="product-card">
                            <div class="product-badge">Sale! 10%</div>
                            <div class="product-image">
                                <img src="images/product/'.$rowProduct['image'].'" alt="PlayStation 5">
                                <div class="product-overlay">
                                    <button class="btn btn-add-cart"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                                    <div class="quick-actions">
                                        <button class="icon-btn"><i class="fas fa-heart"></i></button>
                                        <button class="icon-btn"><i class="fas fa-eye"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="product-info">
                                <span class="product-category">Gaming</span>
                                <h3 class="product-name">'.$rowProduct['name'].'</h3>
                                <div class="product-rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <div class="product-price">
                                    <span class="old-price"></span>
                                    <span class="new-price">'.$rowProduct['price'].'</span>
                                </div>
                            </div>
                        </div>
                    ';
                }}
                else{
                    echo 'No Data';
                }
                ?>
                
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-main">
                <div class="footer-col">
                    <div class="footer-logo">
                        <i class="fas fa-mobile-alt"></i>
                        <span>S.CHEAT Store</span>
                    </div>
                    <p class="footer-address">
                        <i class="fas fa-map-marker-alt"></i>
                        123 Street, Russei Keo<br>
                        Cambodia
                    </p>
                    <p class="footer-phone">
                        <i class="fas fa-phone"></i>
                        +855 (16) 367-859
                    </p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-col">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Career</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Support</h4>
                    <ul>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Track Order</a></li>
                        <li><a href="#">Returns</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                        <li><a href="#">Shipping Info</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#">Payment Methods</a></li>
                        <li><a href="#">Money-back Guarantee</a></li>
                        <li><a href="#">Product Returns</a></li>
                        <li><a href="#">Support Center</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 S.CHEAT Store. All rights reserved.</p>
                <div class="payment-methods">
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-apple-pay"></i>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>