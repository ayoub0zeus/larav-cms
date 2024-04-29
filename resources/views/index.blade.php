<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Personal Portfolio</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/bg-icon.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css')}}"  rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

            @foreach ($contents as $content)
        
    
    <!-- Header content Start -->
    <div class="container-fluid bg-light my-6 mt-0" id="home">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 py-6 pb-0 pt-lg-0">
                    <h3 class="text-primary mb-3">I'm</h3>
                    <h1 class="display-3 mb-3"> {{$content->username}} </h1>
                    <h2 class="typed-text-output d-inline"></h2>
                    <div class="typed-text d-none"> {{$content->job}} </div>
                    <div class="d-flex align-items-center pt-5">
                        <a href="#" class="btn btn-primary py-3 px-4 me-5">Download CV</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h5 class="ms-4 mb-0 d-none d-sm-block">Play Video</h5>
                    </div>
                </div>
                <div class="col-lg-6">
                    {{-- @dd($content->image) --}}
                    {{-- <img class="img-fluid" src="{{ asset('storage/' . $content->image) }}" alt=""> --}}
                    <img class="img-fluid" src="{{ Storage::url($content->image) }}" alt="">

                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Header End -->


    


    <!-- Expertise Start -->
    <div class="container-xxl py-6 pb-5" id="skill">
        <div class="container">
            <div class="row g-5">
                {{-- edit skills  --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h1 class="display-5 mb-5">Skills & Experience</h1>
                    <h3 class="mb-4">My Skills</h3>
                    @foreach ($skills as $skill)
                    <div class="row align-items-center">
                            <div class="skill mb-4">
                                <div class="d-flex justify-content-between">
                                    
                                    <h6 class="font-weight-bold">{{$skill->skills}} </h6>
                                    <h6 class="font-weight-bold">{{$skill->skills_perstentage}}  %</h6>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-{{$skill->skills_color}}" role="progressbar" aria-valuenow="{{$skill->skills_perstentage}}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>                        
                    </div>
                    @endforeach
                </div>
                {{-- skills  --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <ul class="nav nav-pills rounded border border-2 border-primary mb-5">
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5 active" data-bs-toggle="pill" href="#tab-1">Experience</button>
                        </li>
                        <li class="nav-item w-50">
                            <button class="nav-link w-100 py-3 fs-5" data-bs-toggle="pill" href="#tab-2">Education</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        {{-- start Experience --}}
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row gy-5 gx-4">
                                @foreach ($experiences as $experience)
                                <div class="col-sm-6">
                                    <h5>{{$experience->Exprience_name}} </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{$experience->Exprience_date}}</p>
                                    <h6 class="mb-0">{{$experience->Exprience_company}}</h6>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- end Experience --}}

                        {{-- start Education  --}}
                        <div id="tab-2" class="tab-pane fade show p-0">
                            <div class="row gy-5 gx-4">
                                @foreach ($educations as $education)
                                <div class="col-sm-6">
                                    <h5> {{$education->Education_name}} </h5>
                                    <hr class="text-primary my-2">
                                    <p class="text-primary mb-1">{{$education->Education_years}} </p>
                                    <h6 class="mb-0">{{$education->Education_company}} </h6>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        {{-- end Education  --}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Expertise End -->

    @foreach ($contents as $content)
    <!-- Contact Start -->
    <div class="container-xxl pb-5" id="contact">
        <div class="container py-5">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <div class="col-lg-6">
                    <h1 class="display-5 mb-0">Contact Me </h1>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <a class="btn btn-primary py-3 px-5" href="#">Say Hello</a>
                </div>
            </div>
            <div class="row g-5">
                {{-- <div class="col-lg-12 col-md-12 wow fadeInUp" data-wow-delay="0.1s"> --}}
                <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="mb-2">My office:</p>
                    <h3 class="fw-bold">{{$content->adress}} </h3>
                    <hr class="w-100">
                    <p class="mb-2">Call me:</p>
                    <h3 class="fw-bold">{{$content->phone}} </h3>
                    <hr class="w-100">
                    <p class="mb-2">Mail me:</p>
                    <h3 class="fw-bold">{{$content->email}} </h3>
                    <hr class="w-100">
                   
                </div>
                <div class="col-lg-7 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->




    <!-- Copyright Start -->
    <div class="container-fluid bg-dark text-white py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom text-secondary" href="#">Portofolio Maker</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom text-secondary" href="#">A-D --DEV201--</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

            @endforeach

    <!-- Copyright End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('lib/typed/typed.min.js')}}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js')}}"></script>
</body>

</html>