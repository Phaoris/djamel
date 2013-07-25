@extends('master')

@section('content')

            <div id="content-wrapper" class="content-wrapper">

            <!-- Primary Content -->
            <div class="container">
                <div class="clearfix">
                    <div class="grid_9">
                        <!-- Title -->
                        <div class="title-wrap">
                            <h2>Ce qui se passe ...</h2>
                        </div>
                        <!-- /Title -->
                        <!-- Recent Post -->
                        <ul class="recent-posts">
                            <li class="grid_3 alpha">
                                <h4><a href="#">Curabitur eu dolor mauris.</a></h4>
                                <div class="excerpt">Suspendisse tempor sagittis urna. In ut nulla quis erat sagittis commodo a sed felis. Vestibulum aliquam ultricies erat. </div>
                                <a href="#" class="link">Lire +</a>
                            </li>
                            <li class="grid_3">
                                <h4><a href="#">Sed lobortis aliquam facilisis. Nulla facilisi.</a></h4>
                                <div class="excerpt">Suspendisse tempor sagittis urna. In ut nulla quis erat sagittis commodo a sed felis. Vestibulum aliquam ultricies erat. </div>
                                <a href="#" class="link">Lire +</a>
                            </li>
                            <li class="grid_3 omega">
                                <h4><a href="#">Pellentesque commodo ultricies eros et pharetra.</a></h4>
                                <div class="excerpt">Suspendisse tempor sagittis urna. In ut nulla quis erat sagittis commodo a sed felis. Vestibulum aliquam ultricies erat. </div>
                                <a href="#" class="link">Lire +</a>
                            </li>
                        </ul>
                        <!-- /Recent Post -->
                    </div>
                    <div class="grid_3">
                        <!-- Title -->
                        <div class="title-wrap">
                            <h2>heures</h2>
                        </div>
                        <!-- /Title -->
                        <!-- Schedule -->
                        <div class="schedule">
                            <h5>Week-end</h5>
                            <ul class="unstyled">
                                <li><span class="days">Sam - Dim:</span> <span class="time">08:00 - 05:00</span></li>
                            </ul>
                        </div>
                        <!-- /Schedule -->
                    </div>
                </div>
            </div>
            <!-- Primary Content / End -->



            <!-- Banners -->
            <div class="banners-wrap">
                <div class="container clearfix">
                    <div class="grid_6">

                        <!-- Gift a Card -->
                        <div class="action-btn-holder block action-btn-holder__banner action-btn-holder__left">
                            <a href="gift-card.html" class="action-btn block">
                                <span class="txt-wrapper">
                                    GEt a <span class="highlight">gift card</span>
                                    <!-- Stars (Default) -->
                                    <span class="stars-default">
                                        <i class="star star__first"></i>
                                        <i class="star star__second star__big"></i>
                                        <i class="star star__third"></i>
                                    </span>
                                    <!-- Stars (Default) / End -->
                                    <!-- Stars (Active) -->
                                    <span class="stars-active">
                                        <i class="star star__first"></i>
                                        <i class="star star__second star__big"></i>
                                        <i class="star star__third"></i>
                                    </span>
                                    <!-- Stars (Active) / End -->
                                </span>
                                <i class="ico ico-cards"></i>
                                <i class="ico ico-cards ico-cards__alt"></i>
                            </a>
                            <span class="action-btn-back"></span>
                        </div>
                        <!-- Gift a Card / End -->

                    </div>
                    <div class="grid_6">

                        <!-- Gift a Dinner -->
                        <div class="action-btn-holder block action-btn-holder__banner action-btn-holder__right">
                            <a href="gift-dinner.html" class="action-btn block">
                                <span class="txt-wrapper">
                                    gift a <span class="highlight">dinner</span>
                                    <!-- Stars (Default) -->
                                    <span class="stars-default">
                                        <i class="star star__first"></i>
                                        <i class="star star__second star__big"></i>
                                        <i class="star star__third"></i>
                                    </span>
                                    <!-- Stars (Default) / End -->
                                    <!-- Stars (Active) -->
                                    <span class="stars-active">
                                        <i class="star star__first"></i>
                                        <i class="star star__second star__big"></i>
                                        <i class="star star__third"></i>
                                    </span>
                                    <!-- Stars (Active) / End -->
                                </span>
                                <i class="ico ico-pizza"></i>
                                <i class="ico ico-pizza ico-pizza__alt"></i>
                            </a>
                            <span class="action-btn-back"></span>
                        </div>
                        <!-- Gift a Dinner / End -->

                    </div>
                </div>
            </div>
            <!-- Banners / End -->

            <!-- Secondary Content -->
            <div class="container clearfix">
                <div class="grid_4">
                    <!-- Reviews -->
                    <div class="reviews">
                        <!-- Title -->
                        <div class="title-wrap title-wrap__small">
                            <h2>Commentaires</h2>
                        </div>
                        <!-- /Title -->
                        <ul class="unstyled">
                            <li class="clearfix">
                                <span class="rating-mark rating-mark__5">5</span>
                                <blockquote class="styled">Merci beaucoup à toute l'équipe, vous avez assuré pour le mariage je vous recommenderais.</blockquote>
                                <div class="author">Yacine</div>
                            </li>
                            <li class="clearfix">
                                <span class="rating-mark rating-mark__5">5</span>
                                <blockquote class="styled">Franchement rien à redire, ambiance, music, baklawa (lol) au top, merci Djamel.</blockquote>
                                <div class="author">Nabil</div>
                            </li>
                        </ul>
                    </div>
                    <!-- Reviews / End -->
                </div>
                <div class="grid_4">

                    <!-- Featured Dish -->
                    <div class="featured">
                        <!-- Title -->
                        <div class="title-wrap title-wrap__small">
                            <h2>Vos <em>Favoris</em></h2>
                        </div>
                        <!-- /Title -->

                        <!-- Image -->
                        <figure class="accent-box accent-box__animated">
                            <span class="accent-box-inner">
                                <a href="#"><img src="/images/samples/bak1.jpg" height="192" width="290" alt=""></a>
                                <span class="ribbon">Nos desserts</span>
                                <span class="mask"></span>
                            </span>
                        </figure>
                        <!-- /Image -->

                        <h4><a href="#">Les gateaux classiques oriental</a></h4>

                    </div>
                    <!-- Featured Dish / End -->

                </div>
                <div class="grid_4">

                    <!-- Featured Drink -->
                    <div class="featured">
                        <!-- Title -->
                        <div class="title-wrap title-wrap__small">
                            <h2>Sur mesure <em>oriental</em></h2>
                        </div>
                        <!-- /Title -->

                        <!-- Image -->
                        <figure class="accent-box accent-box__animated">
                            <span class="accent-box-inner">
                                <a href="#"><img src="/images/samples/oriental.jpg" height="192" width="290" alt=""></a>
                                <span class="ribbon">Votre choix</span>
                                <span class="mask"></span>
                            </span>
                        </figure>
                        <!-- /Image -->

                        <h4><a href="#">Choisissez parmis les gateaux du catalogue</a></h4>

                    </div>
                    <!-- Featured Drink / End -->

                </div>
            </div>
            <!-- Secondary Content / End -->



        </div>

@stop