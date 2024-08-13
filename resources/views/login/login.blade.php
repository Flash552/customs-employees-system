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
            background-color: #492D82;
            color :#492D82;
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
            background-color : #492D82 !important;
            /* border: #fff solid 1px; */
            color :  #fff; !important;
        }
        main .btn:hover{
            width: 100%;
            background-color : #fff !important;
            /* border: #fff solid 1px; */
            color : #492D82; !important;

        }
        .text-muted{
            color: #fff !important;
            padding-top:320px  ;
        }
    </style>
</head>
<body  dir="rtl" >


<main class="form-signin">
    <div class="card ">
    <form class="m-3">
        <p for="exampleInputEmail1" class="text-center">تسجيل الدخول</p>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">بريد الكتروني</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
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
  
</form></div>
</main>





@include("layouts.footer-scripts")
</body>
</html>
    @section('scripts')
        <script>

        </script>
    @endsection

