<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="_token" content="{{csrf_token()}}">
    <meta name="theme-color" content="#6c012d">
    <title>Love Calculator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" href="{{asset('assets/images/kopa.png')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body,html{
             min-height: 100%;
             font-family: sans-serif;
             max-width: 800px;
             margin:auto;
             overflow-x:hidden;
        }
        .bg{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            margin-bottom:5px;
            background-position: center;
            background-size: cover;
        }
        #submit{
            display: block;
            background-color: #400909;
            border-radius: 5px;
            text-decoration: none;
        }
        .bg-dashboard{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            margin-bottom: 5px;
            background-position: center;
            background-size: cover;
        }
        .bg-contact{
            background-image: url("{{ asset('assets/images/bg4.jpg') }}");
            background-position: center;
            background-size: cover;
        }
        #contact-link{
            color: white;
            text-decoration: none;
        }
        .form-control, .form-control:focus, .form-control:active {
           background-color: #faa7a7;
           border-color: #faa7a7;
         }
         .form-control::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #8b0000;
            opacity: 1; /* Firefox */
            font-size: 20px;
        }

        .form-control:-ms-input-placeholder { /* Internet Explorer 10-11 */
                    color: r#8b0000;
        }

        .form-control::-ms-input-placeholder { /* Microsoft Edge */
                    color: r#8b0000;
         }

         ::-moz-selection { /* Code for Firefox */
          color: white;
          background: red;
        }

        ::selection {
          color: white;
          background: red;
        }

        {{-- @media only screen and (max-width: 600px) { --}}
          /*.row {
            width:600px;
          }
        }*/
       
    </style>
</head>
<body style="overflow-x: hidden;">
    <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 text-center bg">
                    <h2 class="pb-3 pt-3 text-white">Love Calculator</h2>
                    <h5 class="pb-3 text-white">Find Secret Lover of your Friends using this Fake Love Calculator.</h5>
                    <ul class="text-white">
                       <li type="none">Redister and share your link.</li> 
                       <li type="none">Check your Friend's Secret Crush on your Secret link.</li>
                    </ul>
                    <div><img src="{{ asset('assets/images/kopa.png') }}" width="140px" alt=""></div>
                    <div class="pt-3 ml-5 mr-5 pb-5">
                        <form action="/love" method="post">
                            @csrf
                            <div class="pt-4">
                                <label for="" class="text-white">Name</label>
                                <input type="text"  name="name" class="form-control input" placeholder="Name" required="">
                            </div>
                            <div class="pt-3 pb-2">
                                <button id="submit" class="btn btn-dark pt-2 pb-2" style="width: 100%"> <span class="fa fa-heart"></span> <strong>&nbsp;&nbsp; Register &nbsp;&nbsp;<span class="fa fa-heart"></span> </strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--contact-->
            <div class="row">
               <div class="col-sm-12 pt-3 pb-3 bg-contact">
                  <div class="text-center text-white">
                    <a href="/contact" id="contact-link">My Contact</a>
                </div>
               </div>
            </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous">
            </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>