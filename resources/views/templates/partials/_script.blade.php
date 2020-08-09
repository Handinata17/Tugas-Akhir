    <script src="{{ asset('template/js/jquery.min.js')}}"></script>
    <script src="{{ asset('template/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('template/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{ asset('template/js/metismenu.min.js')}}"></script>
    <script src="{{ asset('template/js/waves.js')}}"></script>
    <script src="{{ asset('template/js/feather.min.js')}}"></script>
    <script src="{{ asset('template/js/jquery.slimscroll.min.js')}}"></script>

    <script src="{{ asset('template/plugins/tinymce/tinymce.min.js')}}"></script>
    <script src="{{ asset('template/pages/jquery.form-editor.init.js')}}"></script>
    <script src="{{ asset('template/js/app.js')}}"></script>

    <!-- <script src="{{ asset('template/pages/jquery.validation.init.js')}}"></script> -->
    <!-- App js -->
    <!-- <script src="{{ asset('template/js/jquery.core.js')}}"></script> -->

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
        $(function() {
          $('#daterange').daterangepicker();
        });
    </script>

    @yield('script')
