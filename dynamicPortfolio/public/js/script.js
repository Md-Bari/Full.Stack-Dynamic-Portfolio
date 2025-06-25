const title = "What Clients Say";
    let i = 0;
    const typedTitle = document.getElementById("typedTitle");
    typedTitle.innerHTML = "";
    function typeTitle() {
      if (i < title.length) {
        typedTitle.innerHTML += title.charAt(i);
        i++;
        setTimeout(typeTitle, 100);
      }
    }
    typeTitle();

    
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    });

    document.querySelectorAll('.testimonial-card').forEach(card => {
      observer.observe(card);
    });

    
    const cards = document.querySelectorAll('.testimonial-card');
    let currentIndex = 0;
    setInterval(() => {
      cards.forEach((card, index) => {
        card.style.display = index === currentIndex ? 'block' : 'none';
      });
      currentIndex = (currentIndex + 1) % cards.length;
    }, 4000);

    // 🌙 Toggle Dark Mode
    function toggleDarkMode() {
      document.body.classList.toggle('dark-mode');
    }