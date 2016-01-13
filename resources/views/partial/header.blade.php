<header id="header">      
    <div class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="navbar-brand" href="index.html">
                    <h1><img src="{!! asset('additional/home/images/logo.png') !!}" alt="logo"></h1>
                </a>
                
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="{!! url('/') !!}">Home</a></li>
                    <!--<li class="dropdown"><a href="#">Pages <i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="aboutus.html">About</a></li>
                            <li><a href="aboutus2.html">About 2</a></li>
                            <li><a href="service.html">Services</a></li>
                            <li><a href="pricing.html">Pricing</a></li>
                            <li><a href="contact.html">Contact us</a></li>
                            <li><a href="contact2.html">Contact us 2</a></li>
                            <li><a href="404.html">404 error</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                        </ul>
                    </li>  -->                                        
                    <li><a href="{!! url('/') !!}">Newsletter</a></li>                    
                    <li><a href="{!! url('/') !!}">Campaign</a></li>                    
                    <li><a href="{!! url('/') !!}">Donasi</a></li>                    
                    <li><a href="{!! url('/') !!}">Masuk</a></li>                    
                </ul>
            </div>
            <div class="search">
                <form role="form">
                    <i class="fa fa-search"></i>
                    <div class="field-toggle">
                        <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                    </div>
                </form>
            </div>
        </div>
    </div>
</header>