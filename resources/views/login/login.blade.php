@section('title')
    تسجيل الدخول
@endsection
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("layouts.head")
    <style>
        body{
            display: flex;
            justify-content: center;
            /* align-items: center; */
            /* height: 100vh; */
            padding-top: 120px;
            /* padding-bottom: 40px; */
            background-color: #1a4581;
            color : #fff;
        }
        img{
            /* padding: 0 20px 0 0 ; */
            /* margin: 0 20px 0 0  ; */
            width: 340px;
            padding: 20px;
        }
        main{
            width: 360px;
        }
        main .btn{
            width: 100%;
            background-color : #a59357 !important;
            /* border: #fff solid 1px; */
            color : #fff !important;
        }
        main .btn:hover{
            width: 100%;
            background-color : #D0BA6F !important;
            /* border: #fff solid 1px; */
            color : #fff !important;

        }
        .text-muted{
            color: #fff !important;
            padding-top:320px  ;
        }
    </style>
</head>
<body  dir="rtl" >


<main class="form-signin">
    <form>
        <img src="{{ asset('assets/images/long_customs.png') }}" alt=""  class="m-2 mt-5 mb-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">بريد الكتروني</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">كلمة السر</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check ">
      <input type="checkbox" class="form-check-input float-end" id="exampleCheck1">
      <label class="form-check-label me-4" for="exampleCheck1">ذكرني</label>
</div>

  <a href=""><button type="submit" class="btn ">تسجيل دخول</button></a>
  <p class="  text-muted text-center">© 2024 مصلحة جمارك الليبية </p>
</form>
</main>





@include("layouts.footer-scripts")
</body>
</html>
    @section('scripts')
        <script>

        </script>
    @endsection

