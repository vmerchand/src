<!DOCTYPE html>
<html lang="es" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Formato para obtener información de base</title>
		<meta name="description" content="Formato para obtener información de base" />
		<meta name="keywords" content="" />
		<meta name="author" content="Codrops/VMB" />
		<link rel="shortcut icon" href="../favicon.ico">
		
		<link rel="stylesheet" type="text/css" href="css/button.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/checkbox.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" href="css/jquery.typeahead.css">
      	<link rel="stylesheet" href="css/cupertino/jquery-ui.css"/><!--STYLE DE DATEPICKER-->
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
			
		<link rel="stylesheet" href="css/cupertino/jquerymin.js"/>
		<script src="js/jquery-1.10.2.js"></script>
        <script src="js/unodc.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/modernizr.custom.js"></script><!--PARA PAGINACION-->
		<script src="js/jquery.typeahead.js"></script>
		<script src="js/jquery.ui.datepicker.js"></script><!--PARA DATEPICKER-->
		<script src="js/jquery.circlemouse.js"></script>
		<script src="js/jquery.bootstrap.min.js"></script>
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
        	
        <script>
    var createAllErrors = function() {
        var form = $( this ),
            errorList = $( "ul.errorMessages", form );

        var showAllErrorMessages = function() {
            errorList.empty();

            // Find all invalid fields within the form.
            var invalidFields = form.find( ":invalid" ).each( function( index, node ) {

                // Find the field's corresponding label
                var label = $( "label[for=" + node.id + "] "),
                    // Opera incorrectly does not fill the validationMessage property.
                    message = node.validationMessage || 'Invalid value.';

                errorList
                    .show()
                    .append( "<li><span>" + label.html() + "</span> " + message + "</li>" );
            });
        };

        // Support Safari
        form.on( "submit", function( event ) {
            if ( this.checkValidity && !this.checkValidity() ) {
                $( this ).find( ":invalid" ).first().focus();
                event.preventDefault();
            }
        });

        $( "input[type=submit], button:not([type=button])", form )
            .on( "click", showAllErrorMessages);

        $( "input", form ).on( "keypress", function( event ) {
            var type = $( this ).attr( "type" );
            if ( /date|email|month|number|search|tel|text|time|url|week/.test ( type )
              && event.keyCode == 13 ) {
                showAllErrorMessages();
            }
        });
    };
    
    $( "form" ).each( createAllErrors );
</script>
            
            
            
            
            	
		<script type="text/javascript"><!-- CIRCULO MUJER-->
            $(function(obj) {
				$('#circle').circlemouse({
					onMouseEnter	: function( el ) {
						el.addClass('ec-circle-hover');
					},
					onMouseLeave	: function( el ) {
						el.removeClass('ec-circle-hover');
					},
					onClick			: function( el ) {
						alert("mujer");
					}
				});
			});
        </script> 
		
		<script type="text/javascript"><!-- CIRCULO HOMBRE-->
            $(function(obj) {
				$('#circle2').circlemouse({
					onMouseEnter	: function( el ) {
						el.addClass('ec-circle2-hover');
					},
					onMouseLeave	: function( el ) {
						el.removeClass('ec-circle2-hover');
					},
					onClick			: function( el ) {
						alert("HOMBRE");
					}
				});
			});
        </script> 
		
		<script language="javascript" type="text/javascript"> <!--VALIDA CHECKBOX DE SEXO-->
			function chkSexo(obj)
			{
				var xSexo=obj.id;
		  		if (xSexo=="SexoFem"){
					document.getElementById("SexoMasc").checked = false;
				}
			
				if (xSexo=="SexoMasc"){
					document.getElementById("SexoFem").checked = false;
				}
			}
		</script>

		<script><!--SCRIPT PARA DATEPICKER EN ESPAÑOL-->
			$.datepicker.regional['es'] = {
				closeText: 'Cerrar',
				prevText: '<Ant',
				nextText: 'Sig>',
				currentText: 'Hoy',
				monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
				monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
				dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
				dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
				dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
				weekHeader: 'Sm',
				dateFormat: 'dd/mm/yy',
				firstDay: 1,
				isRTL: false,
				showMonthAfterYear: false,
				yearSuffix: ''
			};
			
			$.datepicker.setDefaults($.datepicker.regional['es']);
			
			$(function() 
				{
					$( "#datepicker" ).datepicker({
					minDate: new Date(1950, 1 - 1, 1),
					dateFormat: "dd-mm-yy",
					maxDate: "31-12-1997",
					changeMonth: false,
					changeYear: true
					}  
				)
			});
		</script>
 <script>       
        function formcheck() {
   			var fields = $(".ss-item-required")
        		.find("select, textarea, input").serializeArray();
				alert("aqui");
  
  				$.each(fields, function(i, field) {
					alert(field.name);
    			if (!field.value){
					//$(".error-messages").text("Campo requerido: " +field.name + ' ').fadeIn();
                    
                    $(".error-messages").text("Campo requerido: " + document.write("<a href=#'") + field.name + document.write(">sdfs</a>")).fadeIn();
                    //document.write("<h1>Hello member</h1>");
					//document.getElementByName(field.name).focus();
      				//alert(field.name + ' is required');
				return false;	
                }
				else{$(".error-messages").text('').fadeIn();}
   				}); 
  console.log(fields);
}
</script>
	</head>
	
	<body>
<form action="process.php" method="post">

			<div id="vs-container" class="vs-container">
				<div class="codrops-top clearfix">
					<div align="center">
					<img src="./images/banner.png" class="img-responsive center-block" alt="banner" width="" height=""/> 
					</div>
					<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/SidebarTransitions/"><span>UNODC</span></a>
					<span class="right"><a href="http://www.catipsum.com/">UNODC</a><a href="http://AllSilhouettes.com">UNODC</a><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=16382"><span>UNODC</span></a></span>		
				</div>
				
				<header class="vs-header">
					<h2>Taller nacional de formación de formadores para <br>
la investigación y persecución del tráfico ilícito de migrantes
<br> 
					<span>[CIUDAD</span></h2>
					
					<div class="container">
				    	<button type="submit" class="button" onclick="formcheck(); return false">Enviar</button><br>	
					</div>
                    <div class="error-messages" style="display:none;"></div>
				
					<ul class="vs-nav">
						<li><a href="#section-1">Datos personales</a></li>
						<li><a href="#section-2">Información profesional</a></li>
						<li><a href="#section-3">Información de trabajo</a></li>
						<li><a href="#section-4">Tipo de Organización</a></li>
						<li><a href="#section-5">Actividades profesionales</a></li>
					</ul>
				</header>
			
			<div class="vs-wrapper">
				<section id="section-1">
					<div class="vs-content">
						<h4>Por favor ingrese sus datos personales</h4>
						<div class="ss-item-required">
                        	<div class="tag">Apellidos:
								<input type="text" class="form-control"  name="apellidos" autofocus id="nombre">
                            </div>
						</div>
                        <div class="ss-item-required">
                        	<div class="tag">Nombre:
								<input type="text" class="form-control"  name="nombre">
							</div>
                          </div>
						
						<!--<div class="container">
							<div class="header">
								<div class="clr"></div>
							</div>-->
							<div class="tag">Sexo:
							<!--<div class="wrapper">-->
								<p class="message">Your browser does not support the border-radius property!</p>
								<!--<div class="section">-->
								<div class="normal-trigger-area">
									<input id="circle" class="ec-circle" onClick="e1();">
								</div>
								<div class="normal-trigger-area">
									<input id="circle2" class="ec-circle2" onClick="e1();">
								</div>
								<p class="message">Your browser does not support the border-radius property!</p>
							</div>
								<!--</div>-->
							<!--</div>-->
						<!--</div>-->
	  
						<div class="tag">Fecha de Nacimiento: 
							<input type="text" name="fecnac" id="datepicker" onClick=""/><label for="fecnac"></label>
						</div>
						<div class="tag">Lugar de nacimiento:</div> 
							<form>
								<div class="typeahead-container">
									<div class="typeahead-field">
										<span class="typeahead-query">
											<input id="q"
												name="q"
												type="text"
												autofocus
												autocomplete="on">
										</span>
									</div>
								</div>
							</form>
						<div class="ss-item-required">
                        	<div class="tag">Nacionalidad:  
								<input type="text" class="form-control"  name="nacionalidad">
							</div>
                        </div>
							<div class="tag">Lugar de residencia:</div>

						<form>
							<div class="typeahead-container">
								<div class="typeahead-field">
									<span class="typeahead-query">
										<input id="z"
											name="z"
											type="text"
											autofocus
											autocomplete="on">
									</span>
								</div>
							</div>
						</form>
						
						<div class="tag">email:  
							<input type="email" class="form-control"  name="email" required>
						</div>
						<div class="tag">Tipo de Organización:  </div>
					
						<div class="subtag">
                        	<input type="radio" class="regular-radio" name="yesno" id="rgobierno" onclick="javascript:verificaCheck(this);"> Gobierno 
                        </div>
						<div id="gobierno" style="display:none"><!--SECCION DE GOBIERNO-->
							<ul class="radio_text">
								<i class="fa fa-arrow-left"></i> Judiciario  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="judiciario"><br>
								<i class="fa fa-arrow-circle-right"></i> Ministario Público  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="ministerio"><br>
								<i class="fa fa-arrow-circle-right"></i> Fiscalía  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="fiscalia"><br>
								<i class="fa fa-arrow-circle-right"></i> Procuraduría  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="procuraduria"><br>
								<i class="fa fa-arrow-circle-right"></i> Agencia Gubernamental  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="agenciagubernamental"><br>
								<i class="fa fa-arrow-circle-right"></i> Organismo encargado de la aplicación de la ley  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="organismoley"><br>
								<i class="fa fa-arrow-circle-right"></i> Parlamento  <input type="radio"  onclick="javascript:verificaCheck(this);" name="yesno" id="parlamento"><br>
								<i class="fa fa-arrow-circle-right"></i> Otro <input type="radio" onclick="javascript:verificaCheck(this);" name="yesno" id="otrogobierno"><br>
									<div id="gobiernootro" style="display:none">
										<i class="fa fa-question-circle"></i>Especifique: <input type='text' id='gobiernootrotxt' name='yesno'><br>
									</div>
							</ul>
						</div>
						
                        <div class="subtag">
                        	<input type="radio" class="regular-radio" name="yesno" id="academia" onclick="javascript:verificaCheck(this);"> Academia               </div>
                        
						<div class="subtag">
                        	<input type="radio" class="regular-radio" name="yesno" id="oi" onclick="javascript:verificaCheck(this);">Organizacion Internacional </div>
						
						<div class="subtag">
                        	<input type="radio" class="regular-radio" name="yesno" id="rprivado" onclick="javascript:verificaCheck(this);" name="yesno" >Sector Privado </div>
						<div id="privado" style="display:none" ><!--SECCION DE PRIVADO-->
							<ul class="radio_text">
								
								<i class="fa fa-arrow-circle-right"></i> Despacho de Abogados <input type="radio" onclick="javascript:verificaCheck(this);"name="yesno" id="despachoabogados"><br>
								<i class="fa fa-arrow-circle-right"></i> Compañía Privada <input type="radio" onclick="javascript:verificaCheck(this);" name="yesno" id="companiaprivada"><br>
								
								<i class="fa fa-arrow-circle-right"></i> Otro <input type="radio" onclick="javascript:verificaCheck(this);" name="yesno" id="otroprivado">
									<div id="privadootro" style="display:none">
										<i class="fa fa-question-circle"></i>Especifique: <input type='text' id='privadootrotxt' name='yesno'><br>
									</div>
							</ul>
						</div>
						
						<div class="subtag">
                        	<input type="radio" class="regular-radio" name="yesno" id="rsc" onclick="javascript:verificaCheck(this);" >Sociedad Civil </div>
						<div id="sc" style="display:none" ><!--SECCION DE SOCIEDAD CIVIL-->
							<ul class="radio_text">
								
								<i class="fa fa-arrow-circle-right"></i> Organización no Gubernamental <input type="radio" onclick="javascript:verificaCheck(this);"name="yesno" id="ong"><br>
								<i class="fa fa-arrow-circle-right"></i> Provedor Asistencia Legal <input type="radio" onclick="javascript:verificaCheck(this);" name="yesno" id="asistencialegal"><br>
								
								<i class="fa fa-arrow-circle-right"></i> Otro <input type="radio" onclick="javascript:verificaCheck(this);" name="yesno" id="otrosc">
									<div id="scotro" style="display:none">
										<i class="fa fa-question-circle"></i>Especifique: <input type='text' id='otrosctxt' name='yesno'><br>
									</div>
							</ul>
						</div>
						

						<!--other 3<input type='text' id='other3' name='other3'><br>
						other 4<input type='text' id='other4' name='other4'><br>-->
					</div>
				</section>
				
				<script><!-- DE LUGAR DE NACIMIENTO-->
				var data = {
					countries: ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
                "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
                "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
                "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
                "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
                "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
                "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"],
            capitals: ["Abu Dhabi", "Abuja", "Accra", "Adamstown", "Addis Ababa", "Algiers", "Alofi", "Amman", "Amsterdam",
                "Andorra la Vella", "Ankara", "Antananarivo", "Apia", "Ashgabat", "Asmara", "Astana", "Asunción", "Athens",
                "Avarua", "Baghdad", "Baku", "Bamako", "Bandar Seri Begawan", "Bangkok", "Bangui", "Banjul", "Basseterre",
                "Beijing", "Beirut", "Belgrade", "Belmopan", "Berlin", "Bern", "Bishkek", "Bissau", "Bogotá", "Brasília",
                "Bratislava", "Brazzaville", "Bridgetown", "Brussels", "Bucharest", "Budapest", "Buenos Aires", "Bujumbura",
                "Cairo", "Canberra", "Caracas", "Castries", "Cayenne", "Charlotte Amalie", "Chisinau", "Cockburn Town",
                "Conakry", "Copenhagen", "Dakar", "Damascus", "Dhaka", "Dili", "Djibouti", "Dodoma", "Doha", "Douglas",
                "Dublin", "Dushanbe", "Edinburgh of the Seven Seas", "El Aaiún", "Episkopi Cantonment", "Flying Fish Cove",
                "Freetown", "Funafuti", "Gaborone", "George Town", "Georgetown", "Georgetown", "Gibraltar", "King Edward Point",
                "Guatemala City", "Gustavia", "Hagåtña", "Hamilton", "Hanga Roa", "Hanoi", "Harare", "Hargeisa", "Havana",
                "Helsinki", "Honiara", "Islamabad", "Jakarta", "Jamestown", "Jerusalem", "Juba", "Kabul", "Kampala",
                "Kathmandu", "Khartoum", "Kiev", "Kigali", "Kingston", "Kingston", "Kingstown", "Kinshasa", "Kuala Lumpur",
                "Kuwait City", "Libreville", "Lilongwe", "Lima", "Lisbon", "Ljubljana", "Lomé", "London", "Luanda", "Lusaka",
                "Luxembourg", "Madrid", "Majuro", "Malabo", "Malé", "Managua", "Manama", "Manila", "Maputo", "Marigot",
                "Maseru", "Mata-Utu", "Mbabane Lobamba", "Melekeok Ngerulmud", "Mexico City", "Minsk", "Mogadishu", "Monaco",
                "Monrovia", "Montevideo", "Moroni", "Moscow", "Muscat", "Nairobi", "Nassau", "Naypyidaw", "N'Djamena",
                "New Delhi", "Niamey", "Nicosia", "Nicosia", "Nouakchott", "Nouméa", "Nukuʻalofa", "Nuuk", "Oranjestad",
                "Oslo", "Ottawa", "Ouagadougou", "Pago Pago", "Palikir", "Panama City", "Papeete", "Paramaribo", "Paris",
                "Philipsburg", "Phnom Penh", "Plymouth Brades Estate", "Podgorica Cetinje", "Port Louis", "Port Moresby",
                "Port Vila", "Port-au-Prince", "Port of Spain", "Porto-Novo Cotonou", "Prague", "Praia", "Cape Town",
                "Pristina", "Pyongyang", "Quito", "Rabat", "Reykjavík", "Riga", "Riyadh", "Road Town", "Rome", "Roseau",
                "Saipan", "San José", "San Juan", "San Marino", "San Salvador", "Sana'a", "Santiago", "Santo Domingo",
                "São Tomé", "Sarajevo", "Seoul", "Singapore", "Skopje", "Sofia", "Sri Jayawardenepura Kotte", "St. George's",
                "St. Helier", "St. John's", "St. Peter Port", "St. Pierre", "Stanley", "Stepanakert", "Stockholm", "Sucre",
                "Sukhumi", "Suva", "Taipei", "Tallinn", "Tarawa Atoll", "Tashkent", "Tbilisi", "Tegucigalpa", "Tehran",
                "Thimphu", "Tirana", "Tiraspol", "Tokyo", "Tórshavn", "Tripoli", "Tskhinvali", "Tunis", "Ulan Bator", "Vaduz",
                "Valletta", "The Valley", "Vatican City", "Victoria", "Vienna", "Vientiane", "Vilnius", "Warsaw",
                "Washington, D.C.", "Wellington", "West Island", "Willemstad", "Windhoek", "Yamoussoukro", "Yaoundé", "Yaren",
                "Yerevan", "Zagreb"]
				};

				$('#q').typeahead({
				minLength: 1,
				order: "asc",
				group: true,
				maxItemPerGroup: 3,
				groupOrder: function () {

					var scope = this,
                    sortGroup = [];

					for (var i in this.result) {
                    sortGroup.push({
                        group: i,
                        length: this.result[i].length
                    });
					}

					sortGroup.sort(
                    scope.helper.sort(
                        ["length"],
                        false, // false = desc, the most results on top
                        function (a) {
                            return a.toString().toUpperCase()
                        }
                    )
					);

                return $.map(sortGroup, function (val, i) {
                    return val.group
                });
				},
				hint: true,
				dropdownFilter: "All",
				href: "https://en.wikipedia.org/?title={{display}}",
				template: "{{display}}, <small><em>{{group}}</em></small>",
				source: {
					country: {
						data: data.countries
					},
					capital: {
						data: data.capitals
					}
				},
				callback: {
                onClickAfter: function (node, a, item, event) {

                    var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                    if (r == true) {
                        window.open(item.href);
                    }

                    $('#result-container').text('');

                },
                onResult: function (node, query, obj, objCount) {

                    console.log(objCount)

                    var text = "";
                    if (query !== "") {
                        text = objCount + ' elements matching "' + query + '"';
                    }
                    $('#result-container').text(text);

                }
				},
				debug: true
					});

				</script>
				
				<script><!--DE RESIDENCIA-->
				var data = {
					countries: ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
                "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
                "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
                "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
                "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
                "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
                "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"],
            capitals: ["Abu Dhabi", "Abuja", "Accra", "Adamstown", "Addis Ababa", "Algiers", "Alofi", "Amman", "Amsterdam",
                "Andorra la Vella", "Ankara", "Antananarivo", "Apia", "Ashgabat", "Asmara", "Astana", "Asunción", "Athens",
                "Avarua", "Baghdad", "Baku", "Bamako", "Bandar Seri Begawan", "Bangkok", "Bangui", "Banjul", "Basseterre",
                "Beijing", "Beirut", "Belgrade", "Belmopan", "Berlin", "Bern", "Bishkek", "Bissau", "Bogotá", "Brasília",
                "Bratislava", "Brazzaville", "Bridgetown", "Brussels", "Bucharest", "Budapest", "Buenos Aires", "Bujumbura",
                "Cairo", "Canberra", "Caracas", "Castries", "Cayenne", "Charlotte Amalie", "Chisinau", "Cockburn Town",
                "Conakry", "Copenhagen", "Dakar", "Damascus", "Dhaka", "Dili", "Djibouti", "Dodoma", "Doha", "Douglas",
                "Dublin", "Dushanbe", "Edinburgh of the Seven Seas", "El Aaiún", "Episkopi Cantonment", "Flying Fish Cove",
                "Freetown", "Funafuti", "Gaborone", "George Town", "Georgetown", "Georgetown", "Gibraltar", "King Edward Point",
                "Guatemala City", "Gustavia", "Hagåtña", "Hamilton", "Hanga Roa", "Hanoi", "Harare", "Hargeisa", "Havana",
                "Helsinki", "Honiara", "Islamabad", "Jakarta", "Jamestown", "Jerusalem", "Juba", "Kabul", "Kampala",
                "Kathmandu", "Khartoum", "Kiev", "Kigali", "Kingston", "Kingston", "Kingstown", "Kinshasa", "Kuala Lumpur",
                "Kuwait City", "Libreville", "Lilongwe", "Lima", "Lisbon", "Ljubljana", "Lomé", "London", "Luanda", "Lusaka",
                "Luxembourg", "Madrid", "Majuro", "Malabo", "Malé", "Managua", "Manama", "Manila", "Maputo", "Marigot",
                "Maseru", "Mata-Utu", "Mbabane Lobamba", "Melekeok Ngerulmud", "Mexico City", "Minsk", "Mogadishu", "Monaco",
                "Monrovia", "Montevideo", "Moroni", "Moscow", "Muscat", "Nairobi", "Nassau", "Naypyidaw", "N'Djamena",
                "New Delhi", "Niamey", "Nicosia", "Nicosia", "Nouakchott", "Nouméa", "Nukuʻalofa", "Nuuk", "Oranjestad",
                "Oslo", "Ottawa", "Ouagadougou", "Pago Pago", "Palikir", "Panama City", "Papeete", "Paramaribo", "Paris",
                "Philipsburg", "Phnom Penh", "Plymouth Brades Estate", "Podgorica Cetinje", "Port Louis", "Port Moresby",
                "Port Vila", "Port-au-Prince", "Port of Spain", "Porto-Novo Cotonou", "Prague", "Praia", "Cape Town",
                "Pristina", "Pyongyang", "Quito", "Rabat", "Reykjavík", "Riga", "Riyadh", "Road Town", "Rome", "Roseau",
                "Saipan", "San José", "San Juan", "San Marino", "San Salvador", "Sana'a", "Santiago", "Santo Domingo",
                "São Tomé", "Sarajevo", "Seoul", "Singapore", "Skopje", "Sofia", "Sri Jayawardenepura Kotte", "St. George's",
                "St. Helier", "St. John's", "St. Peter Port", "St. Pierre", "Stanley", "Stepanakert", "Stockholm", "Sucre",
                "Sukhumi", "Suva", "Taipei", "Tallinn", "Tarawa Atoll", "Tashkent", "Tbilisi", "Tegucigalpa", "Tehran",
                "Thimphu", "Tirana", "Tiraspol", "Tokyo", "Tórshavn", "Tripoli", "Tskhinvali", "Tunis", "Ulan Bator", "Vaduz",
                "Valletta", "The Valley", "Vatican City", "Victoria", "Vienna", "Vientiane", "Vilnius", "Warsaw",
                "Washington, D.C.", "Wellington", "West Island", "Willemstad", "Windhoek", "Yamoussoukro", "Yaoundé", "Yaren",
                "Yerevan", "Zagreb"]
				};

				$('#z').typeahead({
				minLength: 1,
				order: "asc",
				group: true,
				maxItemPerGroup: 3,
				groupOrder: function () {

					var scope = this,
                    sortGroup = [];

					for (var i in this.result) {
                    sortGroup.push({
                        group: i,
                        length: this.result[i].length
                    });
					}

					sortGroup.sort(
                    scope.helper.sort(
                        ["length"],
                        false, // false = desc, the most results on top
                        function (a) {
                            return a.toString().toUpperCase()
                        }
                    )
					);

                return $.map(sortGroup, function (val, i) {
                    return val.group
                });
				},
				hint: true,
				dropdownFilter: "All",
				href: "https://en.wikipedia.org/?title={{display}}",
				template: "{{display}}, <small><em>{{group}}</em></small>",
				source: {
					country: {
						data: data.countries
					},
					capital: {
						data: data.capitals
					}
				},
				callback: {
                onClickAfter: function (node, a, item, event) {

                    var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                    if (r == true) {
                        window.open(item.href);
                    }

                    $('#result-container').text('');

                },
                onResult: function (node, query, obj, objCount) {

                    console.log(objCount)

                    var text = "";
                    if (query !== "") {
                        text = objCount + ' elements matching "' + query + '"';
                    }
                    $('#result-container').text(text);

                }
				},
				debug: true
					});
				</script>

				<section id="section-2">
					<div class="vs-content">
						<div id="sc" ><!--INFORMACION PROFESIONAL-->
							<ul>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_policia" id="ip_policia" onclick="javascript:verificaCheckIP(this);"> Policía</div>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_investigador" id="ip_investigador" onclick="javascript:verificaCheckIP(this);"> Investigador</div>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_agentefronterizo" id="ip_agentefronterizo" onclick="javascript:verificaCheckIP(this);"> Agente fronterizo</div>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_marina" id="ip_marina" onclick="javascript:verificaCheckIP(this);"> Marina</div>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_juez" id="ip_juez" onclick="javascript:verificaCheckIP(this);"> Juez</div>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_abogadofiscal" id="ip_abogadofiscal" onclick="javascript:verificaCheckIP(this);"> Abogado fiscal</div>
								<div class="subtag">
                                	<input type="radio" class="regular-radio" name="profesion" value="ip_abogadodefensor" id="ip_abogadodefensor" onclick="javascript:verificaCheckIP(this);"> Abogado defensor</div>
							</ul>
							<ul>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_abogado" id="ip_abogado" onclick="javascript:verificaCheckIP(this);"> Abogado </div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_magistrado" id="ip_magistrado" onclick="javascript:verificaCheckIP(this);"> Magistrado</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_oficialgobierno" id="ip_oficialgobierno" onclick="javascript:verificaCheckIP(this);"> Oficial de gobierno</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_diplomatico" id="ip_diplomatico" onclick="javascript:verificaCheckIP(this);"> Diplomático</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_academico" id="ip_academico" onclick="javascript:verificaCheckIP(this);"> Académico</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_ong" id="ip_ong" onclick="javascript:verificaCheckIP(this);"> ONG / Sociedad Civil</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_oi" id="ip_oi" onclick="javascript:verificaCheckIP(this);"> Organización Internacional</div>
							</ul>
							<ul>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_psicologo" id="ip_psicologo" onclick="javascript:verificaCheckIP(this);"> Psicólogo </div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_medico" id="ip_medico" onclick="javascript:verificaCheckIP(this);"> Médico</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_periodista" id="ip_periodista" onclick="javascript:verificaCheckIP(this);"> Periodista / Medios</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_independiente" id="ip_independiente" onclick="javascript:verificaCheckIP(this);"> Independiente</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_entrenador" id="ip_entrenador" onclick="javascript:verificaCheckIP(this);"> Entrenador</div>
								<div class="subtag"><input type="radio" class="regular-radio" name="profesion" value="ip_estudiante" id="ip_estudiante" onclick="javascript:verificaCheckIP(this);"> Estudiante</div>

                                
                                <div> <!--style="display:none">-->
										<div class="subtag"><input type='radio' class="regular-radio" name='profesion' value="ip_otro" id='ip_otro'  onclick="javascript:verificaCheckIP(this);">Otro </div>								</div>
                                	<div class="subtag" id="ipotrotxt" style="display:none" > Especifique: 
										<input type="text" class="form-control" name="ip_otrotxt" id="ip_otrotxt" ></div>
							</ul>
						</div>
					</div>
				</section>
				<script><!--PAIS DE TRABAJO-->
				var data = {
					Países: ["Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
                "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
                "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
                "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
                "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
                "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
                "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
                "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
                "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
                "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
                "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
                "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
                "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
                "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
                "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
                "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
                "Philippines", "Poland", "Portugal", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
                "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
                "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
                "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
                "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
                "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
                "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"],
            Capitales: ["Abu Dhabi", "Abuja", "Accra", "Adamstown", "Addis Ababa", "Algiers", "Alofi", "Amman", "Amsterdam",
                "Andorra la Vella", "Ankara", "Antananarivo", "Apia", "Ashgabat", "Asmara", "Astana", "Asunción", "Athens",
                "Avarua", "Baghdad", "Baku", "Bamako", "Bandar Seri Begawan", "Bangkok", "Bangui", "Banjul", "Basseterre",
                "Beijing", "Beirut", "Belgrade", "Belmopan", "Berlin", "Bern", "Bishkek", "Bissau", "Bogotá", "Brasília",
                "Bratislava", "Brazzaville", "Bridgetown", "Brussels", "Bucharest", "Budapest", "Buenos Aires", "Bujumbura",
                "Cairo", "Canberra", "Caracas", "Castries", "Cayenne", "Charlotte Amalie", "Chisinau", "Cockburn Town",
                "Conakry", "Copenhagen", "Dakar", "Damascus", "Dhaka", "Dili", "Djibouti", "Dodoma", "Doha", "Douglas",
                "Dublin", "Dushanbe", "Edinburgh of the Seven Seas", "El Aaiún", "Episkopi Cantonment", "Flying Fish Cove",
                "Freetown", "Funafuti", "Gaborone", "George Town", "Georgetown", "Georgetown", "Gibraltar", "King Edward Point",
                "Guatemala City", "Gustavia", "Hagåtña", "Hamilton", "Hanga Roa", "Hanoi", "Harare", "Hargeisa", "Havana",
                "Helsinki", "Honiara", "Islamabad", "Jakarta", "Jamestown", "Jerusalem", "Juba", "Kabul", "Kampala",
                "Kathmandu", "Khartoum", "Kiev", "Kigali", "Kingston", "Kingston", "Kingstown", "Kinshasa", "Kuala Lumpur",
                "Kuwait City", "Libreville", "Lilongwe", "Lima", "Lisbon", "Ljubljana", "Lomé", "London", "Luanda", "Lusaka",
                "Luxembourg", "Madrid", "Majuro", "Malabo", "Malé", "Managua", "Manama", "Manila", "Maputo", "Marigot",
                "Maseru", "Mata-Utu", "Mbabane Lobamba", "Melekeok Ngerulmud", "Mexico City", "Minsk", "Mogadishu", "Monaco",
                "Monrovia", "Montevideo", "Moroni", "Moscow", "Muscat", "Nairobi", "Nassau", "Naypyidaw", "N'Djamena",
                "New Delhi", "Niamey", "Nicosia", "Nicosia", "Nouakchott", "Nouméa", "Nukuʻalofa", "Nuuk", "Oranjestad",
                "Oslo", "Ottawa", "Ouagadougou", "Pago Pago", "Palikir", "Panama City", "Papeete", "Paramaribo", "Paris",
                "Philipsburg", "Phnom Penh", "Plymouth Brades Estate", "Podgorica Cetinje", "Port Louis", "Port Moresby",
                "Port Vila", "Port-au-Prince", "Port of Spain", "Porto-Novo Cotonou", "Prague", "Praia", "Cape Town",
                "Pristina", "Pyongyang", "Quito", "Rabat", "Reykjavík", "Riga", "Riyadh", "Road Town", "Rome", "Roseau",
                "Saipan", "San José", "San Juan", "San Marino", "San Salvador", "Sana'a", "Santiago", "Santo Domingo",
                "São Tomé", "Sarajevo", "Seoul", "Singapore", "Skopje", "Sofia", "Sri Jayawardenepura Kotte", "St. George's",
                "St. Helier", "St. John's", "St. Peter Port", "St. Pierre", "Stanley", "Stepanakert", "Stockholm", "Sucre",
                "Sukhumi", "Suva", "Taipei", "Tallinn", "Tarawa Atoll", "Tashkent", "Tbilisi", "Tegucigalpa", "Tehran",
                "Thimphu", "Tirana", "Tiraspol", "Tokyo", "Tórshavn", "Tripoli", "Tskhinvali", "Tunis", "Ulan Bator", "Vaduz",
                "Valletta", "The Valley", "Vatican City", "Victoria", "Vienna", "Vientiane", "Vilnius", "Warsaw",
                "Washington, D.C.", "Wellington", "West Island", "Willemstad", "Windhoek", "Yamoussoukro", "Yaoundé", "Yaren",
                "Yerevan", "Zagreb"]
				};

				$('#y').typeahead({
				minLength: 1,
				order: "asc",
				group: true,
				maxItemPerGroup: 3,
				groupOrder: function () {

					var scope = this,
                    sortGroup = [];

					for (var i in this.result) {
                    sortGroup.push({
                        group: i,
                        length: this.result[i].length
                    });
					}

					sortGroup.sort(
                    scope.helper.sort(
                        ["length"],
                        false, // false = desc, the most results on top
                        function (a) {
                            return a.toString().toUpperCase()
                        }
                    )
					);

                return $.map(sortGroup, function (val, i) {
                    return val.group
                });
				},
				hint: true,
				dropdownFilter: "All",
				href: "https://en.wikipedia.org/?title={{display}}",
				template: "{{display}}, <small><em>{{group}}</em></small>",
				source: {
					country: {
						data: data.countries
					},
					capital: {
						data: data.capitals
					}
				},
				callback: {
                onClickAfter: function (node, a, item, event) {

                    var r = confirm("You will be redirected to:\n" + item.href + "\n\nContinue?");
                    if (r == true) {
                        window.open(item.href);
                    }

                    $('#result-container').text('');

                },
                onResult: function (node, query, obj, objCount) {

                    console.log(objCount)

                    var text = "";
                    if (query !== "") {
                        text = objCount + ' elements matching "' + query + '"';
                    }
                    $('#result-container').text(text);

                }
				},
				debug: true
					});
				</script>
			
			
				<section id="section-3">
					<div class="vs-content">
						
							<div class="tag">Lugar de nacimiento</div>
								</br>
						
								<form>
									<div class="typeahead-container">
										<div class="typeahead-field">
											<span class="typeahead-query">
												<input id="y"
													name="y"
													type="text"
													autofocus
													autocomplete="on">
											</span>
										</div>
									</div>
								</form>
							
					</div>
				</section>
				

			
				<section id="section-4">
					<div class="vs-content">
						<h2>Tipo de Organización</h2>
						<div class="col">
							<p> </p>
						</div>
					</div>
				</section>
				
				<section id="section-5">
					<div class="vs-content">
						<h2>Actividades profesionales</h2>
						<div class="col">
							<p> </p>
						</div>
					</div>
				</section>
			</div>
			</div><!-- /vs-container -->
		</form>
	  
	  	<script src="js/classie.js"></script>
		<script src="js/hammer.min.js"></script>
		<script src="js/main.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>


