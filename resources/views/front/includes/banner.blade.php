<!-- Banner start -->
<div class="banner" id="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active item-bg">
                <img class="d-block w-100 h-100" src="{{$sliders[0]->photo}}" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex h-100 text-center">
                    <div class="carousel-content container b1-inner">

                    <div class="carousel-caption banner-slider-inner d-flex h-100 text-center" style="background-image: url('{{ asset('assets/front/img/benner/bg12.png') }}'); background-size: cover;">


                            <div class="carousel-content container b1-inner">
                                <div class="tab-search-section">
                                    <h1>Unlocking Dreams, Building Homes</h1>
                                    <div id="typed-strings">
                                        <p>Your Journey to Real Estate Excellence Starts Here</p>
                                    </div>
                                    <h1 class="typed-text tt2">&nbsp;
                                        <span id="typed"></span>
                                    </h1>
                                    <div class="tab-box">
                                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active show" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="false">Buy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Rent</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content" id="pills-tabContent">
                                            <div class="tab-pane fade active show" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                                <div class="search-area search-area-6">
                                                    <div class="search-aphprea-inner">
                                                        <div class="search-contents">
                                                            <form method="GET">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <input type="text" name="name" class="search-fields sf2 fc2" placeholder="Enter Keyword">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <select class="selectpicker search-fields" name="type">
                                                                                <option>Property Types</option>
                                                                                <option>Residential</option>
                                                                                <option>Commercial</option>
                                                                                <option>Land</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <select class="selectpicker search-fields" name="location">
                                                                                <option>Butuan</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <select class="selectpicker search-fields" name="make">
                                                                                <option>Room</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                                        <div class="form-group fg2">
                                                                            <button class="search-button btn-md btn-color">Search</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="search-area search-area-6">
                                                    <div class="search-area-inner">
                                                        <div class="search-contents">
                                                            <form method="GET">
                                                                <div class="row">
                                                                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <input type="text" name="name" class="search-fields sf2 fc2" placeholder="Enter Keyword">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <select class="selectpicker search-fields" name="type">
                                                                                <option>Property Types</option>
                                                                                <option>Residential</option>
                                                                                <option>Commercial</option>
                                                                                <option>Land</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <select class="selectpicker search-fields" name="location">
                                                                                <option>Butuan</option>

                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2">
                                                                        <div class="form-group">
                                                                            <select class="selectpicker search-fields" name="make">
                                                                                <option>Room</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-6 col-pad2 cp3">
                                                                        <div class="form-group fg2">
                                                                            <button class="search-button btn-md btn-color">Search</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- banner end -->