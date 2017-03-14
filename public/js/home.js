function typeWriter(text, n) {
  if (n < (text.length)) {
    $('.typed').html(text.substring(0, n+1));
    n++;
    setTimeout(function() {
      typeWriter(text, n)
    }, 100);
  }
}
$(function() {
  var text = $('.typed').html();
  typeWriter(text, 0);


  var mymap = L.map('map').setView([-16.504796, -68.129943], 19);

  L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
      attribution: 'TEDxUMSA'
  }).addTo(mymap);

  L.marker([-16.504796, -68.129943]).addTo(mymap)
      .bindPopup('Universidad Mayor de San Andrés')
      .openPopup();
});
