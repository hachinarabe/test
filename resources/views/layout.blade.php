<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
        {{-- <link href="{{asset('/css/admin-style.css')}}" rel="stylesheet"> --}}
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        @include('navber')
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    @include('sidebar')
                </div>
                <div class="col-lg-8 col-md-8">
                    @yield('content')
                </div>
            </div>
        </div>
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    @include('footer')
                </div>
            </div>
            @section('endbody')
                <script src="{{asset('/js/jquery-3.2.1.min.js')}}"></script>
                <script src="{{asset('/js/bootstrap.min.js')}}"></script>
            @show
        </footer>
    </body>
</html>

<script type="text/javascript">
$(window).on('load resize', function(){
    // navbarの高さを取得する
    var height = $('.navbar').outerHeight(true);
    // bodyのpaddingにnavbarんぼ高さを設定する
    $('body').css('padding-top',height);
});
</script>
