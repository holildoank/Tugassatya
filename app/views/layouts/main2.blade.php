<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>SATYA.ID | {{$title}}</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- bootstrap 3.0.2 -->
        {{HTML::style("assets/css/bootstrap.min.css")}}
        <!-- font Awesome -->
        {{HTML::style("assets/css/font-awesome.min.css")}}
        <!-- Ionicons -->
        {{HTML::style("assets/css/ionicons.min.css")}}
        <!-- Theme style -->
        {{HTML::style("assets/css/AdminLTE.css")}}
        @yield('css')

    </head>
    <body class="skin-blue">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
         
        </header>
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
           

            <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side">                
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                     <center>   {{$title}}</center>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    @yield('content')

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->


        <!-- jQuery 2.0.2 -->
        <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>-->
        {{HTML::script("assets/js/jquery.min.js")}}
        <!-- Bootstrap -->
        {{HTML::script("assets/js/bootstrap.min.js")}}
        <!-- AdminLTE App -->
        {{HTML::script("assets/js/AdminLTE/app.js")}}
        @yield('js')

    </body>
</html>