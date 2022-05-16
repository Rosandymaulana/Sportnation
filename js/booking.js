$(document).ready(function () {
  var booking = document.getElementById("form-booking");
  booking.addEventListener("show.bs.modal", function (event) {
    var btn = $(event.relatedTarget),
      id = btn.data("id"),
      isi = btn.data("isi");

    $(editModalEl).find("#isian").val(isi);
    $(editModalEl).find("#id").val(id);
  });
});
