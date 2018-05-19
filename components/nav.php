<?php 
    $user = $_GET["user"];
    require_once("userdata.php");
    $userName = getUserName($user);
?>
<!--
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light row align-items-center px-0">
        <div class="col order-md-0 align-self-center">
            <a class="navbar-brand pt-0" href="desktop.php?user=<?php echo $user ?>"><img class"img-fluid" src="img/icons/dba-logo.png" /></a>            
        </div>        
        <div class="col-12 col-sm-12 col-md-auto text-md-right text-sm-left d-flex order-3 order-sm-3 order-md-1 search-box">        
            <a href="searchproductspage.php?user=<?php echo $user ?>" class="search-input-container"></a>
            <div class="pills-container mobile d-inline-block text-right d-sm-inline-block d-md-none">
                <span class="badge badge-pill badge-secondary">Kategori</span>
                <span class="badge badge-pill badge-secondary">Flere Filter</span>
            </div>
        </div>
        <div class="col-6 text-right order-md-2">
            <ul class="navbar-nav mr-auto float-right">
                <li class="nav-item align-self-center">
                    <div class="nav-link navbar-icon pb-0"><span class="ball announce"></span> <span class="ball-text">Opret annonce</span></div>
                </li>
                <li class="nav-item hidden-sm align-self-center">
                    <div class="nav-link navbar-icon d-none d-sm-none d-md-flex pb-0"><span class="ball notification"></span> <span class="ball-text">Notifikationer</span></div>
                </li>
                <li class="nav-item align-self-center">
                    <div class="nav-link navbar-icon pb-0"><a href="index.php"><span class="ball <?php echo $user ?>"></span></a> <span class="ball-text"><?php echo $userName ?></span></div>
                </li>
            </ul> 
        </div>       
    </nav>
</div>
-->
<div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light row align-items-center px-0">
        <div class="col-3 col-md-1 align-self-center">
            <a class="navbar-brand pt-0" href="desktop.php?user=<?php echo $user ?>"><img class"img-fluid" src="img/icons/dba-logo.png" /></a>            
        </div>        
        <div class="col col-md-6 search-box pr-0">                  
            <a href="searchproductspage.php?user=<?php echo $user ?>" class="search-input-container"></a>            
        </div>
        <div class="col-3 col-sm-2 col-md-5">            
            <ul class="navbar-nav mr-auto float-right">
                <li class="nav-item align-self-center">
                    <div class="nav-link navbar-icon pb-0"><span class="ball announce"></span> <span class="ball-text">Opret annonce</span></div>
                </li>
                <li class="nav-item hidden-sm align-self-center">
                    <div class="nav-link navbar-icon d-none d-sm-none d-md-flex pb-0"><span class="ball notification"></span> <span class="ball-text">Notifikationer</span></div>
                </li>
                <li class="nav-item align-self-center">
                    <div class="nav-link navbar-icon pb-0"><a href="index.php"><span class="ball <?php echo $user ?>"></span></a> <span class="ball-text"><?php echo $userName ?></span></div>
                </li>
            </ul> 
        </div>       
    </nav>
</div>