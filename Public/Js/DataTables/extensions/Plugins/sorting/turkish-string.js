jQuery.extend(jQuery.fn.dataTableExt.oSort,{"turkish-pre":function(a){var r={"İ":"ib",I:"ia","Ş":"sa","Ğ":"ga","Ü":"ua","Ö":"oa","Ç":"ca",i:"ia","ı":"ia","ş":"sa","ğ":"ga","ü":"ua","ö":"oa","ç":"ca"};for(var t in r)a=a.split(t).join(r[t]).toLowerCase();return a},"turkish-asc":function(a,r){return r>a?-1:a>r?1:0},"turkish-desc":function(a,r){return r>a?1:a>r?-1:0}});