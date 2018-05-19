<?php 
    $user = $_GET["user"];
    require_once("components/userdata.php");
    $userName = getUserName($user);
    $products = getUserProducts($user, "home");
    $total = count($products);
    $part1Offset = $total / 2; //first index of the second part of small products

    /** names an prices for the first product sections */
    $bigProducts = array(
        array(
            "name" => "Headphones",
            "price" => "423 kr."
        ),
        array(
            "name" => "Mac Computer",
            "price" => "321 kr."
        ),
        array(
            "name" => "Headphones",
            "price" => "321 kr."
        ),
        array(
            "name" => "Mac Computer",
            "price" => "862 kr."
        ),
        array(
            "name" => "Smartwatch",
            "price" => "125 kr."
        ),
    );
?>
<!DOCTYPE html>
<html lang="en">    
  <?php include "components/head.php" ?>
    <body>
        <?php include "components/nav.php" ?>
        <div class="pills-container p-3 d-none d-sm-none d-md-block">
            <span class="badge badge-pill badge-secondary">Kategori</span>
            <span class="badge badge-pill badge-secondary">Pris</span>
            <span class="badge badge-pill badge-secondary">Mærke</span>
            <span class="badge badge-pill badge-secondary">Hvor er varen</span>
            <span class="badge badge-pill badge-secondary d-md-none d-lg-inline-block">Modelår</span>
            <span class="badge badge-pill badge-secondary">Flere Filter</span>
        </div>
        <?php if(count($products) > 0): ?>
            <div class="container-fluid py-3 px-6">
                <h3 class="color-xs-blue"><strong>Velkommen tilbage, <?php echo $userName ?></strong></h3>        
                <div class="banner <?php echo $user . "-banner"?> d-none d-md-inline-block">
                    <img class="img-fluid" src="<?php echo $user == "annesofie"? "img/banner-annesofie1.jpg" : "img/banner-kristian.jpg"?>">                
                </div>
                <h4 class="pt-3 pb-2 font-weight-bold">Bliv Inspireret</h4>
                <div class="scrollable horizontal dragscroll">
                    <?php for($i=0; $i<5; $i++): ?>
                    <?php $imgSrc = sprintf('img/home/%s/big/%s.png', $user, $i+1); ?>
                        <div class="scrollable-card big-card blue">
                            <img class="img-fluid" src="<?php echo $imgSrc?>" alt="product">
                            <div class="card-bottom p-1 p-sm-2">
                                <span class="price bold"><?php echo $bigProducts[$i]["price"] ?></span><br>
                                <span class="title bold"><?php echo $bigProducts[$i]["name"] ?></span>
                            </div>
                        </div>
                    <?php endfor; ?>        
                </div>
            </div>
            <div class="container-fluid py-1 px-6">
                <h4 class="pt-3 pb-2 font-weight-bold">Nyt fra sælger du følger</h4>            
                <div class="scrollable horizontal dragscroll">                                                               
                    <?php for($i=0; $i< $part1Offset; $i++): ?>
                        <?php $product = $products[$i]; ?>
                        <?php if($product["type"] == "ad"): ?>
                            <div class="scrollable-card small-card">
                                <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                    <span class="price ad"><?php echo $product["price"]?></span><br>
                                    <span class="title ad"><?php echo $product["name"]?></span>
                                </div>
                                <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                            </div> 
                        <?php else: ?>
                        <div class="scrollable-card small-card <?php echo $product["type"]?>">
                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                            <div class="card-bottom p-1 p-sm-2">
                                <span class="price bold"><?php echo $product["price"]?></span><br>
                                <span class="title bold"><?php echo $product["name"]?></span>
                            </div>
                        </div>
                        <?php endif; ?>                                                                                          
                    <?php endfor; ?>                      
                </div>            
            </div>
            <div class="container-fluid py-1 px-6">
                <h4 class="pt-3 pb-2 font-weight-bold">Kun til dig</h4>            
                <div class="scrollable horizontal dragscroll">                                                              
                    <?php for($i; $i< $total; $i++): ?>
                        <?php $product = $products[$i]; ?>
                        <?php if($product["type"] == "ad"): ?>
                            <div class="scrollable-card small-card">
                                <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                    <span class="price ad"><?php echo $product["price"]?></span><br>
                                    <span class="title ad"><?php echo $product["name"]?></span>
                                </div>
                                <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                            </div> 
                        <?php else: ?>
                        <div class="scrollable-card small-card <?php echo $product["type"]?>">
                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                            <div class="card-bottom p-1 p-sm-2">
                                <span class="price bold"><?php echo $product["price"]?></span><br>
                                <span class="title bold"><?php echo $product["name"]?></span>
                            </div>
                        </div>
                        <?php endif; ?>                                                 
                    <?php endfor; ?>                      
                </div>            
            </div>
        <?php endif; ?>
        <?php include "components/footer.php" ?>                 
        <?php include "components/scripts.php" ?>
    </body>
</html>