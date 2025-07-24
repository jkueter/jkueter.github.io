window.onload = function () {
    breadcrumbdisplay();
  };

  function breadcrumbdisplay() {
    var breadCrumbContainer = document.querySelector('#breadcrumbcontain');
    var crumbsArray = ["home", "user"];
    breadCrumbContainer.innerHTML = getCrumbs(crumbsArray);
  }
  function getCrumbs(crumbsArray) {
    var breadCrumbs = '';
    var crumbPrefix = "&nbsp &gt &nbsp";
    crumbsArray.forEach(function (crumb, index) {
      if (index !== 0) breadCrumbs += crumbPrefix;
      breadCrumbs += crumb;
    });
    return breadCrumbs;
  }