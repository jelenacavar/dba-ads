<?php 
    $user = $_GET["user"];
    require_once("components/userdata.php");
    $userName = getUserName($user);
    $products = getUserProducts($user, "srp");
?>
<!DOCTYPE html>
<html lang="en">    
  <?php include "components/head.php" ?>
    <body>
        <?php include "components/nav.php" ?>
        <div class="pills-container p-3 d-none d-sm-none d-md-block">
            <span class="badge badge-pill badge-secondary">Kategori</span>
            <span class="badge badge-pill badge-secondary" style="background-color: #98b4e3 !important; color: #fff !important;">100-300 kr.</span>
            <span class="badge badge-pill badge-secondary">Mærke</span>
            <span class="badge badge-pill badge-secondary">Hvor er varen</span>
            <span class="badge badge-pill badge-secondary">Modelår</span>
            <span class="badge badge-pill badge-secondary">Flere Filter</span>
        </div>
        <main class="container py-3">
            <?php if(count($products) > 0): ?>

                <!-- START: row row of 4 -->            
                <div class="row srp pt-3">
                    <?php for($i=0; $i< 4; $i++): ?>
                        <?php $product = $products[$i]; ?>
                        <div class="product col-6 col-md-3 <?php echo $i > 1? "pt-3 pt-md-0" : ""?>">
                            <?php if($product["type"] == "ad"): ?>
                                <div class="scrollable-card m-0">
                                    <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                        <span class="price ad"><?php echo $product["price"]?></span><br>
                                        <span class="title ad"><?php echo $product["name"]?></span>
                                    </div>
                                    <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                </div> 
                            <?php else: ?>
                            <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                <div class="card-bottom p-1 p-sm-2">
                                    <span class="title bold"><?php echo $product["name"]?></span>
                                    <br>
                                    <span class="price bold"><?php echo $product["price"]?></span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>                                                                                                               
                    <?php endfor; ?>                    
                </div>
                <!-- END: row of 4 -->
                
                <!-- START: mobile ad1 -->
                <div class="row srp pt-3 d-block d-md-none">
                    <div class="col">
                        <div class="adwrapper" id="<?php echo $user ?>-first-modal" data-toggle="modal" data-target="#admobile1">                        
                            <img class="img-fluid" src="img/srp/<?php echo $user ?>/ads/admobile1.png" alt="ad mobile"/>
                            <div class="text <?php echo $user ?>-first">
                                <?php if($user == "annesofie"): ?>
                                    <div class="text-light">
                                        <span class="ad">Sponsored</span><br>
                                        <span class="bold">Supercool Fashion Shop</span><br>
                                        <span>Yellow is the trendy color of the summer</span>
                                    </div>
                                <?php else: ?>
                                    <div class="text-light">
                                        <span class="ad">Sponsored</span><br>
                                        <span class="bold">Supercool Electronic Shop</span><br>
                                        <span>Viewing the world through the scren of your smartphone</span>
                                    </div>
                                <?php endif; ?>
                                
                            </div>                                                                                    
                        </div>                        
                    </div>
                </div>
                <!-- END: mobile ad1 -->

                <!-- Modal admobile1 -->
                <div class="custom-modal modal fade" id="admobile1" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content <?php echo $user ?>-first">
                            <div class="modal-header">                                    
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="pointer-events: none;">
                                <?php if($user == "annesofie"): ?>
                                    <video id="annesofie-video1" autoplay loop src="video/annesofie/first.mp4" style="margin-top: -1px; width: 100%;"></video>
                                    <br>
                                    <p class="text-light p-2">The history of yellow is controversial. Hated, loved, mistreated, it was among the colors of the latest fashion shows.The color yellow is, in nature, a sign of danger. This summer is coming back to the fashion trends.</p>
                                    <video id="annesofie-video2" autoplay loop src="video/annesofie/second.mp4" style="margin-top: -1px; width: 100%;"></video>
                                <?php else: ?>  
                                    <video id="kristian-video1" autoplay loop src="video/kristian/first.mp4" style="margin-top: -1px; width: 100%;"></video>
                                    <br>
                                    <p class="text-light p-2">It’s on the table. At the restaurant where you’re having lunch with an old friend. You haven’t seen each other in years. So good to catch up, really missed them. Leave the phone and enjoy real face to face communication.</p>
                                    <video id="kristian-video2" autoplay loop src="video/kristian/second.mp4" style="margin-top: -1px; width: 100%;"></video>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Modal admobile1 -->

                <!-- START: row with ad_2x2 -->
                <div class="row srp pt-3">
                    <div class="col-12 col-md-6 d-none d-md-block"><div class="ad_2x2" style="background-image: url(img/srp/<?php echo $user ?>/ads/2x2.jpg);"></div></div>
                    <div class="col-12 col-md-6">
                        <div class="row">
                            <?php for($i=4; $i<6 ; $i++): ?>
                                <?php $product = $products[$i]; ?>
                                <div class="product col-6">
                                    <?php if($product["type"] == "ad"): ?>
                                        <div class="scrollable-card m-0">
                                            <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                                <span class="price ad"><?php echo $product["price"]?></span><br>
                                                <span class="title ad"><?php echo $product["name"]?></span>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        </div> 
                                    <?php else: ?>
                                    <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                        <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        <div class="card-bottom p-1 p-sm-2">
                                            <span class="title bold"><?php echo $product["name"]?></span>
                                            <br>
                                            <span class="price bold"><?php echo $product["price"]?></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>                                                                                       
                            <?php endfor; ?>
                        </div>
                        <div class="row">
                            <?php for($i=6; $i<8 ; $i++): ?>
                                <?php $product = $products[$i]; ?>
                                <div class="product col-6 pt-3">
                                    <?php if($product["type"] == "ad"): ?>
                                        <div class="scrollable-card m-0">
                                            <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                                <span class="price ad"><?php echo $product["price"]?></span><br>
                                                <span class="title ad"><?php echo $product["name"]?></span>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        </div> 
                                    <?php else: ?>
                                    <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                        <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        <div class="card-bottom p-1 p-sm-2">
                                            <span class="title bold"><?php echo $product["name"]?></span>
                                            <br>
                                            <span class="price bold"><?php echo $product["price"]?></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>                                                                                       
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
                <!-- END: row with ad_2x2 -->

                <!-- START: row row of 4 -->            
                <div class="row srp pt-3">
                    <?php for($i=8; $i< 12; $i++): ?>
                        <?php $product = $products[$i]; ?>
                        <div class="product col-6 col-md-3 <?php echo $i > 9? "pt-3 pt-md-0" : ""?>">
                            <?php if($product["type"] == "ad"): ?>
                                <div class="scrollable-card m-0">
                                    <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                        <span class="price ad"><?php echo $product["price"]?></span><br>
                                        <span class="title ad"><?php echo $product["name"]?></span>
                                    </div>
                                    <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                </div> 
                            <?php else: ?>
                            <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                <div class="card-bottom p-1 p-sm-2">
                                    <span class="title bold"><?php echo $product["name"]?></span>
                                    <br>
                                    <span class="price bold"><?php echo $product["price"]?></span>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>                                                                                       
                    <?php endfor; ?> 
                </div>
                <!-- END: row of 4 -->

                <!-- START: row row of 3x1 -->
                <div class="row srp pt-3">
                    <div class="col-12 col-md-9">
                        <div class="row">
                            <?php for($i=12; $i< 15; $i++): ?>
                                <?php $product = $products[$i]; ?>
                                <div class="product col-6 col-md <?php echo $i==14? "d-none d-md-block": ""?>">
                                    <?php if($product["type"] == "ad"): ?>
                                        <div class="scrollable-card m-0">
                                            <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                                <span class="price ad"><?php echo $product["price"]?></span><br>
                                                <span class="title ad"><?php echo $product["name"]?></span>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        </div> 
                                    <?php else: ?>
                                    <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                        <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        <div class="card-bottom p-1 p-sm-2">
                                            <span class="title bold"><?php echo $product["name"]?></span>
                                            <br>
                                            <span class="price bold"><?php echo $product["price"]?></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>                                                                                   
                            <?php endfor; ?> 
                        </div>
                        <div class="row pt-3">
                            <?php for($i=15; $i< 18; $i++): ?>
                                <?php $product = $products[$i]; ?>
                                <div class="product col-6 col-md <?php echo $i==17? "d-none d-md-block": ""?>">
                                    <?php if($product["type"] == "ad"): ?>
                                        <div class="scrollable-card m-0">
                                            <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                                <span class="price ad"><?php echo $product["price"]?></span><br>
                                                <span class="title ad"><?php echo $product["name"]?></span>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        </div> 
                                    <?php else: ?>
                                    <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                        <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        <div class="card-bottom p-1 p-sm-2">
                                            <span class="title bold"><?php echo $product["name"]?></span>
                                            <br>
                                            <span class="price bold"><?php echo $product["price"]?></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>                                                                                   
                            <?php endfor; ?> 
                        </div>
                        <div class="row pt-3">
                            <?php for($i=18; $i< 21; $i++): ?>
                                <?php $product = $products[$i]; ?>
                                <div class="product col-6 col-md <?php echo $i==20? "d-none d-md-block": ""?>">
                                    <?php if($product["type"] == "ad"): ?>
                                        <div class="scrollable-card m-0">
                                            <div class="card-bottom p-1 p-sm-2" style="background-color: <?php echo $product["color"]?>;">
                                                <span class="price ad"><?php echo $product["price"]?></span><br>
                                                <span class="title ad"><?php echo $product["name"]?></span>
                                            </div>
                                            <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        </div> 
                                    <?php else: ?>
                                    <div class="scrollable-card m-0 <?php echo $product["type"]?>">
                                        <img class="img-fluid" src="<?php echo $product["img"]?>" alt="">
                                        <div class="card-bottom p-1 p-sm-2">
                                            <span class="title bold"><?php echo $product["name"]?></span>
                                            <br>
                                            <span class="price bold"><?php echo $product["price"]?></span>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>                                                                                   
                            <?php endfor; ?> 
                        </div>            
                    </div>
                    <div class="col-md-3 d-none d-md-block"><div class="ad_1x3" style="background-image: url(img/srp/<?php echo $user ?>/ads/1x3.jpg);"></div></div>                
                </div>
                <!-- END: row of 3x1 -->

                <!-- START: mobile ad1 -->
                <div class="row srp pt-3 d-block d-md-none">
                    <div class="col">
                        <div class="adwrapper cta" id="<?php echo $user ?>-cta">                        
                            <img class="img-fluid" src="img/srp/<?php echo $user ?>/ads/admobile2.png" alt="ad mobile2" />
                            <?php if($user == "annesofie"): ?>
                                <div class="text-top <?php echo $user ?>-first">
                                    <div class="text-light">
                                        <span class="bold">Supercool Fashion Shop</span><br>
                                        <span class="ad">Sponsored</span>                                        
                                    </div>
                                </div>                                                                                    
                                <div class="dot"></div>
                                <div style="display: none;" class="dot-text" id="annesofie-cta-text1">Classic black bag is an "evergreen" it never stops being trendy. Click here to find yours.</div>
                                <div class="dot dot2"></div>
                                <div style="display: none;" class="dot-text dot-text2" id="annesofie-cta-text2">Retro jacket are coming back this spring. Click here to find yours.</div>
                                <div class="fake-btn annesofie" id="annesofie-cta-button">Click to view the products</div>
                            <?php else: ?>
                                <div class="text-top <?php echo $user ?>-first">
                                    <div class="text-light">
                                        <span class="bold">Supercool Electronic Shop</span><br>
                                        <span class="ad">Sponsored</span>                                        
                                    </div>
                                </div>                                                                                    
                                <div class="dot"></div>
                                <div style="display: none;" class="dot-text" id="kristian-cta-text1">Looking for the old film roll to develop your art? Click here and find all the things you need to bring your photos to life.</div>
                                <div class="dot dot2"></div>
                                <div style="display: none;" class="dot-text dot-text2" id="kristian-cta-text2">Vintage and analogue camera, that you never use since getting into digital. Old but gold. Click to find yours.</div>
                                <div class="fake-btn kristian" id="kristian-cta-button">Click to view the products</div>
                            <?php endif; ?>                                
                        </div>                        
                    </div>
                </div>
                <!-- END: mobile ad1 -->
            <?php endif; ?>
        </main>
        <?php include "components/footer.php" ?>                 
        <?php include "components/scripts.php" ?>
    </body>

</html>