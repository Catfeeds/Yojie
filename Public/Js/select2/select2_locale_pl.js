!function(n){"use strict";function t(n,t,e){var o="";return n>1&&5>n?o=e:(0==n||n>=5)&&(o="ów")," "+n+" "+t+o}n.fn.select2.locales.pl={formatNoMatches:function(){return"Brak wyników"},formatInputTooShort:function(n,e){return"Wpisz co najmniej"+t(e-n.length,"znak","i")},formatInputTooLong:function(n,e){return"Wpisana fraza jest za długa o"+t(n.length-e,"znak","i")},formatSelectionTooBig:function(n){return"Możesz zaznaczyć najwyżej"+t(n,"element","y")},formatLoadMore:function(n){return"Ładowanie wyników…"},formatSearching:function(){return"Szukanie…"}},n.extend(n.fn.select2.defaults,n.fn.select2.locales.pl)}(jQuery);