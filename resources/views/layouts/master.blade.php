<!DOCTYPE html>
<html lang="en">
<head>
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/sp-2.3.0/sl-2.0.0/datatables.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/sp-2.3.0/sl-2.0.0/datatables.min.js"></script>
      @include('layouts.head')

</head>
<body dir="rtl">
    <div class="page">
        @include('layouts.sideBar')
        <div id="hide"></div>
        <div class="content">
            @include('layouts.main-headerBar')
            @yield('content')
        </div>
    </div>

    @include('layouts.footer-scripts')

    <script>
        $(document).ready( function () {
            $('#tablejs').DataTable();
        } );
        </script>
    {{-- <script>
     new DataTable('#tablejs');
    </script> --}}
</body>
</html>


