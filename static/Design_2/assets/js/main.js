window.onload = function() {

  const sections = document.querySelectorAll(".section");
  const light = document.querySelector(".light-toggle");
  var root = document.documentElement;
  const projectsLink = document.querySelector(".projects");
  const submenu = document.querySelector(".sub-menu");

  sections.forEach((sec) => sec.style.height = window.innerHeight + "px");

  function lightOn() {
    light.classList.replace("fa-sun", "fa-moon");
    root.style.setProperty('--color-bg', '#fcfcfc');
    root.style.setProperty('--color-text', '#222020');
  }

  function lightOff() {
    light.classList.replace("fa-moon", "fa-sun");
    root.style.setProperty('--color-bg', 'black');
    root.style.setProperty('--color-text', '#fcfcfc');
  }

  var lightMode = false;
  function lightHandler() {
    if(lightMode) lightOff();
    else lightOn();
    lightMode = !lightMode;
  }

  var submenuOn = false;
  function submenuHandler() {
    if(submenuOn) {
      submenu.style.display = "none";
      submenuOn = false;
    } else {
      submenu.style.display = "inherit";
      submenuOn = true;
    }
  }


  light.addEventListener("click", lightHandler);
  projectsLink.addEventListener("click", submenuHandler);
  window.addEventListener('scroll', function(e){
    e.preventDefault();
    e.stopPropagation();
    return false;
  });
}
