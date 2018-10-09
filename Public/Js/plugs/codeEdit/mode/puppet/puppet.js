!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}(function(e){"use strict";e.defineMode("puppet",function(){function e(e,n){for(var t=n.split(" "),o=0;o<t.length;o++)i[t[o]]=e}function n(e,n){for(var t,i,o=!1;!e.eol()&&(t=e.next())!=n.pending;){if("$"===t&&"\\"!=i&&'"'==n.pending){o=!0;break}i=t}return o&&e.backUp(1),t==n.pending?n.continueString=!1:n.continueString=!0,"string"}function t(e,t){var a=e.match(/[\w]+/,!1),r=e.match(/(\s+)?\w+\s+=>.*/,!1),s=e.match(/(\s+)?[\w:_]+(\s+)?{/,!1),c=e.match(/(\s+)?[@]{1,2}[\w:_]+(\s+)?{/,!1),u=e.next();if("$"===u)return e.match(o)?t.continueString?"variable-2":"variable":"error";if(t.continueString)return e.backUp(1),n(e,t);if(t.inDefinition){if(e.match(/(\s+)?[\w:_]+(\s+)?/))return"def";e.match(/\s+{/),t.inDefinition=!1}return t.inInclude?(e.match(/(\s+)?\S+(\s+)?/),t.inInclude=!1,"def"):e.match(/(\s+)?\w+\(/)?(e.backUp(1),"def"):r?(e.match(/(\s+)?\w+/),"tag"):a&&i.hasOwnProperty(a)?(e.backUp(1),e.match(/[\w]+/),e.match(/\s+\S+\s+{/,!1)&&(t.inDefinition=!0),"include"==a&&(t.inInclude=!0),i[a]):/(\s+)?[A-Z]/.test(a)?(e.backUp(1),e.match(/(\s+)?[A-Z][\w:_]+/),"def"):s?(e.match(/(\s+)?[\w:_]+/),"def"):c?(e.match(/(\s+)?[@]{1,2}/),"special"):"#"==u?(e.skipToEnd(),"comment"):"'"==u||'"'==u?(t.pending=u,n(e,t)):"{"==u||"}"==u?"bracket":"/"==u?(e.match(/.*\//),"variable-3"):u.match(/[0-9]/)?(e.eatWhile(/[0-9]+/),"number"):"="==u?(">"==e.peek()&&e.next(),"operator"):(e.eatWhile(/[\w-]/),null)}var i={},o=/({)?([a-z][a-z0-9_]*)?((::[a-z][a-z0-9_]*)*::)?[a-zA-Z0-9_]+(})?/;return e("keyword","class define site node include import inherits"),e("keyword","case if else in and elsif default or"),e("atom","false true running present absent file directory undef"),e("builtin","action augeas burst chain computer cron destination dport exec file filebucket group host icmp iniface interface jump k5login limit log_level log_prefix macauthorization mailalias maillist mcx mount nagios_command nagios_contact nagios_contactgroup nagios_host nagios_hostdependency nagios_hostescalation nagios_hostextinfo nagios_hostgroup nagios_service nagios_servicedependency nagios_serviceescalation nagios_serviceextinfo nagios_servicegroup nagios_timeperiod name notify outiface package proto reject resources router schedule scheduled_task selboolean selmodule service source sport ssh_authorized_key sshkey stage state table tidy todest toports tosource user vlan yumrepo zfs zone zpool"),{startState:function(){var e={};return e.inDefinition=!1,e.inInclude=!1,e.continueString=!1,e.pending=!1,e},token:function(e,n){return e.eatSpace()?null:t(e,n)}}}),e.defineMIME("text/x-puppet","puppet")});