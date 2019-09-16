const signInBtn = document.querySelector('.sign-in');
const signUpBtn = document.querySelector('.sign-up');
const container = document.querySelector('.container');

signInBtn.addEventListener('click', () => {
  container.classList.remove('active');
});

signUpBtn.addEventListener('click', () => {
  container.classList.add('active');
});