<!DOCTYPE html>
<html>
<head>
	<title>Beauty Pets</title>
  <link rel="stylesheet" href="{{asset('css/logout.css')}}">
   <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top
        }, 1000);
      }
    });
  });
</script>

	<header>
  <img src="{{ asset('image/home.jpg') }}" class="home-section">
  <nav>
  <ul>
  <li><a class="active" href="#home">Home</a></li>
    <li><a class="active" href="#about">About Us</a></li>
    <li><a class="active" href="#services">Services</a></li>
    <a class="active logo" href="#"><img src="{{ asset('image/logo.png') }}" alt="logo"></a>
    <li><a class="active" href="#album">Album</a></li>
    <li><a class="active" href="#faq">FAQS</a></li>
    <li><a class="active" href="#contact">Contact Us</a></li>
    <li class="auth">
    @auth
        <form id="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" id="logout" class="button">Logout</button>
        </form>
    @else
        <a href="{{ route('login') }}" class="button">Log in</a>
        <a href="{{ route('register') }}" class="button">Register</a>
    @endauth
</li>

<!-- include jQuery and sweetalert -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    $(document).ready(function() {
        $('#booking-form').submit(function(event) {
            event.preventDefault();
            var form = $(this);
            $.ajax({
                url: form.attr('action'),
                type: form.attr('method'),
                data: form.serialize(),
                success: function(response) {
                    swal({
                        title: "Success",
                        text: "Thank you for your Booking!",
                        icon: "success",
                        button: "OK",
                        timer: 30000 // add delay of 30 seconds
                    }).then(function() {
                        form.trigger('reset');
                    });
                },
                error: function(error) {
                    swal({
                        title: "Error",
                        text: "An error occurred while submitting your Booking.",
                        icon: "error",
                        button: "OK",
                    });
                }
            });
        });

        $(document).on("click", "#logout", function(e) {
            e.preventDefault();
            var form = $(this).closest('form');
            swal({
                title: 'Confirm!',
                text: 'Are you sure you want to logout?',
                icon: 'warning',
                buttons: ["Cancel", "Logout"],
                dangerMode: true,
            }).then(function(willLogout) {
                if (willLogout) {
                    form.submit();
                }
            });
        });
    });
</script>

  </ul>
</nav>
<script>
  window.addEventListener('scroll', function() {
  var nav = document.querySelector('nav');
  var logo = document.querySelector('.logo');
  var auth = document.querySelector('.auth');
  nav.classList.toggle('scrolled', window.scrollY > 0);
  logo.classList.toggle('scrolled', window.scrollY > 0);
  auth.classList.toggle('scrolled', window.scrollY > 0);
});
</script>
<script>
  // Add smooth scrolling to all links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});
</script>
	</header>
  <section id="home">
  <div class="background">
  </div>
  <div class="container-home">
    <h1 id="BPGS">Beauty Pets Grooming Service!</h1>
    <h2 id="ypd">YOUR PET DESERVES TO BE PAMPERED</h2>
  </div>
</section>

<div style="display: flex;">
  <section id="about" style="flex-basis: 60%;">
    <div class="container-about">
      <h2>At Uptown Pet Grooming Inc.,
        we pride ourselves in going the extra mile to serve
        our clients and their pets.</h2><br>
      <p>We provide a safe and relaxed environment because the health and well-being of your pet is our number one priority.</p>
      <p>Taking the time necessary to do it right, we ensure your pet has an enjoyable grooming experience with each visit</p>
      <p>When it comes to grooming, each dog is different.</p>
      <p>Our professional groomers specialize in offering the haircut that suits the needs of your individual pet.</p>
      <p>We offer a full-range of grooming services to pamper your pooch.</p>
      <p>You and your furry friend will adore their new look!.</p>
    </div>
  </section>
  
  <section id="info" style="flex-basis: 40%;">
    <div class="container-info">
      <h2 id="info" style="text-transform: uppercase;">INFO</h2><br>
      <p>We welcome small to medium sized breeds</p><br>
      <h2 id="phone" style="text-transform: uppercase;">PHONE NUMBER</h2><br>
      <p>09763362960</p><br>
      <h2 id="hours" style="text-transform: uppercase;">HOURS</h2><br>
      <p>M closed</p><br>
      <p>T-W 9 a.m. to 5 p.m.</p><br>
      <p>Th 12 p.m. to 8 p.m.</p><br>
      <p>F 9 a.m. to 5 p.m.</p><br>
      <p>Sa 9 a.m. to 5 p.m.</p><br>
      <p id="sunday-info" style="color: red;">Sunday closed</p><br>
      <p id="holiday-info" style="color: red;">*Holidays may affect listed hours.</p><br>
    </div>
  </section>
</div>



	<section id="services">
  <div class="container-services">
    <h2>We use only high quality products that suit the needs of your pet and our professional groomers are experienced with all types of clips. Choose from any of our spa packages or select from our à la carte menu listed below.</h2><br>
    <br>
    <div class="row">
      <div class="col-md-6">
        <h1 style="color: #CF7F06;">SERVICES</h1><br>
        <ul>
          <li>
            <h2>BEAUTY BATH & BEAUTY BRUSH</h2><br>
            <p>This package is ideal to rejuvenate your dog’s coat between visits. Your dog will enjoy a double-wash bath and blow dry followed by a brush-out to remove tangles and help prevent matting. Includes nail clipping and ear cleaning.</p>
          </li>
          <li>
            <h2>BEAUTY GROOM (BEST OF THE BEST)</h2><br>
            <p>Our Beauty Groom package begins with a shampoo and tearless, organic, hypoallergenic, baby powder scented facial, followed by a relaxing double-wash bath and hands-on fluff dry. A customized haircut, gentle ear cleaning, paw-pad trim, nail trim and brush-out complete this uptown package.</p>
          </li>
          <li>
            <h2>BEAUTY HOME SERVICE</h2><br>
            <p>Our Beauty Home Service begins with customer of choices in our Services or à la carte menu. with free shower for our besties and with 2 bottles of perfume so they can smell good. our service fee is free.</p>
          </li>
        </ul>
      </div>
      <div class="col-md-6">
        <h1 style="color: #CF7F06;">À LA CARTE</h1><br>
        <ul>
          <li>
            <h2>NAIL TRIMMING</h2><br>
            <p>Nails are trimmed to keep your pet’s paws healthy. Available for cats, dogs, rabbits, and guinea pigs.</p>
          </li>
          <li>
            <h2>EAR CLEANING AND PLUCKING</h2><br>
            <p>To prevent infections and odours, the hair around the ears is cleaned with our natural, hypoallergenic products and trimmed to allow for better ventilation.</p>
          </li>
          <li>
            <h2>ANAL GLAND ESPRESSION</h2><br>
            <p>Anal glands are expressed to prevent discomfort and eliminate foul odours.</p>
          </li>
          <li>
            <h2>NAIL GRINDING</h2><br>
            <p>Performed after a nail trim, your dog’s nails are filed to soften the edges of the nails.</p>
          </li>
          <li>
            <h2>TEETH BRUSHING</h2><br>
            <p>To prevent infections and odours, the hair around the ears is cleaned with our natural, hypoallergenic products and trimmed to allow for better ventilation.</p>
          </li>
          <li>
            <h2>SPECIALIZED PRODUCTS</h2><br>
            <p>Choose from our specialized shampoos and conditioners.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>


<section id="album">
  <div class="container-album">
    <div class="box">
      <img src="{{ asset('image/1.jpg') }}" alt="Picture 1">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
    <div class="box">
      <img src="{{ asset('image/2.jpg') }}" alt="Picture 2">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
    <div class="box">
      <img src="{{ asset('image/3.jpg') }}" alt="Picture 3">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
    <div class="box">
      <img src="{{ asset('image/4.jpg') }}" alt="Picture 4">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
    <div class="box">
      <img src="{{ asset('image/5.jpg') }}" alt="Picture 5">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
    <div class="box">
      <img src="{{ asset('image/6.jpg') }}" alt="Picture 6">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
    <div class="box">
      <img src="{{ asset('image/7.jpg') }}" alt="Picture 7">
      <div class="overlay">
        <p>Beauty Pets</p>
      </div>
    </div>
  </div>
</section>
<script>
  const carousel = document.querySelector(".container-album");
const boxes = carousel.querySelectorAll(".box");
const prevBtn = document.querySelector("#prev");
const nextBtn = document.querySelector("#next");
let currentIndex = 0;
const boxWidth = boxes[0].offsetWidth;

function showBox(index) {
  if (index < 0) {
    index = boxes.length - 1;
  } else if (index > boxes.length - 1) {index = 0;
}

currentIndex = index;

const distanceToTranslate = currentIndex * -boxWidth;

carousel.style.transform = translateX(${distanceToTranslate}px);
}

function handlePrev() {
showBox(currentIndex - 1);
}

function handleNext() {
showBox(currentIndex + 1);
}

showBox(currentIndex);
</script>
</section>

<section id="faq">
  <div class="container-faq">
    <h1>QUESTIONS + ANSWERS!!</h1>
    <p>DO YOU HAVE QUESTIONS? WE HAVE ANSWERS.</p>
    <div class="row">
      <div class="col-md-6">
        <h2>What can I expect on our first visit?</h2><br>
        <p>On your first visit to the salon, please ensure your pet is up-to-date on their rabies vaccinations. Proof is required.</p><br>
	    <h2>Can I wait for my dog?</h2><br>
    <p>Most dogs become excited when they see their owners and might become stressed or anxious if they can’t immediately go to them. To avoid extra excitement or stress for the dog, we recommend you do not stay while your dog is being groomed or bathed.</p><br>
    
    <h2>Do you accept all dogs?</h2><br>
    <p>We welcome dogs of all sizes and breeds.</p><br>
    
  </div>
  <div class="col-md-6">
    <h2>How much does grooming cost?</h2><br>
    <p>Grooming prices depend on the size and breed of the dog.</p><br>
    
    <h2>How often should I have my dog groomed?</h2><br>
    <p>Your dog should be groomed every 6 to 8 weeks.</p><br>
    
    <h2>Do I need to make an appointment?</h2><br>
    <p>Dogs with extremely matted hair, very thick coats or temperamental personalities may be subject to supplementary charges if additional time and extra care is required. If we determine your dog’s coat is too severely matted, we will suggest it be clipped instead to avoid undue pain or discomfort to the dog.</p><br>
    
    <h2>How long does it take?</h2><br>
    <p>Grooming time depends on the size and breed of the dog, as well as the services requested. When you arrive for your appointment, we will do our best to give you an approximate pick-up time. Generally speaking, you should expect to leave your dog with us between 2 to 4 hours.</p><br>
  </div>
</div>
</div>
</section>


<section id="contact">
  <div class="container">
    <div id="contact-wrapper">
      <section id="contact-left">
        <div class="container">
        <h2>Book Now!!</h2>
        <form method="POST" id="booking-form" action="{{ route('bookings.store') }}">
          @csrf

          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>

          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
          </div>

          <div class="form-group">
            <label for="date">Date</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>

          <div class="form-group">
            <label for="time">Time</label>
            <input type="time" class="form-control" id="time" name="time" required>
          </div>

          <div class="form-group">
            <label for="service">Service</label>
            <select class="form-control" id="service" name="service">
              <option value="BEAUTY BATH & BEAUTY BRUSH">BEAUTY BATH & BEAUTY BRUSH</option>
              <option value="BEAUTY GROOM">BEAUTY GROOM</option>
              <option value="BEAUTY HOME SERVICE">BEAUTY HOME SERVICE</option>
              <option value="NAIL TRIMMING">NAIL TRIMMING</option>
              <option value="EAR CLEANING AND PLUCKING">EAR CLEANING AND PLUCKING</option>
              <option value="ANAL GLAND ESPRESSION">ANAL GLAND ESPRESSION</option>
              <option value="NAIL GRINDING">NAIL GRINDING</option>
              <option value="TEETH BRUSHING">TEETH BRUSHING</option>
              <option value="SPECIALIZED PRODUCTS">SPECIALIZED PRODUCTS</option>
            </select>
          </div>

          <div class="form-group">
            <label for="notes">Notes</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
</body>

</html>
