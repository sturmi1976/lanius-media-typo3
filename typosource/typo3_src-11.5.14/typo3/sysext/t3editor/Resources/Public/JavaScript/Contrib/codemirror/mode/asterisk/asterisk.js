!function(e){"object"==typeof exports&&"object"==typeof module?e(require("../../lib/codemirror")):"function"==typeof define&&define.amd?define(["../../lib/codemirror"],e):e(CodeMirror)}((function(e){"use strict";e.defineMode("asterisk",(function(){var e=["exten","same","include","ignorepat","switch"],t=["#include","#exec"],n=["addqueuemember","adsiprog","aelsub","agentlogin","agentmonitoroutgoing","agi","alarmreceiver","amd","answer","authenticate","background","backgrounddetect","bridge","busy","callcompletioncancel","callcompletionrequest","celgenuserevent","changemonitor","chanisavail","channelredirect","chanspy","clearhash","confbridge","congestion","continuewhile","controlplayback","dahdiacceptr2call","dahdibarge","dahdiras","dahdiscan","dahdisendcallreroutingfacility","dahdisendkeypadfacility","datetime","dbdel","dbdeltree","deadagi","dial","dictate","directory","disa","dumpchan","eagi","echo","endwhile","exec","execif","execiftime","exitwhile","extenspy","externalivr","festival","flash","followme","forkcdr","getcpeid","gosub","gosubif","goto","gotoif","gotoiftime","hangup","iax2provision","ices","importvar","incomplete","ivrdemo","jabberjoin","jabberleave","jabbersend","jabbersendgroup","jabberstatus","jack","log","macro","macroexclusive","macroexit","macroif","mailboxexists","meetme","meetmeadmin","meetmechanneladmin","meetmecount","milliwatt","minivmaccmess","minivmdelete","minivmgreet","minivmmwi","minivmnotify","minivmrecord","mixmonitor","monitor","morsecode","mp3player","mset","musiconhold","nbscat","nocdr","noop","odbc","odbc","odbcfinish","originate","ospauth","ospfinish","osplookup","ospnext","page","park","parkandannounce","parkedcall","pausemonitor","pausequeuemember","pickup","pickupchan","playback","playtones","privacymanager","proceeding","progress","queue","queuelog","raiseexception","read","readexten","readfile","receivefax","receivefax","receivefax","record","removequeuemember","resetcdr","retrydial","return","ringing","sayalpha","saycountedadj","saycountednoun","saycountpl","saydigits","saynumber","sayphonetic","sayunixtime","senddtmf","sendfax","sendfax","sendfax","sendimage","sendtext","sendurl","set","setamaflags","setcallerpres","setmusiconhold","sipaddheader","sipdtmfmode","sipremoveheader","skel","slastation","slatrunk","sms","softhangup","speechactivategrammar","speechbackground","speechcreate","speechdeactivategrammar","speechdestroy","speechloadgrammar","speechprocessingsound","speechstart","speechunloadgrammar","stackpop","startmusiconhold","stopmixmonitor","stopmonitor","stopmusiconhold","stopplaytones","system","testclient","testserver","transfer","tryexec","trysystem","unpausemonitor","unpausequeuemember","userevent","verbose","vmauthenticate","vmsayname","voicemail","voicemailmain","wait","waitexten","waitfornoise","waitforring","waitforsilence","waitmusiconhold","waituntil","while","zapateller"];return{startState:function(){return{blockComment:!1,extenStart:!1,extenSame:!1,extenInclude:!1,extenExten:!1,extenPriority:!1,extenApplication:!1}},token:function(i,a){var r="";return i.eatSpace()?null:a.extenStart?(i.eatWhile(/[^\s]/),r=i.current(),/^=>?$/.test(r)?(a.extenExten=!0,a.extenStart=!1,"strong"):(a.extenStart=!1,i.skipToEnd(),"error")):a.extenExten?(a.extenExten=!1,a.extenPriority=!0,i.eatWhile(/[^,]/),a.extenInclude&&(i.skipToEnd(),a.extenPriority=!1,a.extenInclude=!1),a.extenSame&&(a.extenPriority=!1,a.extenSame=!1,a.extenApplication=!0),"tag"):a.extenPriority?(a.extenPriority=!1,a.extenApplication=!0,i.next(),a.extenSame?null:(i.eatWhile(/[^,]/),"number")):a.extenApplication?(i.eatWhile(/,/),","===(r=i.current())?null:(i.eatWhile(/\w/),r=i.current().toLowerCase(),a.extenApplication=!1,-1!==n.indexOf(r)?"def strong":null)):function(n,i){var a="",r=n.next();if(i.blockComment)return"-"==r&&n.match("-;",!0)?i.blockComment=!1:n.skipTo("--;")?(n.next(),n.next(),n.next(),i.blockComment=!1):n.skipToEnd(),"comment";if(";"==r)return n.match("--",!0)&&!n.match("-",!1)?(i.blockComment=!0,"comment"):(n.skipToEnd(),"comment");if("["==r)return n.skipTo("]"),n.eat("]"),"header";if('"'==r)return n.skipTo('"'),"string";if("'"==r)return n.skipTo("'"),"string-2";if("#"==r&&(n.eatWhile(/\w/),a=n.current(),-1!==t.indexOf(a)))return n.skipToEnd(),"strong";if("$"==r&&"{"==n.peek())return n.skipTo("}"),n.eat("}"),"variable-3";if(n.eatWhile(/\w/),a=n.current(),-1!==e.indexOf(a)){switch(i.extenStart=!0,a){case"same":i.extenSame=!0;break;case"include":case"switch":case"ignorepat":i.extenInclude=!0}return"atom"}}(i,a)},blockCommentStart:";--",blockCommentEnd:"--;",lineComment:";"}})),e.defineMIME("text/x-asterisk","asterisk")}));