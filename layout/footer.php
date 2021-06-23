<footer class="page-footer green lighten-2">
    <div class="footer-copyright">
        <div class="container">
            © 2019 Copyright Tebuku
        </div>
    </div>
</footer>
</body>
<<<<<<< HEAD
<script src="asset/js/jquery-2.1.1.min.js" charset="utf-8"></script>
<script src="asset/js/materialize.js" charset="utf-8"></script>
<script src="asset/js/init.js"></script>
=======
<script src="asset/js/materialize.js" charset="utf-8"></script>
<script type="text/javascript">
    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
        indicators: false,
        height: 600,
        transition: 600,
        interval: 3000
    });

    const navbar = document.querySelectorAll('.sidenav');
    M.Sidenav.init(navbar);

    const image = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(image);

    const select = document.querySelectorAll('select');
    M.FormSelect.init(select);

    const modal = document.querySelectorAll('.modal');
    M.Modal.init(modal);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
        scrollOffset: 10
    });
</script>

>>>>>>> f6bcc4595deaa8c819d2ec4275dd8983d04d8a01
</html>