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
<script src="https://code.jquery.com/jquery-3.7.1.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js" ></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js" ></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.bootstrap5.js" ></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/dataTables.buttons.js" ></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.bootstrap5.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js" ></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.html5.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.print.min.js" ></script>
    <script src="https://cdn.datatables.net/buttons/3.0.1/js/buttons.colVis.min.js" ></script>
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
