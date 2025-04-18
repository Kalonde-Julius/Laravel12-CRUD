<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title> Laravel 12 CRUD with Blade </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <Link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />

    <Link rel="stylesheet" href="{{ url('style.css')}}" />
  </head>

  <body>

    <div class="container">

        @yield('content')

    </div>



  </body>

  <foot>
    <div class="copyright text-center pt-3">
        &copy; <a href="https://kalonde-julius.github.io/Kalonde22"> <strong> Kalonde Julius</strong> </a>
    </div>

    <div class="flex flex-column text-center pt-3 justify-between">

        <a href="https://github.com/Kalonde-Julius" 
            class="button flex-col-6 mx-3">
            <i class="fab fa-github"></i>
       </a>

        <a href="https://x.com/SeguyaGavillia" 
            class="button flex-col-6 mx-3">
            <i class="fab fa-twitter"></i>
        </a>

        <a href="https://www.facebook.com/kalonde.julius/" 
            class="button flex-col-6 mx-3">
            <i class="fab fa-facebook"></i>          
        </a>

        <a href="https://ug.linkedin.com/in/kalonde-julius-seguya-51a9904b" 
            class="button flex-col-6 mx-3">
            <i class="fa-brands fa-linkedin"></i>           
        </a>

        <a href="https://www.youtube.com/@kalondejulius6887" 
            class="button flex-col-6 mx-3">
            <i class="fa-brands fa-youtube"></i>
        </a>

     </div>

  </foot>
</html>

