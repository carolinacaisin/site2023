<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <header>
        <a href="logo"></a>
        <nav class="navbar">
            <a class="active" href="#Home">Home</a>
            <a href="#About">About</a>
            <a href="#Menu">Menu & Pricing</a>
            <a href="#Review">Review</a>
            <a href="#Contact">Contact us</a>
        </nav>
        <div class="icons">
            <i class="fa fa-bars" id="menu-bars"></i>
            <i class="fa fa-heart"></i>
        </div>
    </header>


    <section class="home" id="Home">

        <div class="header-text">
            <h2 class="text">super crispy</h2>
            <h1>SweetArt Cakes</h1>
            <h2 class="text-1">the best cake in cahul</h2>
            <a href="https://www.youtube.com/watch?v=afRVhVrELvQ" class=" btn-1"> Read More</a>

        </div>


        <section class="about" id="About">
            <h2 class="sub-text">About us</h2>
            <h1 class="text">Welcome to SweetArt Cakes</h1>

            <div class="row">
                <div class="image">
                    <img src="imagine/about3.jpg" alt="">
                </div>
               
                <div class="content">
                    <h3>Bine ați venit pe SweetArt Cakes</h3>
                    <p>La SweetArt Cakes, găsiți o gamă diversificată de prăjituri, torturi personalizate, plăcinte și fursecuri, toate preparate cu cele mai fine ingrediente și cu o atenție deosebită la detalii. Fie că aveți o ocazie specială sau pur și simplu doriți să vă răsfățați, suntem aici pentru a satisface gusturile și preferințele dumneavoastră.Pe pagina noastră web veți găsi o experiență simplă și intuitivă de navigare, care vă permite să explorați produsele noastre și să faceți comenzi în doar câteva clicuri. Vom livra cu grijă și promptitudine comanda dumneavoastră la ușa dumneavoastră, astfel încât să vă puteți bucura de deliciile noastre proaspete și savuroase.</p>
                    <p>Vă invităm să vă alăturați comunității noastre de iubitori de dulce și să experimentați rafinamentul și bucuria gustului într-o formă inconfundabilă. La SweetArt Cakes, pasiunea și măiestria noastră se regăsesc în fiecare produs pe care îl oferim. Vă mulțumim pentru vizită și suntem bucuroși să vă aducem un strop de dulceață în viața dumneavoastră!</p>

                    <div class="icons-container">
                        <div class="icons">
                            <i class="fas fa-shipping-fast"></i>
                            <span>livrare gratuita</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-dollar-sign"></i>
                            <span>preț avantajos</span>
                        </div>
                        <div class="icons">
                            <i class="fas fa-headset"></i>
                            <span>sună gratuit</span>
                        </div>


                    </div>

                    <a href="{{ route('about') }}" class="btn2">vezi mai mult</a>
                </div>
            </div>

        </section>

        <!-- menu si preturi -->
        <section id="Menu" class="menu">
            <h2 class="sub-text">Menu & Pricing</h2>
            <h1 class="text">EXPLORE OUR SWEETART CAKES</h1>
            @yield('content')

        </section>

        <!-- Recenzi -->
        <section id="Review" class="review">
            <h2 class="sub-text">Menu & Pricing</h2>
            <h1 class="text">REVIEWS SWEETART CAKES</h1>
            <div class="box-contain">
                <!-- 1 -->
                <div class="box">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Am fost impresionat de selecția lor vastă de prăjituri și torturi delicioase. Fiecare produs pe care l-am încercat a fost proaspăt și plin de arome. Serviciul a fost prompt și amabil, iar atmosfera primitoare a făcut experiența și mai plăcută. Recomand cu căldură "SWEETART CAKES" pentru o experiență dulce de neuitat!</p>
                    <div class="user">
                        <img src="imagine/pic-1.png" alt="">
                        <div class="user-info">
                            <h3>Daniel Thompson</h3>
                            <span>satisfăcut</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
                <!-- 2 -->
                <div class="box">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>Am vizitat recent cofetăria "SWEETART CAKES" și am rămas impresionat de calitatea excepțională a prăjiturilor și a cafelei servite. Torturile lor personalizate sunt adevărate opere de artă și au un gust divin. Personalul a fost foarte amabil și atent la detalii. Este un loc minunat pentru a te răsfăța cu deserturi delicioase și pentru a petrece timp de calitate.</p>
                    <div class="user">
                        <img src="imagine/pic-2.png" alt="">
                        <div class="user-info">
                            <h3>Emma Davis</h3>
                            <span>satisfăcută</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>
                <!-- 3 -->
                <div class="box">
                    <div class="stars">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>"SWEETART CAKES" este o cofetărie care m-a impresionat prin prezentarea estetică și gustul rafinat al produselor lor. Am fost încântat de selecția variată de fursecuri, plăcinte și prăjituri fine. Personalul a fost prietenos și profesionist, oferindu-ne recomandări excelente. Atmosfera relaxantă și decorul elegant au contribuit la o experiență culinară de neuitat. Recomand cu drag "Delicii Cremoase" pentru o experiență indulgentă.</p>
                    <div class="user">
                        <img src="imagine/pic-3.png" alt="">
                        <div class="user-info">
                            <h3>Alex Johnson</h3>
                            <span>satisfăcut</span>
                        </div>
                    </div>
                    <span class="fas fa-quote-right"></span>
                </div>


            </div>
        </section>


        <section id="Contact" class="contact">
            <h2 class="sub-text">Contact us</h2>
            <h1 class="text"> SWEETART CAKES</h1>
            <!-- REGISTER ORDER -->
            @yield('form')

        </section>

        <section class="footer">
            <div class="box-container">
                <div class="box">
                    <h3>Location</h3>
                    <a href="#">Moldova Cahul </a>
                    <a href="#">Moldova Chisinau </a>
                    <a href="#">Moldova Leova </a>
                </div>
                <div class="box">
                    <h3>Links</h3>
                    <a href="#Home">Home</a>
                    <a href="#About">About</a>
                    <a href="#Menu">Menu & Pricing</a>
                    <a href="#Review">Review</a>
                    <a href="#Contact">Contact us</a>
                </div>
                <div class="box">
                    <h3>Contac info</h3>
                    <a href="#">+373 671 236 235</a>
                    <a href="#">+373 671 236 235</a>
                    <a href="#">SWEETARTCAKEScahul@gmail.com</a>
                    <a href="#">SWEETARTCAKEScantimir@gmail.com</a>
                </div>
                <div class="box">
                    <h3>Follow us</h3>
                    <a href="https://twitter.com/CakesSweetart" target="_blank">facebook</a>
                    <a href="https://www.facebook.com/sweetartbybecky/" target="_blank">twitter</a>
                    <a href="https://www.instagram.com/sweetartcakesandbakes/" target="_blank">instagram</a>
                </div>
            </div>
            <div class="credit">copyringht @ 2023 by <span>SWEETART CAKES</span></div>

        </section>


        <script src="{{asset('js/main.js')}}"></script>
</body>

</html>