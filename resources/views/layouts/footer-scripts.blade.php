<script src="{{URL::asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{URL::asset('assets/js/indexPanel.js')}}"></script>
<script>
    document.onload = () => {
        let item = document.querySelector('.nav-link a[href="type_emp"]');
        if (item != null){
            item.click();
        }
    }

</script>
<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/cr-2.0.4/fh-4.0.1/kt-2.12.1/r-3.0.3/sc-2.4.3/sb-1.8.1/sl-2.1.0/sr-1.4.1/datatables.min.css" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-2.1.8/b-3.1.2/b-colvis-3.1.2/b-html5-3.1.2/b-print-3.1.2/cr-2.0.4/fh-4.0.1/kt-2.12.1/r-3.0.3/sc-2.4.3/sb-1.8.1/sl-2.1.0/sr-1.4.1/datatables.min.js"></script>
 <script>
    		new DataTable('#example', {

        layout: {
            topStart: {
                buttons: [ 'excel', 'print', 'colvis' ]
            }
        },scrollX: true


    });
    </script>

@yield('scripts')
