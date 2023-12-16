
  <script src="javascript/jquery.min.js"></script>
  <script src="javascript/swiper-bundle.min.js"></script>
  <script src="javascript/bootstrap.min.js"></script>
  <script src="javascript/boostrap-select.min.js"></script>
  <script src="javascript/parallax.js"></script>
  <script src="javascript/jquery.nice-select.min.js"></script>
  <script src="javascript/countto.js"></script>
  <script src="javascript/wow.min.js"></script>
  <script src="javascript/swiper.js"></script>
  <script src="javascript/plugin.min.js"></script>
  <script src="javascript/jquery.cookie.js"></script>
  <script src="javascript/switcher1.js"></script>
  <script src="javascript/main.js"></script>
  <script>
  /*
 JS to toggle scroll axis styles
*/
const control = document.getElementById("direction-toggle");
const marquees = document.querySelectorAll(".marquee");
const wrapper = document.querySelector(".wrapper");

control.addEventListener("click", () => {
  control.classList.toggle("toggle--vertical");
  wrapper.classList.toggle("wrapper--vertical");
  [...marquees].forEach((marquee) =>
    marquee.classList.toggle("marquee--vertical")
  );
});

  </script>