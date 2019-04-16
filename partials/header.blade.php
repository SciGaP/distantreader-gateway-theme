<title>Distant Reader Gateway</title>
<div id="navbar" class="navbar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand scroll" href="{{ URL::to('/') }}">
            <span class="searching-sra-logo"><img class="img-responsive" src="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/img/dreader-logo.png"/></span>
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right searching-sra-links">
            <li><a class="scroll hidden" href="#home"></a></li>
            <li @if(strpos($_SERVER['REQUEST_URI'], "pages/about") !== false) class="active" @endif><a class="scroll" href="{{ URL::to('/') }}/pages/about">About</a></li>
            <li @if(strpos($_SERVER['REQUEST_URI'], "pages/documentation") !== false) class="active" @endif><a class="scroll" href="{{ URL::to('/') }}/pages/documentation">Documentation</a></li>
            <li @if(strpos($_SERVER['REQUEST_URI'], "pages/contact") !== false) class="active" @endif><a class="scroll" href="{{ URL::to('/') }}/pages/contact">Contact us</a></li>
            <li @if(strpos($_SERVER['REQUEST_URI'], "pages/citeus") !== false) class="active" @endif><a class="scroll" href="{{ URL::to('/') }}/pages/citeus">Cite this</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>


    <!--[if IE 9]>
        <script src="js/PIE_IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/PIE_IE678.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/style.css"/>
<link media="all" type="text/css" rel="stylesheet" href="{{ URL::to('/') }}/themes/{{Session::get('theme')}}/assets/css/custom-style.css"/>
