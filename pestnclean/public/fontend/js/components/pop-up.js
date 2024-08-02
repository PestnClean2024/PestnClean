document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('close-button').addEventListener('click', function() {
      document.getElementById('overlay').style.display = 'none';
    });
  });
  function redirectTo(url) {
    window.location.href = url;
}  