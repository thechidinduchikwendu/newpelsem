document.addEventListener('DOMContentLoaded', () => {
    const slides = Array.from(document.querySelectorAll('.slide'));
    const dots = Array.from(document.querySelectorAll('.dot'));

    if (!slides.length) {
        return;
    }

    let index = 0;

    const setActive = (nextIndex) => {
        slides[index].classList.remove('active');
        dots[index]?.classList.remove('active');

        index = nextIndex;

        slides[index].classList.add('active');
        dots[index]?.classList.add('active');
    };

    const next = () => {
        const nextIndex = (index + 1) % slides.length;
        setActive(nextIndex);
    };

    const autoplay = setInterval(next, 4500);

    dots.forEach((dot, dotIndex) => {
        dot.addEventListener('click', () => setActive(dotIndex));
    });

    window.addEventListener('beforeunload', () => clearInterval(autoplay));
});
