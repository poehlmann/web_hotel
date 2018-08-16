<?php include 'header.php';?>
<!--    <div id="wowslider-container">-->
<!--        <div class="ws_images"><ul>-->
<!--                <li><a href=""><img src="images/photos/banner.jpg" alt="" title="" id="wows_0"/></a></li>-->
<!--                <li><a href=""><img src="images/photos/banner.jpg" alt="You can add description to slides!" title="You can add description to slides!" id="wows_1"/></a></li>-->
<!--                <li><a href=""><img src="images/photos/banner.jpg" alt="" title="" id="wows_2"/></a></li>-->
<!--            </ul></div>-->
<!--        <div class="ws_bullets"><div>-->
<!--                <a href="#" title=""><img src="images/photos/banner.jpg" alt=""/>1</a>-->
<!--                <a href="#" title="You can add description to slides!"><img src="images/photos/banner.jpg" alt="You can add description to slides!"/>2</a>-->
<!--                <a href="#" title=""><img src="images/photos/banner.jpg" alt=""/>3</a>-->
<!--            </div></div>-->
<!--        <a href="#" class="ws_frame"></a>-->
<!--        <div class="ws_shadow"></div>-->
<!--    </div>-->
<!--    <div class="swiper-container main-slider" id="myCarousel">-->
<!--        <div class="swiper-wrapper">-->
<!--            <div class="swiper-slide slider-bg-position animated fadeInDown" style="background:url('images/photos/banner.jpg')" data-hash="slide1">-->
<!--                <h2 class="animated zoomInLeft">La Casona del Centro</h2>-->
<!--                <h2 class="animated flipInX">Fairmont managed!</h2>-->
<!--            </div>-->
<!--            <div class="swiper-slide slider-bg-position" style="background:url('images/photos/banner.jpg')" data-hash="slide2">-->
<!--                <h2 class="animated fadeInUp">ALOJAMIENTO</h2>-->
<!--            </div>-->
<!--        </div>-->
<!--        <!-- Add Pagination -->
<!--        <div class="swiper-pagination"></div>-->
<!--        <!-- Add Navigation -->
<!--        <div class="swiper-button-prev"><i class="fa fa-chevron-left"></i></div>-->
<!--        <div class="swiper-button-next"><i class="fa fa-chevron-right"></i></div>-->
<!--    </div>-->
    <!-- banner -->
    <div class="banner wow bounceInUp">
<!--        <div id="three-container"></div>-->
<!--        <div id="instructions">-->
<!--            click and drag to control the animation-->
<!--        </div>-->
        <img src="images/photos/banner.jpg"  class="img-responsive animated fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; -webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;" alt="slide">
        <div class="welcome-message">
            <div class="wrap-info">
                <div class="information">
                    <h1  class="animated fadeInDown" data-wow-delay="2s"  style="-webkit-animation-delay: 2s; -moz-animation-delay: 2s; animation-delay: 2s;">La Casona del Centro</h1>
                    <p class="animated fadeInUp" data-wow-delay="2s"  style="-webkit-animation-delay: 2s; -moz-animation-delay: 2s; animation-delay: 2s;">Alojamiento</p>
                </div>
                <a href="#information" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
            </div>
        </div>
    </div>
    <!-- banner-->


    <!-- reservation-information -->
    <div id="information" class="spacer reserve-info ">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-md-8">
                    <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft"><iframe  class="embed-responsive-item" src="//player.vimeo.com/video/55057393?title=0" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                </div>
                <div class="col-sm-5 col-md-4">
                    <h3>Reservacion</h3>
                    <form role="form" class="wowload fadeInRight">
                        <div class="form-group">
                            <input type="text" class="form-control"  placeholder="Nombre Completo">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="Phone" class="form-control"  placeholder="Telefono">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option>Tipo de Habitacion</option>
                                        <option>Lujo</option>
                                        <option>Ejecutivo</option>
                                    </select>
                                </div>
                                <div class="col-xs-6">
                                    <select class="form-control">
                                        <option>No. de Adulto</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                    </select>
                                </div></div>
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-xs-6">
                                    Ingreso
                                   <input type="date" />
                                </div>
                                <div class="col-xs-6">
                                    Salida
                                    <input type="date" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control"  placeholder="Mensaje para el alojamiento" rows="4"></textarea>
                        </div>
                        <button class="btn btn-default">Reservar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- reservation-information -->
    <div class="room wowload fadeInDown">
        <div class="container">
            <h1>Habitaciones</h1>
            <hr class="line">
            <div class="row grow">
                <!-- BEGIN PRODUCTS -->
                <div class="col-md-3 col-sm-6 ">
                <span class="thumbnail">
                    <img src="images/photos/habitacion2.jpg" alt="..."/>
                    <hr class="line">
                    <h4>Habitacion de Lujo</h4>
                    <div class="ratings ">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                    </div>
                    <p>Habitacion con todos los lujos y comodidades que podria desear tener</p>
                    <hr class="line">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p class="price">$100</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button class="btn btn-success right" >Reservar</button>
                        </div>

                    </div>
                </span>
                </div>
                <div class="col-md-3 col-sm-6 ">
                <span class="thumbnail">
                    <img src="images/photos/habitacion2.jpg" alt="...">
                    <hr class="line">
                    <h4>Habitacion Familiar</h4>
                    <div class="ratings">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <p>Habitacion familiar con la que contara con la comodidad para usted y su familia</p>
                    <hr class="line">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p class="price">$70</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button class="btn btn-success right" >Reservar</button>
                        </div>

                    </div>
                </span>
                </div>
                <div class="col-md-3 col-sm-6 ">
                <span class="thumbnail">
                    <img src="images/photos/habitacion2.jpg" alt="...">
                    <hr class="line">
                    <h4>Habitacion Deluxe</h4>
                    <div class="ratings">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <p>Habitacion economica para un viaje corto de turista </p>
                    <hr class="line">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p class="price">$50</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button class="btn btn-success right" > Reservar</button>
                        </div>

                    </div>
                </span>
                </div>
                <div class="col-md-3 col-sm-6 ">
                <span class="thumbnail">
                    <img src="images/photos/habitacion2.jpg" alt="...">
                    <hr class="line">
                    <h4>Habitacion Ejecutivo</h4>
                    <div class="ratings">
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star"></span>
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <p>Habitacion ideal para un viaje de negocios o para conocer la ciudad</p>
                    <hr class="line">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <p class="price">$30</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <button class="btn btn-success right" > Reservar</button>
                        </div>

                    </div>
                </span>
                </div>
                <!-- END PRODUCTS -->
            </div>
        </div>
    </div>

    <!-- services -->
    <div class="services wowload fadeInUp">
        <div class="container">
            <h1>Servicios</h1>
            <hr class="line">
            <div class="row">
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/habitacion5.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel -->
                    <div class="caption">Habitaciones<a href="rooms-tariff.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/habitacion5.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel -->
                    <div class="caption">Paisaje<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/habitacion5.jpg"  class="img-responsive" alt="slide"></div>
                            <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel -->
                    <div class="caption">Desayuno<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>

<!--                <div class="carousel slide" id="myCarousel">-->
<!--                    <div class="carousel-inner">-->
<!--                        <div class="item active">-->
<!--                            <ul class="thumbnails">-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">-->
<!--                                                <div class="carousel-inner">-->
<!--                                                    <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>-->
<!--                                                    <div class="item  height-full"><a href="#"><img src="http://placehold.it/360x240" class="img-responsive" alt=""></a></div>-->
<!--                                                    <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>-->
<!--                                                </div>-->
<!--                                                <!-- Controls -->
<!--                                                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>-->
<!--                                                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <div id="TourCarousel" class="carousel slide" data-ride="carousel">-->
<!--                                                <div class="carousel-inner">-->
<!--                                                    <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>-->
<!--                                                    <div class="item  height-full"><a href="#"><img src="http://placehold.it/360x240" class="img-responsive" alt=""></a></div>-->
<!--                                                    <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>-->
<!--                                                </div>-->
<!--                                                <!-- Controls -->
<!--                                                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>-->
<!--                                                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <div id="FoodCarousel" class="carousel slide" data-ride="carousel">-->
<!--                                                <div class="carousel-inner">-->
<!--                                                    <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>-->
<!--                                                    <div class="item  height-full"><a href="#"><img src="http://placehold.it/360x240" class="img-responsive" alt=""></a></div>-->
<!--                                                    <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>-->
<!--                                                </div>-->
<!--                                                <!-- Controls -->
<!--                                                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>-->
<!--                                                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <div id="RoomCarousel" class="carousel slide" data-ride="carousel">-->
<!--                                                <div class="carousel-inner">-->
<!--                                                    <div class="item active"><img src="images/photos/habitacion2.jpg" class="img-responsive" alt="slide"></div>-->
<!--                                                    <div class="item  height-full"><a href="#"><img src="http://placehold.it/360x240" class="img-responsive" alt=""></a></div>-->
<!--                                                    <div class="item  height-full"><img src="images/photos/habitacion2.jpg"  class="img-responsive" alt="slide"></div>-->
<!--                                                </div>-->
<!--                                                <!-- Controls -->
<!--                                                <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>-->
<!--                                                <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>-->
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div><!-- /Slide1 -->
<!--                        <div class="item">-->
<!--                            <ul class="thumbnails">-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div><!-- /Slide2 -->
<!--                        <div class="item">-->
<!--                            <ul class="thumbnails">-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li class="col-sm-3">-->
<!--                                    <div class="fff">-->
<!--                                        <div class="thumbnail">-->
<!--                                            <a href="#"><img src="http://placehold.it/360x240" alt=""></a>-->
<!--                                        </div>-->
<!--                                        <div class="caption">-->
<!--                                            <h4>Praesent commodo</h4>-->
<!--                                            <p>Nullam Condimentum Nibh Etiam Sem</p>-->
<!--                                            <a class="btn btn-mini" href="#">» Read More</a>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div><!-- /Slide3 -->
<!--                    </div>-->
<!--                    <nav>-->
<!--                        <ul class="control-box pager">-->
<!--                            <li><a data-slide="prev" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-left"></i></a></li>-->
<!--                            <li><a data-slide="next" href="#myCarousel" class=""><i class="glyphicon glyphicon-chevron-right"></i></li>-->
<!--                        </ul>-->
<!--                    </nav>-->
<!--                    <!-- /.control-box -->
<!---->
<!--                </div>-->
        </div>
    </div>
    <!-- services -->

<?php include 'footer.php';?>