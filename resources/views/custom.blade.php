<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Custom Voileva</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="custom/css/style.css">
        
	</head>
	<body>
		<br><br><br><br><br><br><br><br><br><br><br>
		<div class="wrapper">
            <form action="res" method="POST" id="myform">
            @csrf
            	<div id="wizard">
            		<!-- SECTION 1 -->
	                <h4></h4>
	                <section>
						<p align="center">											<span class="contact100-form-title">
					<img src="custom/images/logo.png" class="animated bounce infinite" alt="Voileva Logo" id="animated-img1"  align="center">
				</span></p>
						<div class="blockit">
	                	<div class="form-header">
						
	                		<div class="avartar">
								
								<div class="avartar-picker">
									<a href="#">
										<img id="preview" src="custom/images/default.jpg">
									</a>
								</div>
							</div>
							<div class="avartar">
								
								<div class="avartar-picker">
									<a href="#">
										<img id="preview1" src="custom/images/default.jpg">
									</a>
								</div>
							</div>
							<div class="avartar">
								
								<div class="avartar-picker">
									<a href="#">
										<img id="preview2" src="custom/images/default.jpg">
									</a>
								</div>
							</div>
							</div>
<br>
							<div class="form-group">
								<div class="form-holder ">
									<select name="manche" onchange="document.getElementById('preview').src = this.value" class="form-control" required>
										<option  value="custom/images/default.jpg">Choisissez une manche</option>
										<option value="custom/images/s1.jpg">Manche 1</option>
										<option value="custom/images/s2.jpg">Manche 2</option>
										<option value="custom/images/s3.jpg">Manche 3</option>
										<option value="custom/images/s4.jpg">Manche 4</option>
										<option value="custom/images/s5.jpg">Manche 5</option>
										<option value="custom/images/s6.jpg">Manche 6</option>
									</select>
									
								</div>
										
										 
										 
								<div class="form-holder">
									<select name="col" onchange="document.getElementById('preview1').src = this.value" class="form-control" required>
										<option value="custom/images/default.jpg">Choisissez un col</option>
										<option value="custom/images/c1.jpg">Col 1</option>
										<option value="custom/images/c2.jpg">Col 2</option>
										<option value="custom/images/c3.jpg">Col 3</option>
										<option value="custom/images/c4.jpg">Col 4</option>
										<option value="custom/images/c5.jpg">Col 5</option>
										<option value="custom/images/c6.jpg">Col 6</option>
										<option value="custom/images/c7.jpg">Col 7</option>
										<option value="custom/images/c8.jpg">Col 8</option>
										<option value="custom/images/c9.jpg">Col 9</option>
										<option value="custom/images/c10.jpg">Col 10</option>
										
										<option value="custom/images/c12.jpg">Col 11</option>
										<option value="custom/images/c13.jpg">Col 12</option>
										<option value="custom/images/c14.jpg">Col 13</option>
										<option value="custom/images/c15.jpg">Col 14</option>
										<option value="custom/images/c16.jpg">Col 15</option>
										<option value="custom/images/c17.jpg">Col 16</option>
										
									</select>
								</div>

								
								<div class="form-holder">
									<select name="long" onchange="document.getElementById('preview2').src = this.value" class="form-control" required>
										<option value="custom/images/default.jpg">Choisissez la longueur</option>
										<option value="custom/images/l1.jpg">Longueur 1</option>
										<option value="custom/images/l2.jpg">Longueur 2</option>
										<option value="custom/images/l3.jpg">Longueur 3</option>
										<option value="custom/images/l4.jpg">Longueur 4</option>
										<option value="custom/images/l5.jpg">Longueur 5</option>
										<option value="custom/images/l6.jpg">Longueur 6</option>
										<option value="custom/images/l7.jpg">Longueur 7</option>
										<option value="custom/images/l8.jpg">Longueur 8</option>
										<option value="custom/images/l9.jpg">Longueur 9</option>
									</select>
								</div>
							
						
						
	                	<div class="form-holder ">
							Choisissez votre couleur préférée : <input type="color" name="color" class="form-controlll" required> 
							<!--  
								<select  class="form-control">
								<option  value="custom/">Choisissez la couleur</option>
								<option style='color: #f50a0a' value="custom/images/l1.jpg">Rouge</option>
								<option style='color: #000000' value="custom/images/l2.jpg">Noir</option>
								<option style='color: #551af8' value="custom/images/l3.jpg">Bleu</option>
							</select>
							-->
						</div>
					</div>
				</div>
						<div class="form-holder">
							<span  class="form-controll"> Voulez-vous des poches pour votre robe ?  </span>  <input type="checkbox" name="poche" class="largerCheck" >
                            <a href="#" class="btn" onclick="botmanChatWidget.open();return false;">Try out</a>
						</div>
                        
					
	                </section>
	                


	                <!-- SECTION 3 -->
	                <h4></h4>
	                <section>
												<p align="center">											<span class="contact100-form-title">
					<img src="custom/images/logo.png" class="animated bounce infinite" alt="Voileva Logo" id="animated-img1"  align="center">
				</span></p>
				
	                    <div class="form-row">
							
	                    	<div class="form-holder">
								<div class="popup" onclick="myFunction()">Comment mesurer le buste ? 
									<img src="custom/images/bust.jpg" class="popuptext" id="myPopup">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Taille du buste</option> 
									<option  value="custom/20">20</option>
									<option  value="custom/22">22</option>
									<option  value="custom/24">24</option>
									<option  value="custom/26">26</option>
									<option  value="custom/28">28</option>
									<option  value="custom/30">30</option>
								</select>
								
							</div>
							
							<div class="form-holder">
								<div class="popup" onclick="myFunction1()">Comment mesurer la poitrine ? 
									<img src="custom/images/poit.jpg" class="popuptext" id="myPopup1">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Taille poitrine</option>
									<option  value="custom/20">20</option>
									<option  value="custom/22">22</option>
									<option  value="custom/24">24</option>
									<option  value="custom/26">26</option>
									<option  value="custom/28">28</option>
									<option  value="custom/30">30</option>
								</select>
							</div>
	                    </div>
	                    <div class="form-row">
	                    	<div class="form-holder">
								<div class="popup" onclick="myFunction2()">Comment mesurer le sous-buste? 
									<img src="custom/images/sbust.jpg" class="popuptext" id="myPopup2">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Taille sous-buste</option>
									<option  value="custom/20">20</option>
									<option  value="custom/22">22</option>
									<option  value="custom/24">24</option>
									<option  value="custom/26">26</option>
									<option  value="custom/28">28</option>
									<option  value="custom/30">30</option>
								</select>
							</div>
							<div class="form-holder">
								<div class="popup" onclick="myFunction3()">Comment mesurer les hanches? 
									<img src="custom/images/hanches.jpg" class="popuptext" id="myPopup3">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Taille des hanches</option>
									<option  value="custom/20">20</option>
									<option  value="custom/22">22</option>
									<option  value="custom/24">24</option>
									<option  value="custom/26">26</option>
									<option  value="custom/28">28</option>
									<option  value="custom/30">30</option>
								</select>
							</div>
						</div>
						<div class="form-row">
	                    	<div class="form-holder">
								<div class="popup" onclick="myFunction4()">Comment mesurer les épaules ? 
									<img src="custom/images/ep.jpg" class="popuptext" id="myPopup4">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Taille des épaules</option>
									<option  value="custom/10">10</option>
									<option  value="custom/11">11</option>
									<option  value="custom/12">12</option>
									<option  value="custom/13">13</option>
									<option  value="custom/14">14</option>
									<option  value="custom/15">15</option>
								</select>
							</div>
							<div class="form-holder">
								<div class="popup" onclick="myFunction5()">Comment mesurer l'haut du bras? 
									<img src="custom/images/bras.jpg" class="popuptext" id="myPopup5">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Taille du haut du bras</option>
									<option  value="custom/9">9</option>
									<option  value="custom/10">10</option>
									<option  value="custom/11">11</option>
									<option  value="custom/12">12</option>
									<option  value="custom/13">13</option>
									<option  value="custom/14">14</option>
								</select>
							</div>
						</div>
						<div class="form-row">
	                    	<div class="form-holder">
								<div class="popup" onclick="myFunction6()">Comment mesurer le tour de taille? 
									<img src="custom/images/taille.jpg" class="popuptext" id="myPopup6">
								  </div>
								<select  class="form-control" required>
									<option  value="custom/">Tour de taille</option>
									<option  value="custom/20">20</option>
									<option  value="custom/22">22</option>
									<option  value="custom/24">24</option>
									<option  value="custom/26">26</option>
									<option  value="custom/28">28</option>
									<option  value="custom/30">30</option>
								</select>
							</div>
							
						</div>
						
					</section>
					

						<!-- SECTION 3 -->
						<h4></h4>
						<section>
													<p align="center">											<span class="contact100-form-title">
					<img src="custom/images/logo.png" class="animated bounce infinite" alt="Voileva Logo" id="animated-img1"  align="center">
				</span></p>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Votre Nom" class="form-control" required>
								</div>
								<div class="form-holder">
									<input type="text" placeholder="Votre Prénom" class="form-control" required>
								</div>
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="email" placeholder="Votre Email" class="form-control" required>
								</div>
								<div class="form-holder">
									<input type="number" placeholder="Numéro Téléphone +216 xx xxx xxx" class="form-control" required>
								</div>
								
							</div>
							<div class="form-row">
								<div class="form-holder">
									<select class="form-control" name="pays"> 
										<option value="France" selected="selected">France </option>
										<option value="Afghanistan">Afghanistan </option>
										<option value="Afrique_Centrale">Afrique_Centrale </option>
										<option value="Afrique_du_sud">Afrique_du_Sud </option> 
										<option value="Albanie">Albanie </option>
										<option value="Algerie">Algerie </option>
										<option value="Allemagne">Allemagne </option>
										<option value="Andorre">Andorre </option>
										<option value="Angola">Angola </option>
										<option value="Anguilla">Anguilla </option>
										<option value="Arabie_Saoudite">Arabie_Saoudite </option>
										<option value="Argentine">Argentine </option>
										<option value="Armenie">Armenie </option> 
										<option value="Australie">Australie </option>
										<option value="Autriche">Autriche </option>
										<option value="Azerbaidjan">Azerbaidjan </option>
										<option value="Bahamas">Bahamas </option>
										<option value="Bangladesh">Bangladesh </option>
										<option value="Barbade">Barbade </option>
										<option value="Bahrein">Bahrein </option>
										<option value="Belgique">Belgique </option>
										<option value="Belize">Belize </option>
										<option value="Benin">Benin </option>
										<option value="Bermudes">Bermudes </option>
										<option value="Bielorussie">Bielorussie </option>
										<option value="Bolivie">Bolivie </option>
										<option value="Botswana">Botswana </option>
										<option value="Bhoutan">Bhoutan </option>
										<option value="Boznie_Herzegovine">Boznie_Herzegovine </option>
										<option value="Bresil">Bresil </option>
										<option value="Brunei">Brunei </option>
										<option value="Bulgarie">Bulgarie </option>
										<option value="Burkina_Faso">Burkina_Faso </option>
										<option value="Burundi">Burundi </option>
										<option value="Caiman">Caiman </option>
										<option value="Cambodge">Cambodge </option>
										<option value="Cameroun">Cameroun </option>
										<option value="Canada">Canada </option>
										<option value="Canaries">Canaries </option>
										<option value="Cap_vert">Cap_Vert </option>
										<option value="Chili">Chili </option>
										<option value="Chine">Chine </option> 
										<option value="Chypre">Chypre </option> 
										<option value="Colombie">Colombie </option>
										<option value="Comores">Colombie </option>
										<option value="Congo">Congo </option>
										<option value="Congo_democratique">Congo_democratique </option>
										<option value="Cook">Cook </option>
										<option value="Coree_du_Nord">Coree_du_Nord </option>
										<option value="Coree_du_Sud">Coree_du_Sud </option>
										<option value="Costa_Rica">Costa_Rica </option>
										<option value="Cote_d_Ivoire">Côte_d_Ivoire </option>
										<option value="Croatie">Croatie </option>
										<option value="Cuba">Cuba </option>
										<option value="Danemark">Danemark </option>
										<option value="Djibouti">Djibouti </option>
										<option value="Dominique">Dominique </option>
										<option value="Egypte">Egypte </option> 
										<option value="Emirats_Arabes_Unis">Emirats_Arabes_Unis </option>
										<option value="Equateur">Equateur </option>
										<option value="Erythree">Erythree </option>
										<option value="Espagne">Espagne </option>
										<option value="Estonie">Estonie </option>
										<option value="Etats_Unis">Etats_Unis </option>
										<option value="Ethiopie">Ethiopie </option>
										<option value="Falkland">Falkland </option>
										<option value="Feroe">Feroe </option>
										<option value="Fidji">Fidji </option>
										<option value="Finlande">Finlande </option>
										<option value="France">France </option>
										<option value="Gabon">Gabon </option>
										<option value="Gambie">Gambie </option>
										<option value="Georgie">Georgie </option>
										<option value="Ghana">Ghana </option>
										<option value="Gibraltar">Gibraltar </option>
										<option value="Grece">Grece </option>
										<option value="Grenade">Grenade </option>
										<option value="Groenland">Groenland </option>
										<option value="Guadeloupe">Guadeloupe </option>
										<option value="Guam">Guam </option>
										<option value="Guatemala">Guatemala</option>
										<option value="Guernesey">Guernesey </option>
										<option value="Guinee">Guinee </option>
										<option value="Guinee_Bissau">Guinee_Bissau </option>
										<option value="Guinee equatoriale">Guinee_Equatoriale </option>
										<option value="Guyana">Guyana </option>
										<option value="Guyane_Francaise ">Guyane_Francaise </option>
										<option value="Haiti">Haiti </option>
										<option value="Hawaii">Hawaii </option> 
										<option value="Honduras">Honduras </option>
										<option value="Hong_Kong">Hong_Kong </option>
										<option value="Hongrie">Hongrie </option>
										<option value="Inde">Inde </option>
										<option value="Indonesie">Indonesie </option>
										<option value="Iran">Iran </option>
										<option value="Iraq">Iraq </option>
										<option value="Irlande">Irlande </option>
										<option value="Islande">Islande </option>
										<option value="Israel">Israel </option>
										<option value="Italie">italie </option>
										<option value="Jamaique">Jamaique </option>
										<option value="Jan Mayen">Jan Mayen </option>
										<option value="Japon">Japon </option>
										<option value="Jersey">Jersey </option>
										<option value="Jordanie">Jordanie </option>
										<option value="Kazakhstan">Kazakhstan </option>
										<option value="Kenya">Kenya </option>
										<option value="Kirghizstan">Kirghizistan </option>
										<option value="Kiribati">Kiribati </option>
										<option value="Koweit">Koweit </option>
										<option value="Laos">Laos </option>
										<option value="Lesotho">Lesotho </option>
										<option value="Lettonie">Lettonie </option>
										<option value="Liban">Liban </option>
										<option value="Liberia">Liberia </option>
										<option value="Liechtenstein">Liechtenstein </option>
										<option value="Lituanie">Lituanie </option> 
										<option value="Luxembourg">Luxembourg </option>
										<option value="Lybie">Lybie </option>
										<option value="Macao">Macao </option>
										<option value="Macedoine">Macedoine </option>
										<option value="Madagascar">Madagascar </option>
										<option value="Madère">Madère </option>
										<option value="Malaisie">Malaisie </option>
										<option value="Malawi">Malawi </option>
										<option value="Maldives">Maldives </option>
										<option value="Mali">Mali </option>
										<option value="Malte">Malte </option>
										<option value="Man">Man </option>
										<option value="Mariannes du Nord">Mariannes du Nord </option>
										<option value="Maroc">Maroc </option>
										<option value="Marshall">Marshall </option>
										<option value="Martinique">Martinique </option>
										<option value="Maurice">Maurice </option>
										<option value="Mauritanie">Mauritanie </option>
										<option value="Mayotte">Mayotte </option>
										<option value="Mexique">Mexique </option>
										<option value="Micronesie">Micronesie </option>
										<option value="Midway">Midway </option>
										<option value="Moldavie">Moldavie </option>
										<option value="Monaco">Monaco </option>
										<option value="Mongolie">Mongolie </option>
										<option value="Montserrat">Montserrat </option>
										<option value="Mozambique">Mozambique </option>
										<option value="Namibie">Namibie </option>
										<option value="Nauru">Nauru </option>
										<option value="Nepal">Nepal </option>
										<option value="Nicaragua">Nicaragua </option>
										<option value="Niger">Niger </option>
										<option value="Nigeria">Nigeria </option>
										<option value="Niue">Niue </option>
										<option value="Norfolk">Norfolk </option>
										<option value="Norvege">Norvege </option>
										<option value="Nouvelle_Caledonie">Nouvelle_Caledonie </option>
										<option value="Nouvelle_Zelande">Nouvelle_Zelande </option>
										<option value="Oman">Oman </option>
										<option value="Ouganda">Ouganda </option>
										<option value="Ouzbekistan">Ouzbekistan </option>
										<option value="Pakistan">Pakistan </option>
										<option value="Palau">Palau </option>
										<option value="Palestine">Palestine </option>
										<option value="Panama">Panama </option>
										<option value="Papouasie_Nouvelle_Guinee">Papouasie_Nouvelle_Guinee </option>
										<option value="Paraguay">Paraguay </option>
										<option value="Pays_Bas">Pays_Bas </option>
										<option value="Perou">Perou </option>
										<option value="Philippines">Philippines </option> 
										<option value="Pologne">Pologne </option>
										<option value="Polynesie">Polynesie </option>
										<option value="Porto_Rico">Porto_Rico </option>
										<option value="Portugal">Portugal </option>
										<option value="Qatar">Qatar </option>
										<option value="Republique_Dominicaine">Republique_Dominicaine </option>
										<option value="Republique_Tcheque">Republique_Tcheque </option>
										<option value="Reunion">Reunion </option>
										<option value="Roumanie">Roumanie </option>
										<option value="Royaume_Uni">Royaume_Uni </option>
										<option value="Russie">Russie </option>
										<option value="Rwanda">Rwanda </option>
										<option value="Sahara Occidental">Sahara Occidental </option>
										<option value="Sainte_Lucie">Sainte_Lucie </option>
										<option value="Saint_Marin">Saint_Marin </option>
										<option value="Salomon">Salomon </option>
										<option value="Salvador">Salvador </option>
										<option value="Samoa_Occidentales">Samoa_Occidentales</option>
										<option value="Samoa_Americaine">Samoa_Americaine </option>
										<option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option> 
										<option value="Senegal">Senegal </option> 
										<option value="Seychelles">Seychelles </option>
										<option value="Sierra Leone">Sierra Leone </option>
										<option value="Singapour">Singapour </option>
										<option value="Slovaquie">Slovaquie </option>
										<option value="Slovenie">Slovenie</option>
										<option value="Somalie">Somalie </option>
										<option value="Soudan">Soudan </option> 
										<option value="Sri_Lanka">Sri_Lanka </option> 
										<option value="Suede">Suede </option>
										<option value="Suisse">Suisse </option>
										<option value="Surinam">Surinam </option>
										<option value="Swaziland">Swaziland </option>
										<option value="Syrie">Syrie </option>
										<option value="Tadjikistan">Tadjikistan </option>
										<option value="Taiwan">Taiwan </option>
										<option value="Tonga">Tonga </option>
										<option value="Tanzanie">Tanzanie </option>
										<option value="Tchad">Tchad </option>
										<option value="Thailande">Thailande </option>
										<option value="Tibet">Tibet </option>
										<option value="Timor_Oriental">Timor_Oriental </option>
										<option value="Togo">Togo </option> 
										<option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
										<option value="Tristan da cunha">Tristan de cuncha </option>
										<option value="Tunisie" selected>Tunisie </option>
										<option value="Turkmenistan">Turmenistan </option> 
										<option value="Turquie">Turquie </option>
										<option value="Ukraine">Ukraine </option>
										<option value="Uruguay">Uruguay </option>
										<option value="Vanuatu">Vanuatu </option>
										<option value="Vatican">Vatican </option>
										<option value="Venezuela">Venezuela </option>
										<option value="Vierges_Americaines">Vierges_Americaines </option>
										<option value="Vierges_Britanniques">Vierges_Britanniques </option>
										<option value="Vietnam">Vietnam </option>
										<option value="Wake">Wake </option>
										<option value="Wallis et Futuma">Wallis et Futuma </option>
										<option value="Yemen">Yemen </option>
										<option value="Yougoslavie">Yougoslavie </option>
										<option value="Zambie">Zambie </option>
										<option value="Zimbabwe">Zimbabwe </option>
										</select>
								</div>
								
							</div>
							<div class="form-row">
								<div class="form-holder">
									<input type="text" placeholder="Adresse complète" class="form-control" required>
								</div>
								<div class="form-holder">
									<input type="number" placeholder="Zip Code" class="form-control" required>
								</div>
								
							</div>
						</section>


						<h4></h4>
						<section>
												<p align="center">											<span class="contact100-form-title">
					<img src="custom/images/logo.png" class="animated bounce infinite" alt="Voileva Logo" id="animated-img1"  align="center">
				</span></p>
							<h1>Choisissez un mode de paiement</h1><br><br><br><br><br>
							<div class="form-row">
								
							<div class="form-holder">
							<a href="paypal.html" target="popup" onclick="window.open('paypal.html','Choisir la méthode de paiement','width=600,height=400')"><img src="custom/images/paypal.png" alt=""></a>
							</div>

							<div class="form-holder">
								<a href="d17.html" target="popup" onclick="window.open('d17.html','Scanner notre code','width=200,height=200')"><img src="custom/images/d17.png" alt=""></a>
								</div>
								
							</div>
							
						</section>

					</div>

            	</div>
				
            </form>
		</div>

		<script>
			// When the user clicks on div, open the popup
			function myFunction() {
			  var popup = document.getElementById("myPopup");
			  popup.classList.toggle("show");
			}
			</script>

<script>
	// When the user clicks on div, open the popup
	function myFunction1() {
	  var popup = document.getElementById("myPopup1");
	  popup.classList.toggle("show");
	}
	</script>

<script>
	// When the user clicks on div, open the popup
	function myFunction2() {
	  var popup = document.getElementById("myPopup2");
	  popup.classList.toggle("show");
	}
	</script>

<script>
	// When the user clicks on div, open the popup
	function myFunction3() {
	  var popup = document.getElementById("myPopup3");
	  popup.classList.toggle("show");
	}
	</script>

<script>
	// When the user clicks on div, open the popup
	function myFunction4() {
	  var popup = document.getElementById("myPopup4");
	  popup.classList.toggle("show");
	}
	</script>

<script>
	// When the user clicks on div, open the popup
	function myFunction5() {
	  var popup = document.getElementById("myPopup5");
	  popup.classList.toggle("show");
	}
	</script>

<script>
	// When the user clicks on div, open the popup
	function myFunction6() {
	  var popup = document.getElementById("myPopup6");
	  popup.classList.toggle("show");
	}
	</script>
		<script src="custom/js/jquery-3.3.1.min.js"></script>

		<!-- JQUERY STEP -->
		<script src="custom/js/jquery.steps.js"></script>
		
		<script src="custom/js/main.js"></script>
<!-- chatbot -->
<script>
var botmanWidget = {
    frameEndpoint: '/botman/chat',
    title: "Eva 🥰",
    introMessage: "Mar7ba bik, ana esmi Eva 😊 kifech innajmou n3awnouk ?",
    mainColor: "#FF69B4",
    bubbleBackground: "#FFB6C1",
    bubbleAvatarUrl: "img/avatar.png",
    aboutText: "Powered by Voileva⚡️",
    placeholderText: "5oudh ra7tik..."
};
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
</body>
</html>