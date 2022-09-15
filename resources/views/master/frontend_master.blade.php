<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <link rel="stylesheet" href="{{asset('frontend/owl/owl/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/owl/owl/css/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{asset('frontend/owl/owl/css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" /></head>

<body>
    <section class="">
        <div class="bg-gray-200 flex justify-between items-center py-4 px-2 md:px-5 lg:px-10 ">
            <div>
                <a href="{{url('/')}}"><span class="font-bold">MMITSOFT</span></a>
            </div>
            <div class="hidden lg:block">
                <ul class="flex">
                    <li class="px-4 py-1 cursor-pointer"><a href="{{url('/')}}">Home</a></li>
                    <li class="px-4 py-1 cursor-pointer">About</li>
                    <li class="px-4 py-1 cursor-pointer"><a href="{{route('frontend.course')}}">Courses</a></li>
                    <li class="px-4 py-1 cursor-pointer">Contact Us</li>
                </ul>
            </div>
            <div class="visible lg:hidden cursor-pointer" onclick="hamberGrad()">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
            <div>
                <ul class="flex ">
                    <li class="px-3 hover:text-blue-500" ><a href="{{route('frontend.admission')}}">Admission</a></li>
                     <div class="flex justify-center items-center mt-1" style="width: 1px; height:20px; background-color:white"></div>
                    <li class="px-3 hover:text-blue-500"><a href="">Payment</a></li>
                    <div class="flex justify-center items-center mt-1" style="width: 1px; height:20px; background-color:white"></div>
                    <li class="px-3 hover:text-blue-500"><a href="{{route('login')}}">Sign In</a></li>
                </ul>
            </div>
        </div>


        <div class="bg-gray-100 text-gray-800">
            <ul class="hidden py-2" id="hamber">
                <li class="ml-6 text-xl mb-2 cursor-pointer hover:text-orange-500">Home</li>
                <div class="flex justify-center items-center mt-1 w-full" style=" height:1px; background-color:white"></div>
                <li class="ml-6 text-xl my-2 cursor-pointer hover:text-orange-500">About</li>
                <div class="flex justify-center items-center mt-1 w-full" style=" height:1px; background-color:white"></div>
                <li class="ml-6 text-xl my-2 cursor-pointer hover:text-orange-500">Course</li>
                <div class="flex justify-center items-center mt-1 w-full" style=" height:1px; background-color:white"></div>
                <li class="ml-6 text-xl my-2 cursor-pointer hover:text-orange-500">Contact Us</li>
                <div class="flex justify-center items-center mt-1 w-full" style=" height:1px; background-color:white"></div>

            </ul>
        </div>
    </section>


    @yield('frontend')



    <section class="w-full bg-gray-800 text-white py-10">
        <div class="mx-4 sm:mx-10 md:mx-24 xl:mx-56 text-center">
            <div class="pt-8">
                <span class="text-3xl font-bold">MM IT Soft</span>
            </div>
            <div class="mt-5">
                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat natus deleniti incidunt sequi nobis, omnis, nostrum doloribus explicabo quasi, perspiciatis rerum illo fuga quia dolorem facilis consectetur tenetur consequuntur sapiente.</span>
            </div>
            <div class="flex justify-center mt-5">
                <div class="px-2 py-1 text-blue-500 hover:text-white border-2 cursor-pointer border-blue-500 rounded-full mx-4">
                    <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="px-2 py-1 text-blue-500 hover:text-white border-2 cursor-pointer border-blue-500 rounded-full mx-4">
                    <i class="fa-brands fa-twitter"></i>
                </div>
                <div class="px-2 py-1 text-blue-500 hover:text-white border-2 cursor-pointer border-blue-500 rounded-full mx-4">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="px-2 py-1 text-blue-500 hover:text-white border-2 cursor-pointer border-blue-500 rounded-full mx-4">
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('frontend/owl/owl/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/owl/owl/js/owl.carousel.min.js')}}"></script>

    <script>
        $('.owl-carousel-slide').owlCarousel({
            items: 1,
            loop: true,
            margin: 10,
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
            }
        })
    </script>

    <script>
        // package item
        $('#owl_team').owlCarousel({
            loop:true,
            margin:10,
            nav:false,
            autoplay:true,
            autoplaySpeed:100,
            smartSpeed:50,
            // responsiveClass:true,
            responsive:{

                0:{
                    items:1
                },
                600:{

                    items:3
                },
                1000:{

                    items:4
                }
            }
        })

        var owl = $('.package-item');
        owl.owlCarousel();
        $('.customNextBtn').click(function() {
            owl.trigger('next.owl.carousel');
        })
        $('.customPrevBtn').click(function() {
            owl.trigger('prev.owl.carousel', [300]);
        })
    </script>


<script>
    function hamberGrad() {
      var hamber = document.getElementById("hamber");
      if (hamber.classList.contains("hidden")) {
        hamber.classList.add("block");
        hamber.classList.remove("hidden");
      } else {
        hamber.classList.add("hidden");
        hamber.classList.remove("block");
      }
    }
  </script>
           


</body>

</html>
