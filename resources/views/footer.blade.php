
@include('auth.register')

<footer class="container">
    <div class="row">

        @if (!Auth::user())
            @yield('register-form')
        @endif

        <div class="footer-bottom">
            <span>© Dominican Life Style</span>
        </div>
    </div>
</footer>



