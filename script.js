document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('loaded');
    const swiper = new Swiper(".mySwiper", {
        effect: "cube",
        grabCursor: true,
        loop: true,
        cubeEffect: {
            shadow: true,
            slideShadows: true,
            shadowOffset: 20,
            shadowScale: 0.94,
        },
        pagination: { el: ".swiper-pagination", clickable: true },
    });
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.parallax-content').forEach((element) => observer.observe(element));
    const tiltElement = document.querySelector('.scroll-tilt-description');
    const rect = tiltElement.getBoundingClientRect();
    const width = tiltElement.offsetWidth;
    const height = tiltElement.offsetHeight;
    const centerX = rect.left + width/2;
    const centerY = rect.top + height/2;

    const handleMouseMove = (e) => {
        const mouseX = e.clientX - centerX;
        const mouseY = e.clientY - centerY;
        
        const rotateX = (mouseY / height * 15).toFixed(2);
        const rotateY = (mouseX / width * -15).toFixed(2);
        
        tiltElement.style.transform = `
            perspective(1000px)
            rotateX(${rotateX}deg)
            rotateY(${rotateY}deg)
        `;
    };

    const resetTilt = () => {
        tiltElement.style.transform = 'perspective(1000px) rotateX(0) rotateY(0)';
    };

    tiltElement.addEventListener('mousemove', handleMouseMove);
    tiltElement.addEventListener('mouseout', resetTilt);
});

document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('loaded');
    const tooltip = document.getElementById('tooltip');
    document.querySelectorAll('.product-card').forEach(card => {
        card.addEventListener('mouseenter', e => {
            const name = card.getAttribute('data-name');
            const desc = card.getAttribute('data-desc');
            const thumb = card.getAttribute('data-thumb');
            tooltip.innerHTML = `<h4 class=\"font-semibold mb-1\">${name}</h4><p class=\"text-sm\">${desc}</p>`;
            tooltip.classList.add('visible');
        });
        card.addEventListener('mousemove', e => {
            tooltip.style.top = (e.clientY + 15) + 'px';
            tooltip.style.left = (e.clientX + 15) + 'px';
        });
        card.addEventListener('mouseleave', () => {
            tooltip.classList.remove('visible');
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.body.classList.add('loaded');
    
    const animatedElements = document.querySelectorAll('.hover-scale');
    animatedElements.forEach(el => {
        el.style.transition = 'transform 0.3s ease, opacity 0.3s ease';
    });
});