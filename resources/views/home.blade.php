<x-layouts.app title="{{ $title }}">
  <x-hero />

  <x-layouts.partials.navbar />
  <!-- END nav -->

  <x-sections.about />

  <x-sections.service :services="$services" />

  <x-sections.product />

  <x-sections.contact />

  <x-layouts.partials.footer />

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const navItems = document.querySelectorAll('.nav-item');

      navItems.forEach(navItem => {
        navItem.addEventListener('click', function() {
          navItems.forEach(navItem => {
            navItem.classList.remove('active');
          });

          navItem.classList.add('active');
        });
      });
    });
  </script>
</x-layouts.app>
