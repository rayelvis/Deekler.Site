{"changed":true,"filter":false,"title":"cms.blade.php","tooltip":"/resources/views/admin/template/partials/cms.blade.php","value":"<div class=\"container\">\n\t<div class=\"col-md-6\">\n\t\t<div class=\"col-md-6 col-md-offset-3\">\n\t\t\t<img src=\"/extra/theme/img/services/CMS_Icon.png\" class=\"pull-center\"> \n\t\t</div>\n\t\t<div class=\"col-md-12\">\n\t\t\t<h1 style=\"border-bottom: dashed 2px #eee;\"><b>CRM </b> <small>Customer Relationship Management</small></h1>\n\t\t\t<p>Es una soluciÃ³n informÃ¡tica creada para organizar la estrategia comercial y relaciÃ³n con los clientes o potenciales clientes de una empresa. CRM es una estrategia de negocios dirigida a entender, anticipar y responder a las necesidades de los clientes actuales y potenciales de una empresa para poder hacer crecer el valor de la relaciÃ³n. La metodologÃ­a  del software <br >CRM es Es utilizar la soluciÃ³n de software CRM para poder organizar, automatizar, sincronizar todos aquellos procesos de negocio, <br> principalmente de servicio de atenciÃ³n al cliente, soporte,<br> asÃ­ como para llevar a cabo ventas.</p><br>\n\t\t\t<a href=\"/\">Back to deekler</a>\n\t\t</div>\t\n\t\n\t</div>\n\t<div class=\"col-md-6\" >\n\t\t<div class=\"col-md-12 \">\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t<br>\n\t\t\t\n\t\t\t<h1 class=\"contact-form-t pull-right\">\n\t\t\t\t<b>Contact Us &nbsp &nbsp</b>\n\t\t\t</h1>\n\t\t</div>\n\t\t\n\n<div class=\"col-md-8 col-md-offset-3\">\n    {!! Form::open([\"route\"=>\"contact.contact.store\", \"method\"=>\"post\", \"id\"=>\"contactForm\",\"class\"=>\"form-horizontal\"]) !!}\n\n\n\t\n  <div class=\"form-group contact-form-icon\">\n      <div class=\"col-md-6\">\n        <i class=\"fa fa-user\"></i>\n       <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Name\" name =\"name\">\n     </div>\n    \n     <div class=\"form-group contact-form-icon\">\n      <div class=\"col-md-6\">\n      <i class=\"fa fa-envelope\"></i>\n      <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\" name=\"email\">\n    </div>\n  </div>\n  </div>\n  \n   <div class=\"form-group contact-form-icon\">\n    <div class=\"col-md-6\">\n      <i class=\"fa fa-skype\"></i>\n      <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"skype\" name=\"skype\">\n    </div>\n    \n    <div class=\"col-md-6\">\n\n       <select name=\"lang\" id=\"lang\" class=\"form-control\">\n                                            <option value=\"English\">English</option>\n                                            <option value=\"Español\">Espa&ntilde;ol</option>\n                                        </select>\n      <input type=\"text\" name=\"type\" value=\"'CSM'\" class=\"hidden\">\n\n    </div>\n  </div>\n  \n   <div class=\"form-group contact-form-icon\">\n    <div class=\"col-md-12\">\n        <i class=\"fa fa-pencil\"></i>\n       <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Subject\" name=\"subject\">\n    </div>\n  </div>\n\n <div class=\"form-group contact-form-icon\">\n     <div class=\"col-sm-12\">\n      <i class=\"fa fa-keyboard-o\"></i>\n      <textarea class=\"form-control\" rows=\"4\" placeholder=\"Description...\" name=\"message\"></textarea>\n    </div>\n  </div>\n\n\n<div class=\"form-group\">\n    \n    <div class=\"col-md-12\">\n         {!! app('captcha')->display(); !!}\n    </div>\n   </div>\n  \n  \n  <div class=\"form-group\">\n    <div class=\"col-md-12\">\n      <button type=\"submit\" class=\"btn btn-default btn-block\">Send</button>\n    </div>\n  </div>\n\n{!! Form::close() !!}\n</div>\n\t</div>\n\t\n</div>\n\n","undoManager":{"mark":49,"position":51,"stack":[[{"start":{"row":25,"column":0},"end":{"row":81,"column":0},"action":"remove","lines":["<div class=\"col-md-8 col-md-offset-3\">","","\t\t<form class=\"form-horizontal\">","  <div class=\"form-group\">","    ","    <div class=\"col-md-6\">","      <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"First Name\">","    </div>","    <div class=\"col-md-6\">","      <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Last Name\">","    </div>","  </div>","  ","  <div class=\"form-group\">","    <div class=\"col-md-12\">","      <input type=\"password\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Organization\">","    </div>","  </div>","","  <div class=\"form-group\">","    ","    <div class=\"col-sm-12\">","      <textarea class=\"form-control\" rows=\"4\" placeholder=\"Description...\"></textarea>","    </div>","  </div>","","  <div class=\"form-group\">","    ","    <div class=\"col-sm-12\">","      <select class=\"form-control\">","      \t\t<option selected>Country...</option>","  \t\t\t<option>Argentina</option>","  \t\t\t<option>Brazil</option>","  \t\t\t<option>Colombia</option>","  \t\t\t<option>PerÃº</option>","  \t\t\t<option>Venezuela</option>","\t  </select>","    </div>","  </div>","","  ","","  ","  ","  <div class=\"form-group\">","    <div class=\"col-md-12\">","      <button type=\"submit\" class=\"btn btn-default btn-block\">Send</button>","    </div>","  </div>","","</form>","</div>","\t</div>","\t","</div>","",""],"id":17},{"start":{"row":25,"column":0},"end":{"row":91,"column":0},"action":"insert","lines":["","<div class=\"col-md-8 col-md-offset-3\">","    {!! Form::open([\"route\"=>\"contact.contact.store\", \"method\"=>\"post\", \"id\"=>\"contactForm\",\"class\"=>\"form-horizontal\"]) !!}","\t","  <div class=\"form-group\">","    ","    <div class=\"col-md-6\">","      <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Name\" name =\"name\">","      ","    </div>","    ","    <div class=\"col-md-6\">","      <input type=\"text\" class=\"form-control\" id=\"inputEmail3\" placeholder=\"Email\" name=\"email\">","    </div>","    ","    </div>","    <div class=\"form-group\">","    <div class=\"col-md-6\">","      <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"skype\" name=\"skype\">","    </div>","    ","    <div class=\"col-md-6\">","","       <select name=\"lang\" id=\"lang\" class=\"form-control\">","                                            <option value=\"English\">English</option>","                                            <option value=\"Español\">Espa&ntilde;ol</option>","                                        </select>","      <input type=\"text\" name=\"type\" value=\"'CRM'\" class=\"hidden\">","","    </div>","  </div>","  ","  <div class=\"form-group\">","    <div class=\"col-md-12\">","       <input type=\"text\" class=\"form-control\" id=\"inputPassword3\" placeholder=\"Subject\" name=\"subject\">","    </div>","  </div>","","  <div class=\"form-group\">","    ","    <div class=\"col-sm-12\">","      <textarea class=\"form-control\" rows=\"4\" placeholder=\"Description...\" name=\"message\"></textarea>","    </div>","  </div>","","","<div class=\"form-group\">","    ","    <div class=\"col-md-12\">","         {!! app('captcha')->display(); !!}","    </div>","   </div>","  ","  ","  <div class=\"form-group\">","    <div class=\"col-md-12\">","      <button type=\"submit\" class=\"btn btn-default btn-block\">Send</button>","    </div>","  </div>","","{!! Form::close() !!}","</div>","\t</div>","\t","</div>","",""]}],[{"start":{"row":52,"column":46},"end":{"row":52,"column":47},"action":"remove","lines":["R"],"id":18}],[{"start":{"row":52,"column":46},"end":{"row":52,"column":47},"action":"remove","lines":["M"],"id":19}],[{"start":{"row":52,"column":46},"end":{"row":52,"column":47},"action":"insert","lines":["S"],"id":20}],[{"start":{"row":52,"column":47},"end":{"row":52,"column":48},"action":"insert","lines":["M"],"id":21}],[{"start":{"row":73,"column":24},"end":{"row":73,"column":25},"action":"remove","lines":["2"],"id":22}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"remove","lines":["1"],"id":23}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"insert","lines":["6"],"id":24}],[{"start":{"row":80,"column":23},"end":{"row":80,"column":24},"action":"remove","lines":["1"],"id":25}],[{"start":{"row":80,"column":23},"end":{"row":80,"column":24},"action":"insert","lines":["1"],"id":26}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"remove","lines":["6"],"id":27}],[{"start":{"row":73,"column":23},"end":{"row":73,"column":24},"action":"insert","lines":["1"],"id":28}],[{"start":{"row":73,"column":24},"end":{"row":73,"column":25},"action":"insert","lines":["2"],"id":80}],[{"start":{"row":29,"column":2},"end":{"row":31,"column":26},"action":"remove","lines":["<div class=\"form-group\">","    ","    <div class=\"col-md-6\">"],"id":80},{"start":{"row":29,"column":2},"end":{"row":32,"column":0},"action":"insert","lines":["<div class=\"form-group contact-form-icon\">","      <div class=\"col-md-6\">","      <i class=\"fa fa-user\"></i>",""]}],[{"start":{"row":32,"column":0},"end":{"row":33,"column":0},"action":"remove","lines":["",""],"id":81},{"start":{"row":32,"column":0},"end":{"row":32,"column":2},"action":"remove","lines":["  "]}],[{"start":{"row":32,"column":0},"end":{"row":32,"column":1},"action":"insert","lines":[" "],"id":82}],[{"start":{"row":33,"column":3},"end":{"row":33,"column":4},"action":"remove","lines":[" "],"id":83}],[{"start":{"row":33,"column":3},"end":{"row":33,"column":4},"action":"remove","lines":[" "],"id":84}],[{"start":{"row":33,"column":3},"end":{"row":33,"column":4},"action":"remove","lines":[" "],"id":85}],[{"start":{"row":34,"column":2},"end":{"row":34,"column":4},"action":"remove","lines":["  "],"id":86}],[{"start":{"row":34,"column":0},"end":{"row":34,"column":2},"action":"remove","lines":["  "],"id":87}],[{"start":{"row":33,"column":3},"end":{"row":34,"column":0},"action":"remove","lines":["",""],"id":88}],[{"start":{"row":33,"column":3},"end":{"row":33,"column":4},"action":"insert","lines":[" "],"id":89}],[{"start":{"row":33,"column":4},"end":{"row":33,"column":5},"action":"insert","lines":[" "],"id":90}],[{"start":{"row":32,"column":5},"end":{"row":32,"column":7},"action":"insert","lines":["  "],"id":91}],[{"start":{"row":31,"column":6},"end":{"row":31,"column":8},"action":"insert","lines":["  "],"id":92}],[{"start":{"row":38,"column":4},"end":{"row":39,"column":0},"action":"remove","lines":["",""],"id":93},{"start":{"row":38,"column":2},"end":{"row":38,"column":4},"action":"remove","lines":["  "]}],[{"start":{"row":38,"column":2},"end":{"row":38,"column":4},"action":"remove","lines":["  "],"id":94}],[{"start":{"row":38,"column":2},"end":{"row":38,"column":4},"action":"remove","lines":["  "],"id":95}],[{"start":{"row":38,"column":8},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":96},{"start":{"row":39,"column":0},"end":{"row":39,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":26},"action":"remove","lines":["<div class=\"col-md-6\">"],"id":97},{"start":{"row":35,"column":4},"end":{"row":38,"column":0},"action":"insert","lines":["<div class=\"form-group contact-form-icon\">","      <div class=\"col-md-6\">","      <i class=\"fa fa-user\"></i>",""]}],[{"start":{"row":38,"column":0},"end":{"row":39,"column":0},"action":"remove","lines":["",""],"id":98}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":26},"action":"insert","lines":["<div class=\"col-md-6\">"],"id":99},{"start":{"row":35,"column":26},"end":{"row":38,"column":0},"action":"remove","lines":["<div class=\"form-group contact-form-icon\">","      <div class=\"col-md-6\">","      <i class=\"fa fa-user\"></i>",""]},{"start":{"row":35,"column":26},"end":{"row":36,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":35,"column":4},"end":{"row":35,"column":26},"action":"remove","lines":["<div class=\"col-md-6\">"],"id":100},{"start":{"row":35,"column":4},"end":{"row":37,"column":36},"action":"insert","lines":[" <div class=\"form-group contact-form-icon\">","      <div class=\"col-md-6\">","      <i class=\"fa fa-envelope\"></i>"]}],[{"start":{"row":40,"column":8},"end":{"row":41,"column":0},"action":"insert","lines":["",""],"id":101},{"start":{"row":41,"column":0},"end":{"row":41,"column":2},"action":"insert","lines":["  "]}],[{"start":{"row":41,"column":2},"end":{"row":41,"column":3},"action":"insert","lines":["<"],"id":102}],[{"start":{"row":40,"column":3},"end":{"row":40,"column":4},"action":"insert","lines":["7"],"id":103}],[{"start":{"row":40,"column":3},"end":{"row":40,"column":4},"action":"remove","lines":["7"],"id":104}],[{"start":{"row":41,"column":3},"end":{"row":41,"column":4},"action":"insert","lines":["/"],"id":105}],[{"start":{"row":41,"column":4},"end":{"row":41,"column":5},"action":"insert","lines":["d"],"id":106}],[{"start":{"row":41,"column":5},"end":{"row":41,"column":6},"action":"insert","lines":["i"],"id":107}],[{"start":{"row":41,"column":6},"end":{"row":41,"column":7},"action":"insert","lines":["v"],"id":108}],[{"start":{"row":41,"column":7},"end":{"row":41,"column":8},"action":"insert","lines":["<"],"id":109}],[{"start":{"row":41,"column":7},"end":{"row":41,"column":8},"action":"remove","lines":["<"],"id":110}],[{"start":{"row":41,"column":7},"end":{"row":41,"column":8},"action":"insert","lines":[">"],"id":111}],[{"start":{"row":41,"column":3},"end":{"row":41,"column":8},"action":"remove","lines":["/div>"],"id":112}],[{"start":{"row":41,"column":3},"end":{"row":41,"column":8},"action":"insert","lines":["/div>"],"id":113,"ignore":true}],[{"start":{"row":43,"column":3},"end":{"row":44,"column":26},"action":"remove","lines":[" <div class=\"form-group\">","    <div class=\"col-md-6\">"],"id":114},{"start":{"row":43,"column":3},"end":{"row":45,"column":33},"action":"insert","lines":["<div class=\"form-group contact-form-icon\">","    <div class=\"col-md-6\">","      <i class=\"fa fa-skype\"></i>"]}],[{"start":{"row":60,"column":1},"end":{"row":61,"column":27},"action":"remove","lines":[" <div class=\"form-group\">","    <div class=\"col-md-12\">"],"id":116},{"start":{"row":60,"column":1},"end":{"row":62,"column":36},"action":"insert","lines":["  <div class=\"form-group contact-form-icon\">","    <div class=\"col-md-12\">","        <i class=\"fa fa-pencil\"></i>"]}],[{"start":{"row":67,"column":1},"end":{"row":69,"column":27},"action":"remove","lines":[" <div class=\"form-group\">","    ","    <div class=\"col-sm-12\">"],"id":117},{"start":{"row":67,"column":1},"end":{"row":69,"column":38},"action":"insert","lines":["<div class=\"form-group contact-form-icon\">","     <div class=\"col-sm-12\">","      <i class=\"fa fa-keyboard-o\"></i>"]}],[{"start":{"row":28,"column":0},"end":{"row":29,"column":0},"action":"insert","lines":["",""],"id":118}],[{"start":{"row":29,"column":0},"end":{"row":30,"column":0},"action":"insert","lines":["",""],"id":119}]]},"ace":{"folds":[],"scrolltop":832,"scrollleft":0,"selection":{"start":{"row":31,"column":2},"end":{"row":90,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":50,"state":"start","mode":"ace/mode/php"}},"timestamp":1461293664816}