// JavaScript Document

function verificaCheckIP(obj) 
	{
		var vtipo=obj.id
		
		if (vtipo!="ip_otro"){
			document.getElementById('ip_otrotxt').value=" ";
			document.getElementById('ipotrotxt').style.display = 'none';	
		}	
		
		if (vtipo=="ip_otro"){
			document.getElementById('ip_otrotxt').value=" ";
			document.getElementById('ipotrotxt').style.display = 'block';	
		}
		/*switch(vtipo!="ip_otro") {
			case true:
				alert ("diferente de otro", vtipo);
				document.getElementById('ip_otrotxt').value=" ";
				document.getElementById('ipotrotxt').style.display = 'none';
			break;
		}
		
		switch(vtipo=="ip_otro") {
			case true:
				alert (vtipo);
				document.getElementById("ip_otro").checked=true;
				document.getElementById('ip_otrotxt').value=" ";
				document.getElementById('ipotrotxt').style.display = 'block';
			break;
		}*/
	}	


function verificaCheck(obj) 
			{
				if (obj.id=='rgobierno') 
					{//DESPLIEGA LO DE GOBIERNO
						document.getElementById('gobierno').style.display = 'block';
						document.getElementById('privado').style.display = 'none';
						document.getElementById('sc').style.display = 'none';
					}
				switch(obj.id) {
					/*INICIO GOBIERNO*/
					case "judiciario":
					case "ministerio":
					case "fiscalia":
					case "procuraduria":
					case "agenciagubernamental":
					case "organismoley":
					case "parlamento":
						document.getElementById('gobiernootrotxt').value=" ";
						document.getElementById('gobiernootro').style.display = 'none';
						document.getElementById('otrosctxt').value=" ";
						document.getElementById('scotro').style.display = 'none';
					break;
					
					case "otrogobierno":
						document.getElementById('gobiernootro').style.display = 'block';
						
					break;
					/*FIN GOBIERNO*/
					//----------------------
					/*INICIO PRIVADO*/
					case "rprivado":
					case "despachoabogados":
					case "companiaprivada":
						document.getElementById('gobiernootrotxt').value=" ";
						document.getElementById('gobiernootro').style.display = 'none';
						document.getElementById('gobierno').style.display = 'none';
						document.getElementById('privado').style.display = 'block';
						document.getElementById('privadootrotxt').value=" ";
						document.getElementById('privadootro').style.display = 'none';
						document.getElementById('otrosctxt').value=" ";
						document.getElementById('scotro').style.display = 'none';
						document.getElementById('sc').style.display = 'none';
						
						
					break;
					
					case "otroprivado":
						document.getElementById('privadootro').style.display = 'block';
					break;
					/*FIN PRIVADO*/
					/*----------
					/**INICIO ACADEMIA*/
					case "academia":
					case "oi":
						document.getElementById('gobiernootrotxt').value=" ";
						document.getElementById('gobiernootro').style.display = 'none';
						document.getElementById('gobierno').style.display = 'none';
						document.getElementById('privadootrotxt').value=" ";
						document.getElementById('privadootro').style.display = 'none';
						document.getElementById('privado').style.display = 'none';
						document.getElementById('otrosctxt').value=" ";
						document.getElementById('scotro').style.display = 'none';
						document.getElementById('sc').style.display = 'none';
							
					break;	
					/**FIN ACADEMIA*/
					/*----------
					
					/**INICIO OSC*/
					case "rsc":
					case "ong":
					case "asistencialegal":
						document.getElementById('gobiernootrotxt').value=" ";
						document.getElementById('gobiernootro').style.display = 'none';
						document.getElementById('gobierno').style.display = 'none';
						document.getElementById('privadootrotxt').value=" ";
						document.getElementById('privadootro').style.display = 'none';
						document.getElementById('privado').style.display = 'none';
						document.getElementById('sc').style.display = 'block';
						document.getElementById('otrosctxt').value=" ";
						document.getElementById('scotro').style.display = 'none';
					break;
					
					case "otrosc":
						document.getElementById('scotro').style.display = 'block';
					break;
					/**FIN  OSC*/
					
					//default:
						//document.getElementById('gobiernootrotxt').value=" ";
						//document.getElementById('privadootro').style.display = 'none';
				}	
			}
