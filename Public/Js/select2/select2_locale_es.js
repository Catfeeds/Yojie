!function(e){"use strict";e.fn.select2.locales.es={formatMatches:function(e){return 1===e?"Un resultado disponible, presione enter para seleccionarlo.":e+" resultados disponibles, use las teclas de dirección para navegar."},formatNoMatches:function(){return"No se encontraron resultados"},formatInputTooShort:function(e,r){var n=r-e.length;return"Por favor, introduzca "+n+" car"+(1==n?"ácter":"acteres")},formatInputTooLong:function(e,r){var n=e.length-r;return"Por favor, elimine "+n+" car"+(1==n?"ácter":"acteres")},formatSelectionTooBig:function(e){return"Sólo puede seleccionar "+e+" elemento"+(1==e?"":"s")},formatLoadMore:function(e){return"Cargando más resultados…"},formatSearching:function(){return"Buscando…"},formatAjaxError:function(){return"La carga falló"}},e.extend(e.fn.select2.defaults,e.fn.select2.locales.es)}(jQuery);