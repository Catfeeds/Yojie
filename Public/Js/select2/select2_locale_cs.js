!function(e){"use strict";var n={2:function(e){return e?"dva":"dvě"},3:function(){return"tři"},4:function(){return"čtyři"}};e.fn.select2.locales.cs={formatNoMatches:function(){return"Nenalezeny žádné položky"},formatInputTooShort:function(e,t){var o=t-e.length;return 1==o?"Prosím zadejte ještě jeden znak":4>=o?"Prosím zadejte ještě další "+n[o](!0)+" znaky":"Prosím zadejte ještě dalších "+o+" znaků"},formatInputTooLong:function(e,t){var o=e.length-t;return 1==o?"Prosím zadejte o jeden znak méně":4>=o?"Prosím zadejte o "+n[o](!0)+" znaky méně":"Prosím zadejte o "+o+" znaků méně"},formatSelectionTooBig:function(e){return 1==e?"Můžete zvolit jen jednu položku":4>=e?"Můžete zvolit maximálně "+n[e](!1)+" položky":"Můžete zvolit maximálně "+e+" položek"},formatLoadMore:function(e){return"Načítají se další výsledky…"},formatSearching:function(){return"Vyhledávání…"}},e.extend(e.fn.select2.defaults,e.fn.select2.locales.cs)}(jQuery);