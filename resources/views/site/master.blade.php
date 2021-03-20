@include('site.header.index')
    
    <!-- CONTEÚDO -->
        @yield('conteudo')
    <!-- FIM CONTEÚDO -->

    @include('site.rodape.index_contato')
    
    <!-- JAVA SCRIPT -->
    <script data-main="{{ asset('assets/js/min/app') }}" src="{{ asset('assets/js/require.js') }}"></script>
    <!-- FIM JAVA SCRIPT -->
    
    </body>
    <!-- FIM BODY -->
</html>
