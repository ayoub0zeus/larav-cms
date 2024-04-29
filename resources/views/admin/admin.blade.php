<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Edit Dashboard</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="{{ asset('img/icon.png')}}" rel="icon">


    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}} " rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}} " rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}} " rel="stylesheet">
    <link href="{{asset('vendor/quill/quill.snow.css')}} " rel="stylesheet">
    <link href="{{asset('vendor/quill/quill.bubble.css')}} " rel="stylesheet">
    <link href="{{asset('vendor/remixicon/remixicon.css')}} " rel="stylesheet">
    <link href="{{asset('vendor/simple-datatables/style.css')}} " rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>

<body>
    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                {{-- <a class="nav-link collapsed" href="{{route('home' ,['id' => $content->id])}}"> --}}
                    <a class="nav-link collapsed" href="/admin/1/edit">
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Edit informaton Personnel</span>
                </a>
            </li>
            <a class="nav-link collapsed" href="{{ route('showskills')}}">
                <i class="bi bi-puzzle"></i>
                <span>Edit Skills</span>
            </a>
            
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('showExperience')}} ">
                    <i class="bi bi-trophy"></i>
                    <span>Edit L'Experience </span>
                </a>
            </li>
            

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('showEducation')}} ">
                    <i class="bi bi-book"></i>
                    <span>Edit L'Education</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">

                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                        <button class="logout" type="submit"><i class="bi bi-power" style="color: white;"></i>Logout</button>
                    </form>
                    

                </a>
            </li>
        </ul>
    </aside>

    <!-- End Sidebar-->
    <main id="main" class="main">
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body">
                            @yield('content')
                        </div>
                    </div>
        </section>        
    </main>
    <script src="assets/js/main.js"></script>
</body>
</html>
