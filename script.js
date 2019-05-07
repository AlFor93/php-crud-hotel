function getGuest() {

  $.ajax({
    url: "allGuest.php",
    method: "GET",
    success: function(data) {

      var ospiti = JSON.parse(data);
      // console.log(ospiti);

      //seleziono il container
      var cont = $(".guest-cont");
      //leggo html del template
      var template = $("#box-template").html();
      //compilo
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < ospiti.length; i++) {
        var guest = ospiti[i];
        // console.log(ospite);
          //genero elemento
          var ospite = compiled({
              Guest_Name: guest.name + " " + guest.lastname
          });
          //appendo
          cont.append(ospite);
      }
    },
    error: function() {}

  });

}

function getPendingPayments() {

  $.ajax({
    url: "payment_status.php",
    method: "GET",
    success: function(data) {

      var pagamenti = JSON.parse(data);

      //seleziono il container
      var cont = $(".payment-cont");
      //leggo html del template
      var template = $("#payment-template").html();
      //compilo
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < pagamenti.length; i++) {
        var pagamento = pagamenti[i];
        console.log(pagamento);
          //genero elemento
          var pagamentoPendente = compiled({
              payment_status: pagamento.status ,
              price: pagamento.price
          });
          //appendo
          cont.append(pagamentoPendente);
      }
    },
    error: function() {}

  });

}
















function init() {

  getGuest();
  getPendingPayments();
}

$(document).ready(init);
