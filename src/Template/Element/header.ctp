<?php $session = $this->request->session();
$logged = $session->check('User.id');
echo '<header class="header '.(($logged) ? "" : "header-logged-out").'">';
?>
    <div class="header-block header-block-collapse hidden-lg-up">
        <button class="collapse-btn" id="sidebar-collapse-btn"><i class="fa fa-bars"></i>Menu</button>
    </div>
    <div class="header-block header-block-search hidden-sm-down">
        <form role="search">
            <div class="input-container"><i class="fa fa-search"></i> 
                <input type="search" placeholder="Search Historical Data Archive">
                <div class="underline"></div>
            </div>
        </form>
    </div>
    <div class="header-block header-block-buttons">
        <!-- <a href="#" class="btn btn-sm header-btn"> <i class="fa fa-github-alt"></i> <span>Downlaod XML</span> </a>
        <a href="#" class="btn btn-sm header-btn"> <i class="fa fa-star"></i> <span>Donwload JSON</span> </a>
        <a href="#" class="btn btn-sm header-btn"> <i class="fa fa-cloud-download"></i> <span>Download OtherType</span> </a> -->
    </div>
    <div class="header-block header-block-nav">
        <ul class="nav-profile">
            <li class="notifications new">
                <a href="" data-toggle="dropdown"><i class="fa fa-bell-o"></i><sup><span class="counter">8</span></sup></a>
                <div class="dropdown-menu notifications-dropdown-menu">
                    <ul class="notifications-container">
                        <li>
                            <a href="" class="notification-item">
                                <div class="img-col">
                                    <div class="img" ></div>
                                </div>
                                <div class="body-col">
                                    <p><span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification-item">
                                <div class="img-col">
                                    <div class="img" ></div>
                                </div>
                                <div class="body-col">
                                    <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="" class="notification-item">
                                <div class="img-col">
                                    <div class="img" ></div>
                                </div>
                                <div class="body-col">
                                    <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <footer>
                        <ul>
                            <li> <a href="">View All</a> </li>
                        </ul>
                    </footer>
                </div>
            </li>
            <li class="profile dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="img" style="background-image: url(http://localhost/forecast_clash/img/<?= $session->read('User.avatar') ?>)"></div>
                    <span class="name"><?php 
                    if ($logged) {
                        echo $session->read('User.first_name')." ".$session->read('User.last_name');
                    } else {
                        echo '<a style="display: inline;" href="https://forecastclash.com/forecast_clash/users/login"><strong>Please login</strong></a>';
                    } ?>
                    
                    <img src="" alt=""></span>
                </a>
                <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                    <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Profile </a>
                    <a class="dropdown-item" href="#"> <i class="fa fa-bell icon"></i> Notifications </a>
                    <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Settings </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/forecast_clash/users/logout"> <i class="fa fa-power-off icon"></i> Logout </a>
                </div>
            </li>
        </ul>
    </div>
</header>        