<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


  </head>
  <body style="background-image: url('Picture/bg.jpg');">
        <div class="container center-container">
            <div class="row" class="container center-containerInnr" style="border: 5px solid rgb(5, 178, 247)">
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div class="card card-style1 border-0">
                        <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4 mb-lg-0">
                                    <img src="Picture/avatar7.jpg" class="rounded-circle" width="400px" height="400px" style="border: 5px solid rgb(5, 178, 247)">
                                </div>
                                <div class="col-lg-6 px-xl-10" style="border: 3px solid rgb(5, 178, 247)">
                                        <h3 class="h2 text-black mb-0" >PROFILE</h3><br>
                                    <ul class="list-unstyled mb-1-9">
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">Nama:</span> I Gede Made Rapriananta Pande</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">NIM:</span> 2205551005</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">Status:</span> Mahasiswa</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">Program Studi:</span> S1 Teknologi Informasi</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">Hobi:</span> Gaming, Coding</li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">Email:</span> <a class="gmail" href= "mailto:panderapriananta@gmail.com">panderapriananta@gmail.com</a></li>
                                        <li class="mb-2 mb-xl-3 display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">Alamat:</span> Jl. Poh Gading no.11 Jimbaran</li>
                                        <li class="display-28"><span class="display-26 text-dark me-2 font-weight-600 fw-bold">No.Handphone:</span> 081236766002</li>
                                    </ul></div>

                                    <!--Icon-->
                                    <div class="col-6 align-items-center">
                                    <ul class="social-icon-style1 mb-0 ps-0">
                                        <li class="d-inline"><a href="https://www.facebook.com/profile.php?id=61550769371207" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li class="d-inline"><a href="https://www.instagram.com/raprianantapande/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                                        <li class="d-inline"><a href="https://github.com/MadRapz" target="_blank"><i class="fa-brands fa-github"></i></a></li>
                                    </ul></div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-4 mb-sm-5">
                    <div>
                        <!--Kolom Project-->
                        <span class="section-title text-primary mb-3 mb-sm-4">PROJECT</span>
                        <ol class="list-group list-group-numbered">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                <div class="fw-bold">Project 1</div>
                                Input Form
                              </div>
                              <span class="badge bg-primary rounded-pill"><a class="project" href="formulir/create" >View</a></span>
                            </li>

                            <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                <div class="fw-bold">Project 2</div>
                                Data Formulir
                              </div>
                              <span class="badge bg-primary rounded-pill"><a class="project" href="/formulir" >View</a></span>
                            </li>
                            
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                              <div class="ms-2 me-auto">
                                <div class="fw-bold">Project 3</div>
                                -
                              </div>
                              <span class="badge bg-primary rounded-pill"><a class="project" href="#" target="_blank">x</a></span>
                            </li>
                          </ol>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>