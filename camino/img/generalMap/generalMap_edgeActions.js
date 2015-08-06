/***********************
* Acciones de composición de Adobe Edge Animate
*
* Editar este archivo con precaución, teniendo cuidado de conservar 
* las firmas de función y los comentarios que comienzan con "Edge" para mantener la 
* capacidad de interactuar con estas acciones en Adobe Edge Animate
*
***********************/
(function($, Edge, compId){
var Composition = Edge.Composition, Symbol = Edge.Symbol; // los alias más comunes para las clases de Edge

   //Edge symbol: 'stage'
   (function(symbolName) {
      
      
      Symbol.bindElementAction(compId, symbolName, "${santi}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.google.com/maps/place/Santiago+de+Compostela,+A+Coru%C3%B1a,+Spain/@42.8802049,-8.5447697,14z/data=!3m1!4b1!4m2!3m1!1s0xd2efe44e2dd71a7:0xe0146888c087e311", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${sarria}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.google.com/maps/place/Sarria,+Lugo,+Spain/@42.7789661,-7.4114961,15z/data=!3m1!4b1!4m2!3m1!1s0xd3048097fbf82ad:0x9004c74b09000a64", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${porto}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.google.com/maps/place/27170+Portomar%C3%ADn,+Lugo,+Spain/@42.8081693,-7.6164439,17z/data=!3m1!4b1!4m2!3m1!1s0xd302e2b247d7d65:0xd2e8841fc395301a", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${palas}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.google.com/maps/place/27200+Palas+de+Rei,+Lugo,+Spain/@42.8744952,-7.8684764,17z/data=!3m1!4b1!4m2!3m1!1s0xd2fd4833bc446ff:0xec492e37a0acc43", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${arzua}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.google.com/maps/place/Arz%C3%BAa,+A+Coru%C3%B1a,+Spain/@42.9295187,-8.2234306,11z/data=!3m1!4b1!4m2!3m1!1s0xd2e4a5b7e9baedd:0x1173c0cb3ed03f7d", "_blank");
         

      });
      //Edge binding end

      Symbol.bindElementAction(compId, symbolName, "${pedro}", "click", function(sym, e) {
         // introducir aquí código para clic de ratón
         // Ir a una nueva dirección URL en una nueva ventana
         // (sustituya "_blank" por el atributo de destino correspondiente)
         window.open("https://www.google.com/maps/place/15687+Pedrouzo,+A+Coru%C3%B1a,+Spain/@42.9985693,-8.5073039,18z/data=!3m1!4b1!4m2!3m1!1s0xd2ef83e0a39b40f:0x6f4eaf4e303ce484", "_blank");
         

      });
      //Edge binding end

   })("stage");
   //Edge symbol end:'stage'

})(window.jQuery || AdobeEdge.$, AdobeEdge, "mapadelcamino");