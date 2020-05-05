function addNavigationButtonEvent(){
  const navButton = document.getElementById("primary-navigation-button");
  const navMenuContainer = document.getElementById("primary-nav-container");
  const navMenu = document.getElementById("primary-navigation");
  const delay = getTransitionDelay();
  
  navButton.addEventListener("click", () => {
    let menuIsOnScreen = navButton.classList.contains("change");
    navButton.classList.toggle("change");
    toggle(menuIsOnScreen);
  });

  function toggle(onScreen){
    let menuFunctions =  ()=>{
      navMenu.classList.toggle("hide-right");
      navMenu.classList.toggle("show-right");
    }
    let containerFunctions = ()=>{
      navMenuContainer.classList.toggle("hidden-mobile");
      navMenuContainer.style.top = document.getElementsByTagName("header")[0].offsetHeight + "px";
    }
    let timeOut = onScreen ? delay : 0;
    onScreen ? menuFunctions():containerFunctions();
    setTimeout(()=>{
      onScreen ? containerFunctions():menuFunctions();
      if(onScreen) navMenuContainer.style.removeProperty("top");
    },timeOut);

  }

  function getTransitionDelay(){
    const menuStyle = getComputedStyle(navMenu);
    let delay = menuStyle.getPropertyValue("transition-duration");
    delay = delay.replace('s', '');
    delay = parseFloat(delay);
    return delay * 1000;
  }
}

document.addEventListener("DOMContentLoaded", function() {
  addNavigationButtonEvent();
  
});