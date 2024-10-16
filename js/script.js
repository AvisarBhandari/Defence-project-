function swiper(){
const swiper = new Swiper('.swiper', {
            loop: true,
            speed: 600,
            autoplay: {
              delay: 1000,
            },
            slidesPerView: 'auto',
            breakpoints: {
              320: {
                slidesPerView: 3,
                spaceBetween: 1,
              },
              480: {
                slidesPerView: 3,
                spaceBetween: 60,
              },
              640: {
                slidesPerView: 4,
                spaceBetween: 80,
              },
              992: {
                slidesPerView: 5,
                spaceBetween: 120,
              },
              1200: {
                slidesPerView: 6,
                spaceBetween: 120,
              },
            },
          });

          console.log(swiper);
        }


document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth',
        block: 'start'
      });
    });
  });


      function toggleAnswer(button) {
        const answer = button.querySelector('.anser');

        if (answer) {
          if (answer.classList.contains('show')) {
            answer.classList.remove('show');
            answer.style.height = '0'; // Reset height when hiding
            answer.style.opacity = '0'; // Reset opacity

            
          } else {
            answer.style.height = answer.scrollHeight + 'px'; // Set to the height of the content
            answer.classList.add('show');
            answer.style.opacity = '1'; // Make it fully opaque

            
          }
        }
      }

  function toggleRotationById(id) {
    // Get the element by id
    const element = document.getElementById(id);

    if (!element) {
      console.error('Element not found');
      return;
    }

    // Get the current rotation
    const style = window.getComputedStyle(element);
    const matrix = new WebKitCSSMatrix(style.transform);
    let currentRotation = Math.round(Math.atan2(matrix.b, matrix.a) * (180 / Math.PI));

    // Adjust the rotation value to a positive angle
    if (currentRotation < 0) {
      currentRotation += 360;
    }

    // Change rotation based on current value
    if (currentRotation === 0) {
      element.style.transform = 'rotate(270deg)';
    } else if (currentRotation === 270) {
      element.style.transform = 'rotate(0deg)';
    } else {
      console.warn('Element is not at the expected rotation of 0 or 270 degrees');
    }
  }

