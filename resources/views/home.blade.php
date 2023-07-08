@extends('layouts.main')

@section('container')
     <!-- Header -->
     <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Selamat Datang</div>
                <div class="intro-heading">Website Kerajinan Gerabah Bapak Samudin</div>
                <a href="#services" class="page-scroll btn btn-xl">Layanan</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Services</h2>
                    <h3 class="section-subheading text-muted">Industri Rumahan Gerabah Keluarga Bapak Samudin Menyediakan Layanan </h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-sharp fa-solid fa-cart-shopping"></i>
                    </span>
                    <h4 class="service-heading">Pemesanan</h4>
                    <p class="text-muted">Jika hendak menginginkan bentuk khusus dan sekala besar bisa melukan pemesan.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-solid fa-sack-dollar"></i>
                    </span>
                    <h4 class="service-heading">Penjualan</h4>
                    <p class="text-muted">Home industri ini juga menyediakan beberapa produk yang sudah jadi untuk siap dijual kepada konsumen.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa-solid fa-truck-fast"></i>
                    </span>
                    <h4 class="service-heading">Pengiriman</h4>
                    <p class="text-muted">Melayani pengiriman produk dalam jumlah partai besar keberbagai daerah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Langkah Pembuatan</h2>
                    <h3 class="section-subheading text-muted">Proses pembuatan gerabah memiliki beberapa tahap pembuatan</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/imgbahan.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Bahan Baku</h4>
                        <p class="text-muted">Tahap Pertama</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/imgcetak.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Proses Pencetakan</h4>
                        <p class="text-muted">Tahap Kedua</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/imgjemur.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Penjemuran</h4>
                        <p class="text-muted">Tahap Ketiga</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/imgbakar.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Pembakaran</h4>
                        <p class="text-muted">Tahap Keempat</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/imgfinis.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Finishing</h4>
                        <p class="text-muted">Tahap Kelima</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="/img/imghasil.jpeg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Hasil</h4>
                        <p class="text-muted">Tahap Keenam</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">About</h2>
                    <h3 class="section-subheading text-muted">UMKM Pembuatan Gerabah Bapak Samudin</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="img/about/1.jpg" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>1972-2022</h4>
                                    <h4 class="subheading">Our Humble Journey</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">Usaha pembutan gerabah bapak samudin ini adalah usaha keluarga yang sudah turun temurun yang berdiri sejak 50 tahun yang lalu. 
                                        Usaha ini membuat berbagai macam jenis olahan produk gerabah.</p>
                                </div>
                            </div>
                        </li>
                       
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Berikut adalah anggota team kami</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="http://www.mycatspace.com/wp-content/uploads/2013/08/adopting-a-cat.jpg" class="img-responsive img-circle" alt="">
                        <h4>Jihan Cahyani</h4>
                        <p class="text-muted">Leader </p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="http://www.mycatspace.com/wp-content/uploads/2013/08/adopting-a-cat.jpg" class="img-responsive img-circle" alt="">
                        <h4>Luki Safei</h4>
                        <p class="text-muted">Team</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="http://www.mycatspace.com/wp-content/uploads/2013/08/adopting-a-cat.jpg" class="img-responsive img-circle" alt="">
                        <h4>Wahyu Raffli Adikusuma</h4>
                        <p class="text-muted">Team</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="http://www.mycatspace.com/wp-content/uploads/2013/08/adopting-a-cat.jpg" class="img-responsive img-circle" alt="">
                        <h4>Yumarlin Mz.</h4>
                        <p class="text-muted">lecturer</p>
                        <ul class="list-inline social-buttons">
                            <li><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
               
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
   

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Cara Penggunaan Aplikasi</h2>
                    <h3 class="section-subheading text-muted">Aplikasi Web ini menyediakan perhitungan perencaan bahan baku untuk produk</h3>
                    <h3 class="langkah2"> Langkah - langkah Untuk Melakukan Kalkulasi </h3>
                        <p class="langkah3">1. Anda dapat mengekilik button "Mulai Kalkulasi" atau bisa mengeklilk button di bawah ini</p>
                        <p class="langkah3">2. Jika anda belum registrasi maka silahkan registrasi terlebih dahulu</p>
                        <p class="langkah3">3. Jika sudah maka silahkan anda untuk login</p>
                        <p class="langkah3">4. Maka anda akan masuk halaman "Dasboard"</p>
                        <p class="langkah3">5. Setelah itu, anda dapat memasukan nilai yang hendak digunakan perhitungan</p>
                        <p class="langkah3">6. Kemudian klik button "Mulai Kalkulasi"</p>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate="">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            
                        </div>
                    </form>
                </div>
            </div>--}}
            <div class="col-lg-12 text-center">
                <div id="success"></div>
                <a type="submit" class="btn btn-xl" href="/login"> Mulai Kalkulasi</a>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Bahan Baku</h2>
                            <p class="item-intro text-muted">Tahap Kesatu</p>
                            <img class="img-responsive" src="../img/imgbahan.jpeg" alt="">
                            <p>Tanah liat yang digunakan untuk membuat gerabah adalah berjenis tanah liat earthenware. Tanah liat jenis tersebut dipilih karena memiliki kelebihan yaitu Tanah ini sangat elastis, atau mudah dibentuk dan cukup lengket. Selain itu tanah liat jenis earthenware ini memiliki kandungan besi dan mineral lainnya. Sehingga bisa mencapai kekerasan optimal pada suhu yang lebih rendah, antara 95 - 1100 derajat Celsius.</p>
                            <ul class="list-inline">
                                <li>Date: Desember 2022</li>
                                <li>Client: Round Icons</li>
                                <li>Category: Graphic Design</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Proses Percetakan</h2>
                            <p class="item-intro text-muted">Tahap Kedua</p>
                            <img class="img-responsive img-centered" src="../img/imgcetak.jpeg" alt="">
                            <p><a href="https://designmodo.com/startup/?u=787"></a>Teknik cetak tekan adalah salatu cara dalam teknik pembuatan gerabah untuk agar memudahkan dalam membentuk gerabah dengan sesuai dengan hasil dan waktu yang cepat </p>
                            <p>Untuk Teknik lebih lengkapnya <a href="https://www.summareconbekasi.com/whatson/detail/6-teknik-pembuatan-gerabah">Click Here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Proses Penjemuran</h2>
                            <p class="item-intro text-muted">Tahap Ketiga</p>
                            <img class="img-responsive img-centered" src="../img/imgjemur.jpeg" alt="">
                            <p> Setelah gerabah selesai dibentuk atau di cetak, maka perlu dilakukan proses penjemuran di bawah terik matahari agar dapat memperkuat tanah liat dan mengurangi kadar air. Proses ini biasanya memakan waktu berhari - hari tergantung dari cuaca. <a href="https://www.behance.net/MathavanJaya"></a></p>
                            <p> <a href="https://brewsuniq.com/blog/Pottery-Making-Untuk-Pemula-Ada-6-Tahapan-yang-Belum-Kamu-Tahu#:~:text=4.-,Proses%20penjemuran%20gerabah,berminggu%20%E2%80%93%20minggu%20atau%20sesuai%20cuaca.">Penjelasan Lebih Detail</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Proses Pembakaran</h2>
                            <p class="item-intro text-muted">Tahap Keempat</p>
                            <img class="img-responsive img-centered" src="../img/imgbakar.jpeg" alt="">
                            <p> Setelah Proses pengeringan gerabah dengan panas matahari selesai. Selanjutnya dapat melakukan proses Pembakaran yang bertujuan untuk melepaskan sifat tanah liat yang mudah larut bila kena air dan memperkuat konstruksi bentuk dari gerabah itu sendiri.<a href="https://www.behance.net/MathavanJaya">Mathavan Jaya</a></p>
                            <p>Penjelasan Lebih Lanjut <a href="https://www.google.com/search?q=Pembakaran+gerabah+adalah&rlz=1C5CHFA_enID1029ID1029&sxsrf=ALiCzsZlORPE1eRCJJHEBdZK2RyQ-qHeIg%3A1670197048130&ei=OC-NY5vOB-2YseMPhMS06Ac&ved=0ahUKEwibyojukOH7AhVtTGwGHQQiDX0Q4dUDCA8&uact=5&oq=Pembakaran+gerabah+adalah&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIGCAAQBRAeMgYIABAFEB4yBggAEAgQHjoICAAQgAQQsQM6BQgAEIAEOgYIABAHEB46BwgAEIAEEA06CAgAEAcQHhAKOggIABAIEAcQHjoICAAQHhANEAo6CAgAEAUQBxAeSgQIQRgASgQIRhgAUABYnRNgyhVoAHABeACAAbABiAHXCJIBBDEwLjKYAQCgAQHAAQE&sclient=gws-wiz-serp#:~:text=Pendet%2C%202010%3A9).-,12.%20Pembuatan%20Gerabah.pdf%20%2D%20Repositori%20Kemdikbud,https%3A//repositori.kemdikbud.go.id%20%E2%80%BA%2012.%20Pembuata...,-PDF"> CLick Here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Proses Finishing</h2>
                            <p class="item-intro text-muted">Tahap Kelima</p>
                            <img class="img-responsive img-centered" src="../img/imgfinis.jpeg" alt="">
                            <p>Finishing yang dimaksud disini adalah proses akhir dari gerabah setelah proses pembakaran. Proses ini dapat dilakukan dengan berbagai macam cara misalnya memulas dengan cat warna, melukis, menempel atau menganyam dengan bahan lain, dan lain-lain. <a href="https://www.behance.net/MathavanJaya"></a></p>
                            <p>Penjelasan Lebih Lanjut <a href="https://www.google.com/search?q=finshing+gerabah+adalah&rlz=1C5CHFA_enID1029ID1029&sxsrf=ALiCzsZ4snI-1X7bGm5aSbeJUsUIT7kVFA%3A1670197450085&ei=yjCNY8joBOyVseMPx6KnkAo&ved=0ahUKEwjI9d2tkuH7AhXsSmwGHUfRCaIQ4dUDCA8&uact=5&oq=finshing+gerabah+adalah&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIFCAAQogQyBQgAEKIEMgUIABCiBDIFCAAQogQ6CggAEEcQ1gQQsAM6BggAEAcQHjoICAAQBxAeEA86CAgAEAgQBxAeOgoIABAIEAcQHhAKOgoIABAIEAcQHhAPOggIIRDDBBCgAToHCAAQgAQQDToICAAQCBAeEA06CggAEAgQHhAPEA1KBAhBGABKBAhGGABQww1Yvyhg1CxoAXABeACAAWaIAcEFkgEDNy4xmAEAoAEByAEIwAEB&sclient=gws-wiz-serp#:~:text=Drs.%20I%20Wayan,id%20%E2%80%BA%20Proses_Pembuatan_Gerabah"> Click Here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>Hasil</h2>
                            <p class="item-intro text-muted">Tahap Keenam</p>
                            <img class="img-responsive img-centered" src="../img/imghasil.jpeg" alt="">
                            <p> Setelah melalui tahap - tahap sebelumnya maka produk gerabah sudah siap untuk dijual atau dipasarkan kepada konsumen. sehingga bisa digunakan sebagai mana peruntukan dan fungniya<a href="https://www.behance.net/MathavanJaya"></a></p>
                            <p>Penjelasan Lebih Lanjut <a href="https://www.google.com/search?q=Hasil+gerabah&rlz=1C5CHFA_enID1029ID1029&sxsrf=ALiCzsYN3461u8CB_ZIxGK2RmpoS0GG3gQ%3A1670198190122&ei=rjONY6mLB9bqz7sPq6SW6Ak&ved=0ahUKEwipms6OleH7AhVW9XMBHSuSBZ0Q4dUDCA8&uact=5&oq=Hasil+gerabah&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQAzIECCMQJzIFCAAQgAQyBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIKCAAQFhAeEA8QCjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjoECAAQR0oECEEYAEoECEYYAFDAAljAAmCfCGgAcAJ4AIABTYgBTZIBATGYAQCgAQHIAQjAAQE&sclient=gws-wiz-serp#:~:text=7%20Contoh%20Kerajinan,%E2%80%BA%20contoh%2Dkerajina..."> Click Here</a>.</p>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery Version 1.11.0 -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/classie.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/jqBootstrapValidation.js"></script>
    <script src="https://raw.githubusercontent.com/IronSummitMedia/startbootstrap/gh-pages/templates/agency/js/contact_me.js"></script>


<span style="height: 20px; width: 40px; min-height: 20px; min-width: 40px; position: absolute; opacity: 0.85; z-index: 8675309; display: none; cursor: pointer; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAUCAYAAAD/Rn+7AAADU0lEQVR42s2WXUhTYRjHz0VEVPRFUGmtVEaFUZFhHxBhsotCU5JwBWEf1EWEEVHQx4UfFWYkFa2biPJiXbUta33OXFtuUXMzJ4bK3Nqay7m5NeZq6h/tPQ+xU20zugjOxR/+7/O8539+5znnwMtNTExwJtMb3L/fiLv3botCSmUjeCaejTOb39AiFothfHxcFIrHY8RksZjBsckJcOIRMfFsHD/SsbExUYpnI8DR0dGUGjSb0byhEJp5Uqg5CTSzc2CQleJbMEj9/ywBcGRkJEk9DQqouEVQT1sK444yWI9UonmTjGqauVLEIlHa9x8lAMbj8SSpp0rwKGMVvg8P46vbg0C7na8z8JsMcgHe7jlEa+edRhiLy8n/TUMfu6EvLElk+U0WtGwrTrdfAGQf5J8iiK4LVzDU28t8JtMSocf8E+l68myaNFXm/6rXslLK7ay5TOunuRvZWpJuvwAYjUaTpOIWoquuAZ219RTaxKYp9BbjycoN5FvL9qH9TBX5rvoGdJythvXYSTxdtRnWylO/ZdqrLsGwszzhWQ593z2KlAwCYCQSSZJ6ehZ0W7bD9VBLgN0NCqr3qR7R2rBrL3pu3Sb/7nDlz2uy6cG0OXk0GTbZXzNp8trsPAQdTj6frlWzN2DcXZGKQQAMh8NJ6rpyHe+PnkCr/CAFdZyvpfpjuvkifLF9wIt1Wwlo0OHie1RvWrKa93RjzfzliTzPKz3ltB0/Tevmwp14wGUgHAzSOoUEwFAolFaaBSuhnslPRkJexUJtZ6v5HtUeLswl33n1BgEY5fvhs9sJ3FAiT+QYyyvoAQJuD0KBAFRTJNAuz5/s3gJgMBhMJwrVFRThM5tY5zUF/A4X1f2fvQTRLCuBreoim0YmAbqNJryvPEXeeq46kaNdkQ/1HCncbJKPs9ZSv2VHGfWsZ2hfkhKAfr8/pdxWKx4wwD69PmVfNSOL+lr2w+gYqHpWDtXt1xQ8AMlWU0e1lqLd/APRHoP8AJqWrQG9gYxcPMsvSJUvAA4MDKTUJ7MZLaVy8v+qT21tcDx/OemePr0RTkNrur4A6PP5xCgBsL+/X4wiQDpuuVxOeL1eMYmYeDY6sOp0z+B0OuHxeEQhxkJMFosJiSO/UinOI/8Pc+l7KKArAT8AAAAASUVORK5CYII=);"></span></body>
@endsection