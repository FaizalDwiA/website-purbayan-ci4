<!-- Scripts publik -->
<script>
  // Mobile menu toggle
  (function () {
    var buttons = document.querySelectorAll('.wp-block-navigation__responsive-container-open');
    var closes  = document.querySelectorAll('.wp-block-navigation__responsive-container-close, [data-micromodal-close]');
    buttons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var target = document.getElementById(btn.getAttribute('data-micromodal-trigger'));
        if (target) target.classList.toggle('is-menu-open');
      });
    });
    closes.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var containers = document.querySelectorAll('.wp-block-navigation__responsive-container');
        containers.forEach(function (c) { c.classList.remove('is-menu-open'); });
      });
    });
  })();
</script>
