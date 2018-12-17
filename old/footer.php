</div>
<div class="footer">
  <div class="ticket">
    <h4 class="quote">”The greatest medicine of all is teaching people how not to need it”.</h4>
    <p class="writer">- Hippocrates -</p>
  </div>
  <p class="desc">
    wellowise is doing exactly that. To find out more about our plans and progress..
  </p>
  <a class="btn SignupBtn">Signup</a>
</div>


<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">WellOWise</h4>
      </div>
      <div class="modal-body">
        <p style="text-align:center;font-weight:600;color:#999;font-size:20px;padding:30px">Coming Soon..</p>
        <div class="form-group">
          <label for="">Signup for latest news:</label>
          <input type="email" placeholder="john@abc.com" class="form-control">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<!-- <button id="modalTrigger" type="button" class="btn btn-info btn-lg hidden" data-toggle="modal" data-target="#myModal">Open Modal</button> -->


<!-- Scripts -->
<script src="assets/js/particles.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="node_modules/sal.js/dist/sal.js"></script>

<!-- End-Scripts -->
<script type="text/javascript">
$( document ).ready(function() {
   setTimeout(function(){
     // $('#myModal').modal('toggle');
   }, 5000);
  $('[data-toggle="popover"]').popover();
  sal();

  $('.slider').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 1,
    centerMode:true,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ],
    prevArrow: '<div class="arrowLeft"><span class="fa fa-angle-left"></span><span class="sr-only">Prev</span></div>',
    nextArrow: '<div class="arrowRight"><span class="fa fa-angle-right"></span><span class="sr-only">Next</span></div>'
  });
});
particlesJS.load('particles-js', 'assets/particles.json', function() {
  console.log('callback - particles.js config loaded');
});

// window.onbeforeunload = bunload;
// function bunload(){
//   dontleave="Are you sure you want to leave?";
//   return dontleave;
// }

function openNav() {
  document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// window.addEventListener('beforeunload', function (e) {
//   // Cancel the event as stated by the standard.
//   e.preventDefault();
//   // Chrome requires returnValue to be set.
//   e.returnValue = 'jhuigi';
// });
</script>
<style media="screen">
body{position: relative;}

.section{
  padding:  100px;
}
.arrowLeft{
  position: absolute;
  left: 0;
  cursor: pointer;
  top: 30px;
  z-index: 99999;
  background: #999;
  padding: 10px;
}
.arrowRight{
  position: absolute;
  right: 0;
  cursor: pointer;
  top: 30px;
  z-index: 99999;
  background: #999;
  padding: 10px;
}

/* **************************  Mobile NAvigation ************************************* */
/* The side navigation menu */
.sidenav {
  height: 100%; /* 100% Full-height */
  width: 0; /* 0 width - change this with JavaScript */
  position: fixed; /* Stay in place */
  z-index: 9999; /* Stay on top */
  top: 0; /* Stay at the top */
  left: 0;
  background-color: #111; /* Black*/
  overflow-x: hidden; /* Disable horizontal scroll */
  padding-top: 60px; /* Place content 60px from the top */
  transition: 0.5s; /* 0.5 second transition effect to slide in the sidenav */
}

/* The navigation menu links */
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

/* When you mouse over the navigation links, change their color */
.sidenav a:hover {
  color: #f1f1f1;
}

/* Position and style the close button (top right corner) */
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

/* Style page content - use this if you want to push the page content to the right when you open the side navigation */
#main {
  transition: margin-left .5s;
  padding: 20px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.triggerBtn {

  display: block;
  font-size: 30px;
  cursor: pointer !important;
  color: #25c9f7;
  z-index: 9999;
  position: absolute;
}
</style>
