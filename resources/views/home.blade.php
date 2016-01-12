<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>{!! isset($title) ? $title : "We Can" !!} | We Can If We Together</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        @yield('style')

    </head>
    <body class="skin-blue sidebar-mini">
        <div class="wrapper">

            @include('partial.header')
            <!-- Left side column. contains the logo and sidebar -->
            @include('partial.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="min-height:648px">
                <section class="content-header">
                        <h1>{!! $title !!}</h1>
                        <ol class="breadcrumb">
                            <li><a href="{!! url('/') !!}"><i class="fa fa-dashboard"></i> Beranda</a></li>
                            {!! Breadcrumb::render([''.$breadcrumb.'']) !!}
                        </ol>
                </section>
                <!-- Main content -->
                @yield('content')

            </div><!-- /.content-wrapper -->

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class='control-sidebar-bg'></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.3 -->
        <script src="{!! asset('plugins/jQuery/jQuery-2.1.3.min.js') !!}" type="text/javascript"></script>

        <script type="text/javascript">
            //  jQuery('.nailthumb-container').nailthumb();
            $('.autohide').delay(5000).fadeOut('slow');
        </script>

        @yield('script')

    </body>
</html>
