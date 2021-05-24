<!DOCTYPE html>
<html lang="pt">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="{{ url('assets/css/main.min.css') }}">
      <title>MUNDO DA LUZINHA</title>

</head>

<body>
      <div id="app">
            <div class="faixa"></div>
            <div class="header">
                  <div class="container">
                        <div class="row menu">
                              <div class="">
                                    <div>
                                          <img src="{{ url('assets/img/icons/menu.svg') }}" alt="">
                                    </div>
                              </div>
                              <div class="">
                                    <div class="logo">
                                          <img src="{{ url('assets/img/logo.png') }}" alt="">
                                    </div>
                              </div>
                              <div class="">
                                    <div>
                                          <img src="{{ url('assets/img/icons/user.svg') }}" alt="">
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>


             @yield('content')



            <div class="footer">
                  <div class="row menu py-4">
                        <div>
                              <img src="{{ url('assets/img/icons/casa.svg') }}" alt="">
                        </div>
                        <div>
                              <img src="{{ url('assets/img/icons/chat.svg') }}" alt="">
                        </div>
                        <div>
                              <img src="{{ url('assets/img/icons/camera.svg') }}" alt="">
                        </div>
                        <div>
                              <img src="{{ url('assets/img/icons/livro.svg') }}" alt="">
                        </div>
                        <div>
                              <img src="{{ url('assets/img/icons/tambor.svg') }}" alt="">
                        </div>
                  </div>
      
            </div>
      </div>


      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js">
      </script>
</body>

</html>