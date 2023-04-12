const scrollToTopBtn = document.querySelector('#scroll-top');

scrollToTopBtn.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
  });
});
