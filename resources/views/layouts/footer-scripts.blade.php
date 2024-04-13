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

@yield('scripts')
