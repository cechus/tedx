function typeWriter(text, n) {
  if (n < (text.length)) {
    $('.test').html(text.substring(0, n+1));
    n++;
    setTimeout(function() {
      typeWriter(text, n)
    }, 100);
  }
}
$(function() {
  var text = $('.typed').html();
  typeWriter(text, 0);
});
  