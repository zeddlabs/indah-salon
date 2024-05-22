<x-layouts.app title="Beranda">
  <x-hero />

  <x-layouts.partials.navbar />
  <!-- END nav -->

  {{-- {{ dd(auth('pelanggan')->user()->nama) }} --}}
  <x-sections.about />

  <x-sections.service />

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
