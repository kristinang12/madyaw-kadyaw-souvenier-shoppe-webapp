<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Butuan Souvenir Shop</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assetsa-homepage/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assetsa-homepage/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assetsa-homepage/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('assetsa-homepage/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetsa-homepage/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assetsa-homepage/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetsa-homepage/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assetsa-homepage/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assetsa-homepage/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assetsa-homepage/assets/css/style.css')}}" rel="stylesheet">
  <script src="myscripts.js"></script>

</head>

<body>

    
  <!-- ======= Header ======= -->
  <header id="header" class="fade-up ">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0 p-4"><a href="index.html">Madyaw Kadyaw Souvenier Shoppe<span>.</span></a></h1>

      <a href="/login" class="button btn btn-info">Login </a>

    </div>
  </header><!-- End Header -->

              <!-- ======= Hero Section ======= -->
  <section id="hero" class="flex align-items-center justify-content-center transition-all duration-400 p-4">
    <div class="container" data-aos="fade-up">


    </div>
  </section><!-- End Hero -->

  <main id="main" class="duration-300">

    

    <div class="row gy-4 mt-5 justify-content-center">
          <!-- ======= About Section ======= -->
    <section id="" class="about">
        <div class="container" data-aos="fade-up">

            
  
          <div class="row">
            <div class="container">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <div>
                        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content text-black" data-aos="fade-right" data-aos-delay="100">
                            <h3>Madyaw Kadyaw Souvenir Shoppe: Announcement</h3>
                            
                            
                            
                          </div>
                    </div>
                    <br>
                    <div class="table">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Header</th>
                                    <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Sub Header</th>
                                    <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Description</th>
                                    <th scope="col" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">Date Posted</th>
                                    
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($data as $data)
                                <tr scope="row">
                                    
                
                                    <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                      <a href = "{{url('/announcementpage')}}"class="btn btn-light">{{$data->header}}</a>
                                  </td>
                                    
                                    <td scope="row"class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->sub_header}}</td>
                                    <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->description}}</td>
                                    <td scope="row" class = "text-sm font-medium text-gray-900 px-6 py-4 text-left">{{$data->created_at}}</td>
                                  
                                    {{-- <th scope = "col"> <a href="{{ route('dashboard.announcementupdate', ['id' => $data->id]) }} "
                                      type="button" class="btn btn-success">Update</a></th>
                                    <th scope = "col"> <a href="{{ route('dashboard.delete', ['id' => $data->id]) }} "
                                      type="button" class="btn btn-danger">Delete</a></th> --}}
                                  </tr>


                                  
                                  @empty
                                    
                                  
                                
                                @endforelse
                                
                            </tbody>
                        </table>
                      

                </div>
                
                
                
            </div>
        </div>
            
          </div>
  
        </div>
      </section><!-- End About Section -->






        


    </div>


    


    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('assetsa-homepage/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assetsa-homepage/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assetsa-homepage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assetsa-homepage/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assetsa-homepage/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assetsa-homepage/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assetsa-homepage/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('assetsa-homepage/assets/js/main.js')}}"></script>

</body>

</html>