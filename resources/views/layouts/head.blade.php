<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.css" rel="stylesheet">
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.js"></script>
<!-- Icon -->
<link rel="icon" href="images/cropped-fav_icon-32x32.png">
<link rel="shortcut" href="images/cropped-fav_icon-32x32.png">
<link rel="apple-touch" href="images/cropped-fav_icon-32x32.png">
<!-- Google Fonts 'Work sans' -->
<link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap"
    rel="stylesheet">
<!-- Main File CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/controlPanel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
<!-- Bootstrap File CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Normalize File CSS -->
<link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
<!-- Font Awesome Library -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<title>@yield('title')</title>

{{-- datatables --}}
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

<link
    href="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.css"
    rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script
    src="https://cdn.datatables.net/v/dt/jszip-3.10.1/dt-2.0.2/af-2.7.0/b-3.0.1/b-colvis-3.0.1/b-html5-3.0.1/b-print-3.0.1/datatables.min.js">
</script> --}}
<link href="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.css" rel="stylesheet">
 
<script src="https://cdn.datatables.net/v/dt/dt-2.0.2/datatables.min.js"></script>
<script>
 new DataTable('#tablejs');
</script>

{{-- datatables --}}
@yield('css')
