  <!-- ----------------------------- -->

  <!-- Web by Fachry Dwi Afriza | all rights reserved -->

  <!-- Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <!-- Navbar Autohide when scroll down and show when scroll up -->
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var prevScrollpos = window.pageYOffset;
      window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > currentScrollPos) {
          document.querySelector(".autohide").style.top = "0";
        } else {
          document.querySelector(".autohide").style.top = "-70px";
        }
        prevScrollpos = currentScrollPos;
      };
    });
  </script>
  <!-- Script End -->
  </body>

  </html>