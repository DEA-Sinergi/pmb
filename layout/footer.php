<footer class="page-footer green lighten-2">
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright Tebuku
        </div>
    </div>
</footer>
</body>
<script src="asset/js/materialize.js" charset="utf-8"></script>
<script type="text/javascript">
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 500,
        transition: 600,
        interval: 3000
    });

    const navbar = document.querySelectorAll('.sidenav');
    M.Sidenav.init(navbar);

    const image = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(image);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
        scrollOffset: 10
    });
</script>

</html>