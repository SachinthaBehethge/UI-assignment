document.addEventListener("DOMContentLoaded", () => {
  const randomText = texts[Math.floor(Math.random() * texts.length)];
  document.getElementById("random-message").innerText = randomText;





  document.querySelectorAll(".counter").forEach(counter => {
    const updateCount = () => {
      const target = +counter.getAttribute("data-count");
      const count = +counter.innerText;
      const increment = target / 200;
      if(count < target) {
        counter.innerText =  Math.ceil(count + increment);
        setTimeout(updateCount, 10);
      } else {
        counter.innerText = target;
      }
    }
    updateCount();
  });



  const swiper = new Swiper('.swiper', {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: false,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      320: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 }
    }
  });
});