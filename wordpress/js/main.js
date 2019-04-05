window.onload = function() {

  const sections = document.querySelectorAll(".section");
  const light = document.querySelector(".light-toggle");
  var root = document.documentElement;
  const projectsLink = document.querySelector(".projects");
  const submenu = document.querySelector(".sub-menu");

  if(window.innerWidth >= 1050)
  sections.forEach((sec) => sec.style.height = window.innerHeight + "px");
  else
  sections.forEach((sec) => sec.style.minHeight = window.innerHeight + "px");

  function lightOn() {
    light.classList.replace("fa-sun", "fa-moon");
    root.style.setProperty('--color-primary', 'black');
    root.style.setProperty('--color-bg', '#fcfcfc');
    root.style.setProperty('--color-text', '#222020');
    root.style.setProperty('--color-accent', '#f6f6f6');
  }

  function lightOff() {
    light.classList.replace("fa-moon", "fa-sun");
    root.style.setProperty('--color-primary', 'white');
    root.style.setProperty('--color-bg', 'black');
    root.style.setProperty('--color-text', '#fcfcfc');
    root.style.setProperty('--color-accent', '#222020');
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

  let sectionIndex = 0;
  function keypressHandler(event) {
    event = event || window.event;
    if(event.keyCode == '38') {
      // up arrow
      sectionIndex = sectionIndex - 1 < 0 ? sectionIndex : --sectionIndex;
      sections.item(sectionIndex).scrollIntoView({
        behavior: 'smooth'
      });
      console.log("Executed key up, index : " + sectionIndex);
    } else if (event.keyCode == '40') {
      // down arrow
      sectionIndex = sectionIndex + 1 >= sections.length ? sectionIndex : ++sectionIndex;
      sections.item(sectionIndex).scrollIntoView({
        behavior: 'smooth'
      });
      console.log("Executed key down, index : " + sectionIndex);
    }
  }

  light.addEventListener("click", lightHandler);
  projectsLink.addEventListener("click", submenuHandler);
  document.addEventListener("keydown", keypressHandler);

}
