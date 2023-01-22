@extends('homepage.layouts.app')
 
@section('title', 'Homepage')

 
@section('content')
   
        @include('homepage.includes.navigation')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">“... the pleasures of vaping are distinct from those of smoking.”</h1>
                    <p class="lead fw-normal text-white-50 mb-0">– Esther Wang</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0168/4652/0384/products/314495394_444322381216819_6499638323517307181_n_1024x1024.jpg?v=1668319348" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Raspberry Lychee</h5>
                                    <!-- Product price-->
                                    ₱400
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://ph-test-11.slatic.net/p/78ebb1c24ec97fece9d3cd11d8dda18f.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Apple Lime</h5>

                                
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">₱600</span>
                                    ₱400
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>

                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0168/4652/0384/products/tobacco_480x.jpg?v=1669429315" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Mosmo Storm 6000 puffs</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">₱799</span>
                                    ₱500
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0507/3708/6660/products/BottleGreen.png?v=1672916029" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Geekvape B100 (Aegis Boost Pro 2) Kit 100W</h5>
                                    
                                    <!-- Product price-->
                                    ₱4999
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0477/0791/4398/products/IN_B_front_f5c05d6f-56da-497f-a253-46bafdd05b37_grande.png?v=1653354821" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Relx Infinity</h5>
                                    <!-- Product price-->
                                    <span class="text-muted text-decoration-line-through">₱1700</span>
                                    ₱1500
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0507/3708/6660/products/GEEKVAPEB10021700KIT-_4.jpg?v=1635328051" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Geekvape B100</h5>
                                    <!-- Product price-->
                                    ₱1599
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Sale badge-->
                            <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="https://images.tcdn.com.br/img/img_prod/1060396/kit_pod_aegis_boost_plus_3_em_1_geekvape_17307_1_2be96d174075340df91e0f87626f63c8.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Kit pod Aegis Boost Plus 3 em 1</h5>
                            
                                    <!-- Product price-->
                                    ₱1200
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0477/0791/4398/products/L1VzZXJzL3JlbHgvTGlicmFyeS9BcHBsaWNhdGlvbiBTdXBwb3J0L0RpbmdUYWxrTWFjLzI5Mjg5MzY1NjNfdjIvSW1hZ2VGaWxlcy85OTI4ODMwOC83OTEzNDAyOTExXzYyMTM4NjUwMTY2X0FydF9TaWRlXzMuanBn_600x600.jpg?v=1655708978" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Relx Artisan</h5>
                                   
                                    <!-- Product price-->
                                    ₱1650
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('homepage.includes.footer')
@endsection 