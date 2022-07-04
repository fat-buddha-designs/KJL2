/*-- Fastclick --*/
import attachFastClick from 'fastclick';

/*-- Components --*/
import './components/logger.js';

/*-- Dark Mode Switcher --*/
var themeSwitcher = document.querySelector('.theme--switcher input');
var currentTheme = localStorage.getItem('theme');
if (currentTheme) {
  document.documentElement.setAttribute('data-theme', currentTheme);
  if (currentTheme === 'light') {
    themeSwitcher.checked = true;
  }
}
function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute('data-theme', 'dark');
    localStorage.setItem('theme', 'dark');
  } else {
    document.documentElement.setAttribute('data-theme', 'light');
    localStorage.setItem('theme', 'light');
  }
}
themeSwitcher.addEventListener('change', switchTheme, false);


/*-- foundation call --*/
$(document).foundation();


/*-- Lazy Loading Images --*/
var lazy = document.getElementsByClassName('lazy');

for(var i=0; i<lazy.length; i++){
 lazy[i].src = lazy[i].getAttribute('data-src');
}

/* - Reading Time - */
function readingTime() {
  const text = document.getElementById("reading--block").innerText;
  const wpm = 225;
  const words = text.trim().split(/\s+/).length;
  const time = Math.ceil(words / wpm);
  document.getElementById("time").innerText = time;
}
readingTime();
