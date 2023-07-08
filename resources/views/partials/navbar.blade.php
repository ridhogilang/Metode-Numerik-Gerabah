<nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Home Industri Gerabah</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden active">
                        <a href="#page-top"></a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="/">Menu Utama</a>
                    </li>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#contact">Cara Penggunaan</a>
                    </li>
                    @auth
                    <li class="">
                        <a class="page-scroll" href="/dashboard">Mulai Kalkulasi</a>
                    </li>
                    @else
                    <li class="">
                        <a class="page-scroll" href="/login">Mulai Kalkulasi</a>
                    </li>
                    @endauth
                    
                    <li class="">
                        <a class="page-scroll" href="#about">Tentang</a>
                    </li>
                    <li class="">
                        <a class="page-scroll" href="#team">Team</a>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
