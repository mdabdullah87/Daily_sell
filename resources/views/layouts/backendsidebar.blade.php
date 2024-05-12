    <!-- side bar start here  -->
    <div id="layoutSidenav" class="border rounded m-1">
        <div id="layoutSidenav_nav" class="border rounded">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link bg-nav bg bg" href="{{ route('dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                     
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                            data-parent="#sidenavAccordion">
                           
                        </div>
                        <a class="nav-link bg-nav bg bg collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                            aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Products
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                            data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">

                              
                                <a class="nav-link bg-nav bg bg" href="{{ route('category.all') }}">Categories</a>
                                <a class="nav-link bg-nav bg bg" href="{{ route('product.all') }}">Products</a>
                                <a class="nav-link bg-nav bg bg" href="{{ route('product.buy') }}">Buy</a>

                                <a class="nav-link bg-nav bg bg" href="{{ route('product.sellproduct') }}">Sell</a>

                                <a class="nav-link bg-nav bg bg" href="{{ route('customer.customers') }}">Customers</a>

                                <a class="nav-link bg-nav bg bg" href="{{ route('suplier.all') }}">Add Suplier</a>
                               
                           
                            </nav>
                        </div>
                        <a class="nav-link bg-nav bg bg" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                            Blank
                        </a>
                        <a class="nav-link bg-nav bg" href="#">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Setting
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Admin
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content" class="bg-light border rounded">
            <main>
                <!-- MAIN CINTAIN START HERE  -->



                @yield('content')



                <!-- MAIN CINTAIN END HERE  -->
            </main>
            <footer class="border rounded">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; shojib khan</div>
                        <div>
                            <a class="text-decoration-none text-dark" href="#">Privacy Policy</a>
                            &middot;
                            <a class="text-decoration-none text-dark" href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>