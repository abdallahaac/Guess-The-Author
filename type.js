if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

setTimeout(function () {
  const element = document.getElementById("errorMessage");
  element.style.visibility = "hidden";
}, 3000);
