<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Gaejib Café</title>
        <link rel="icon" type="image/x-icon" href="{{asset('image/gaejib.jpg')}}" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" />
    </head>
    <body>
        <header>
            <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-upper text-primary mb-3">Dog Cafe, Rooftop Dog Park, Dog Pool & Day Care</span>
                <span class="site-heading-lower">Gaejib Café</span>
            </h1>
        </header>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="index.blade.php">Gaejib Café</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="/">Home</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset('about')}}">About</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset('booking')}}">Booking</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset('order')}}">Food Order</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="{{asset ('login')}}">Login</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    <!-- section list menu -->
    <section class="page-section book-table">
        <div class="container">
            <div class="cta-inner bg-faded text-center rounded">
                <h2 class="section-heading">Our Menu</h2>
                <h2 class="section-heading">Delicious & Refreshing</h2>

                <div class="item">
                    <img src="{{asset('image/products-02.jpeg')}}" alt="Mi-Sundae Oreo">
                    <div class="info">
                        <h2>★ Mi-Sundae Oreo</h2>
                        <p>Ice Cream Dengan Coklat Dan Taburan Oreo Yang Renyah</p>
                        <p class="price">18.000</p>
                    </div>
                    <div class="btn-container" id="mi-sundae-oreo">
                        <button class="btn" onclick="addItem('mi-sundae-oreo')">+</button>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('image/products-01.jpg')}}" alt="Berry Bean Sundae">
                    <div class="info">
                        <h2>Berry Bean Sundae</h2>
                        <p>Ice Cream Berpadu Dengan Red Bean Yang Lembut Serta Selai Strawberry</p>
                        <p class="price">18.000</p>
                    </div>
                    <div class="btn-container" id="berry-bean-sundae">
                        <button class="btn" onclick="addItem('berry-bean-sundae')">+</button>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('image/products-04.jpg')}}" alt="Lucky Sundae Chocolate">
                    <div class="info">
                        <h2>★ Lucky Sundae Chocolate</h2>
                        <p>Ice Cream Dengan Saus Chocolate Serta Kejutan Topping Dibawahnya</p>
                        <p class="price">18.000</p>
                    </div>
                    <div class="btn-container" id="lucky-sundae-chocolate">
                        <button class="btn" onclick="addItem('lucky-sundae-chocolate')">+</button>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('image/products-03.jpg')}}" alt="Mi-Sundae Boba">
                    <div class="info">
                        <h2>★ Mi-Sundae Boba</h2>
                        <p>Ice Cream Berpadu Dengan Pearl Yang Kenyal Serta Selai Brown Sugar</p>
                        <p class="price">18.000</p>
                    </div>
                    <div class="btn-container" id="mi-sundae-boba">
                        <button class="btn" onclick="addItem('mi-sundae-boba')">+</button>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('image/products-05.jpeg')}}" alt="Mango Sundae">
                    <div class="info">
                        <h2>Mango Sundae</h2>
                        <p>Ice Cream Vanilla Dengan Potongan Mangga Asli</p>
                        <p class="price">18.000</p>
                    </div>
                    <div class="btn-container" id="mango-sundae">
                        <button class="btn" onclick="addItem('mango-sundae')">+</button>
                    </div>
                </div>

                <div class="item">
                    <img src="{{asset('image/products-06.jpg')}}" alt="Ice Cream Black Tea">
                    <div class="info">
                        <h2>★ Ice Cream Black Tea</h2>
                        <p>Black Tea Dengan Ice Cream Lembut Di Atasnya</p>
                        <p class="price">15.000</p>
                    </div>
                    <div class="btn-container" id="ice-cream-black-tea">
                        <button class="btn" onclick="addItem('ice-cream-black-tea')">+</button>
                    </div>
                </div>

                <!-- payment button -->
                <div class="text-center mt-3">
                    <!-- button terhubung ke payment.html -->
                    <a href="{{asset('payment')}}"><button type="submit" class="btn btn-primary">Checkout</button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- end code payment button -->

        <!--Page section about our cafe-->
        <section class="page-section about-heading">  
            <div class="container">
                <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{asset('image/about_cafe.jpg')}}" alt="..." /> <!-- Gambar ilustrasi untuk halaman About -->
                <div class="about-heading-content">
                    <div class="row">
                        <div class="col-xl-9 col-lg-10 mx-auto">
                            <div class="bg-faded rounded p-5">
                                <h2 class="section-heading mb-4">
                                    <span class="section-heading-upper">Friendly Pets</span>
                                    <span class="section-heading-lower">Trusted Pets House</span>
                                </h2>
                                <p class="mb-3">Dengan adanya doggy dan piggy di kafe kami, kami meyakinkan anda dapat bermain dengan 
                                    mereka, kami menjamin bahwa mereka ramah dan sudah di vaksinasi. Kafe kami juga menyediakan banyak fasilitas. 
                                    Ada pet salon,  rooftop dog park, dan dog pool.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end code about our cafe -->

        <!-- footer-created by -->
        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; J&C 2024</p></div>
        </footer>

         <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> <!-- Memuat Bootstrap JavaScript -->
        <!-- Core theme JS-->
        <script src="{{asset('js/app.js')}}"></script>
        <!-- Memuat JavaScript untuk tema -->

        <!-- script fungsi button + di bagian menu  -->
    <script>
        function addItem(itemId) {
            const itemContainer = document.getElementById(itemId);
            itemContainer.innerHTML = `
                <button class="btn" onclick="removeItem('${itemId}')">-</button>
                <span class="count">1</span>
                <button class="btn" onclick="increaseItem('${itemId}')">+</button>
            `;
        }

        function removeItem(itemId) {
            const itemContainer = document.getElementById(itemId);
            const countElement = itemContainer.querySelector('.count');
            let count = parseInt(countElement.textContent);

            if (count > 1) {
                count--;
                countElement.textContent = count;
            } else {
                itemContainer.innerHTML = `
                    <button class="btn" onclick="addItem('${itemId}')">+</button>
                `;
            }
        }

        function increaseItem(itemId) {
            const itemContainer = document.getElementById(itemId);
            const countElement = itemContainer.querySelector('.count');
            let count = parseInt(countElement.textContent);
            count++;
            countElement.textContent = count;
        }
    </script>
    <!-- end code fungsi button + di bagian menu -->

</body>
</html>