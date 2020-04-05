window.addEventListener('DOMContentLoaded', () => {
  [].forEach.call(document.querySelectorAll('.menu__toggle a'), (el) => {
    el.onclick = () => {
      console.log('blah');
      document.querySelector('.menu').classList.toggle('show');
    }
  });
});
