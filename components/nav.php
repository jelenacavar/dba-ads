<?php 
    $user = $_GET["user"];
    require_once("userdata.php");
    $userName = getUserName($user);
?>
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