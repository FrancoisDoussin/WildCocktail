const routes = require('../../public/js/fos_js_routes.json');
import Routing from '../../vendor/friendsofsymfony/jsrouting-bundle/Resources/public/js/router.min.js';

Routing.setRoutingData(routes);

document.getElementById("cocktail-selector").addEventListener("change", function (event) {
  fetch(Routing.generate('api_get_cocktail', { id: event.target.value }))
    .then(function (response) {
      return response.json();
    })
    .then(function (data) {
      let cocktailContent = document.getElementById("cocktail-content");
      cocktailContent.innerHTML = "";

      let h2 = document.createElement('h2');
      h2.innerHTML = data.name;

      let div = document.createElement('div');
      div.innerHTML = data.receipe;

      cocktailContent.appendChild(h2);
      cocktailContent.appendChild(div);
    })
});
