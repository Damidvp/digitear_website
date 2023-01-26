var countryMap = {
	"bi":"Africa",
	"km":"Africa",
	"dj":"Africa",
	"er":"Africa",
	"et":"Africa",
	"ke":"Africa",
	"mg":"Africa",
	"mw":"Africa",
	"mu":"Africa",
	"mz":"Africa",
	"re":"Africa",
	"rw":"Africa",
	"sc":"Africa",
	"so":"Africa",
	"ug":"Africa",
	"tz":"Africa",
	"zm":"Africa",
	"zw":"Africa",
	"ao":"Africa",
	"cm":"Africa",
	"cf":"Africa",
	"td":"Africa",
	"cg":"Africa",
	"cd":"Africa",
	"gq":"Africa",
	"ga":"Africa",
	"st":"Africa",
	"dz":"Africa",
	"eg":"Africa",
	"ly":"Africa",
	"ma":"Africa",
	"sd":"Africa",
	"tn":"Africa",
	"bw":"Africa",
	"ls":"Africa",
	"na":"Africa",
	"za":"Africa",
	"sz":"Africa",
	"bj":"Africa",
	"bf":"Africa",
	"cv":"Africa",
	"ci":"Africa",
	"gm":"Africa",
	"gh":"Africa",
	"gn":"Africa",
	"gw":"Africa",
	"lr":"Africa",
	"ml":"Africa",
	"mr":"Africa",
	"ne":"Africa",
	"ng":"Africa",
	"sn":"Africa",
	"sl":"Africa",
	"tg":"Africa",

	"cn":"Asia",
	"kp":"Asia",
	"jp":"Asia",
	"mn":"Asia",
	"kr":"Asia",
	"af":"Asia",
	"bd":"Asia",
	"bt":"Asia",
	"in":"Asia",
	"ir":"Asia",
	"kz":"Asia",
	"kg":"Asia",
	"mv":"Asia",
	"np":"Asia",
	"pk":"Asia",
	"lk":"Asia",
	"tj":"Asia",
	"tm":"Asia",
	"uz":"Asia",
	"bn":"Asia",
	"kh":"Asia",
	"tl":"Asia",
	"id":"Asia",
	"la":"Asia",
	"my":"Asia",
	"mm":"Asia",
	"ph":"Asia",
	"th":"Asia",
	"vn":"Asia",
	"az":"Asia",
	"am":"Asia",
	"cy":"Asia",
	"ge":"Asia",
	"iq":"Asia",
	"il":"Asia",
	"jo":"Asia",
	"kw":"Asia",
	"lb":"Asia",
	"om":"Asia",
	"qa":"Asia",
	"sa":"Asia",
	"sy":"Asia",
	"tr":"Asia",
	"ae":"Asia",
	"ye":"Asia",
	"ru":"Asia",
	"tw":"Asia",

	"by":"Europe",
	"bg":"Europe",
	"cz":"Europe",
	"hu":"Europe",
	"pl":"Europe",
	"md":"Europe",
	"ro":"Europe",
	"sk":"Europe",
	"ua":"Europe",
	"dk":"Europe",
	"ee":"Europe",
	"fi":"Europe",
	"is":"Europe",
	"ie":"Europe",
	"lv":"Europe",
	"lt":"Europe",
	"no":"Europe",
	"se":"Europe",
	"gb":"Europe",
	"al":"Europe",
	"ba":"Europe",
	"hr":"Europe",
	"gr":"Europe",
	"it":"Europe",
	"mt":"Europe",
	"pt":"Europe",
	"si":"Europe",
	"es":"Europe",
	"mk":"Europe",
	"rs":"Europe",
	"at":"Europe",
	"be":"Europe",
	"fr":"Europe",
	"de":"Europe",
	"nl":"Europe",
	"ch":"Europe",

	"ar":"southAmerica",
	"bo":"southAmerica",
	"br":"southAmerica",
	"cl":"southAmerica",
	"co":"southAmerica",
	"ec":"southAmerica",
	"fk":"southAmerica",
	"gy":"southAmerica",
	"gf":"southAmerica",
	"pe":"southAmerica",
	"py":"southAmerica",
	"sr":"southAmerica",
	"uy":"southAmerica",
	"ve":"southAmerica",

	"ca":"northAmerica",
	"gl":"northAmerica",
	"us":"northAmerica",
	"bz":"northAmerica",
	"cr":"northAmerica",
	"sv":"northAmerica",
	"gt":"northAmerica",
	"hn":"northAmerica",
	"mx":"northAmerica",
	"ni":"northAmerica",
	"pa":"northAmerica",
	"bs":"northAmerica",
	"dm":"northAmerica",
	"ag":"northAmerica",
	"ds":"northAmerica",
	"bb":"northAmerica",
	"cu":"northAmerica",
	"dn":"northAmerica",
	"do":"northAmerica",
	"gd":"northAmerica",
	"ht":"northAmerica",
	"jm":"northAmerica",
	"kn":"northAmerica",
	"lc":"northAmerica",
	"tt":"northAmerica",

	"au":"Australia",
	"nz":"Australia",
	"fj":"Australia",
	"sb":"Australia",
	"pg":"Australia",
	"vu":"Australia",
	"nc":"Australia",
	"pf":"Australia"
};
var regionMap = {
	"Africa" : {
		"countries" : ["bi", "km", "dj", "er", "et", "ke", "mg", "mw", "mu", "mz", "re", "rw", "sc", "so", "ug", "tz", "zm", "zw", "bj", "bf", "cv", "ci", "gm", "gh", "gn", "gw", "lr", "ml", "mr", "ne", "ng", "sn", "sl", "tg", "bw", "ls", "na", "za", "sz", "dz", "eg", "ly", "ma", "sd", "tn", "ao", "cm", "cf", "td", "cg", "cd", "gq", "ga", "st"],
		"name" : "Africa"
	},
	"Asia" : {
		"countries" : ["cn", "kp", "ru", "jp", "mn", "kr", "af", "bd", "bt", "in", "ir", "kz", "kg", "mv", "np", "pk", "lk", "tj", "tm", "uz", "bn", "kh", "tl", "id", "la", "my", "mm", "ph", "th", "vn", "az", "am", "cy", "ge", "iq", "il", "jo", "kw", "lb", "om", "qa", "sa", "sy", "tr", "ae", "ye", "tw"],
		"name" : "Asia"
	},
	"Europe" : {
		"countries" : ["by", "bg", "cz", "hu", "pl", "md", "ro", "sk", "ua", "at", "be", "fr", "de", "nl", "ch", "al", "ba", "hr", "gr", "it", "mt", "pt", "si", "es", "mk", "rs", "dk", "ee", "fi", "is", "ie", "lv", "lt", "no", "se", "gb"],
		"name" : "Europe"
	},
	"southAmerica" :{
		"countries" : ["ar", "bo", "br", "cl", "co", "ec", "fk", "gy", "gf", "pe", "py", "sr", "uy", "ve"],
		"name" : "South America"
	},
	"northAmerica" :{
		"countries" : ["ca", "gl", "us", "bz", "cr", "sv", "gt", "hn", "mx", "ni", "pa", "bs", "dm", "ag", "ds", "bb", "cu", "dn", "do", "gd", "ht", "jm", "kn", "lc", "tt"],
		"name" : "North America"
	},
	"Australia" :{
		"countries" : ["au", "nz", "fj", "sb", "pg", "vu", "nc", "pf"],
		"name" : "Australia",
	},
};

var currentlyZoomed = false;
var currentRegionSelected;
var countrySelected = false;
var currentCountrySelected;
var selectedCode;



function getCountriesInRegion(cc) {

	for (var regionKey in regionMap)
	{
		var countries = regionMap[regionKey].countries;
		for (var countryIndex in countries)
		{
			if (cc == countries[countryIndex])
			{
				return countries;
			}
		}
	}
}

function getRegion(cc) {
	var regionCode = countryMap[cc];
	return regionMap[regionCode];

}

function highlightRegionOfCountry (cc) {
    if(!currentlyZoomed){
      	var countries = getRegion(cc).countries;
	    for (countryIndex in countries){
	      	$('#vmap').vectorMap('highlight',countries[countryIndex]);
	    }
    } else {
    	var region = countryMap[cc];
    	if(region != currentRegionSelected){
    		var countries = getRegion(cc).countries;
		    for (countryIndex in countries){
		      	$('#vmap').vectorMap('highlight',countries[countryIndex]);
		    }
    	}
    }
}

function unhighlightRegionOfCountry (cc) {
	var countries = getRegion(cc).countries;
	if(!currentlyZoomed){
	    for (countryIndex in countries){
	      	$('#vmap').vectorMap('unhighlight',countries[countryIndex]);
	    }
	    $('#vmap').vectorMap('set', 'colors', test);
	} else{
		var region = countryMap[cc];
		for (countryIndex in countries){
	      	$('#vmap').vectorMap('unhighlight',countries[countryIndex]);
	    }
	    $('#vmap').vectorMap('set', 'colors', getColors(currentRegionSelected));
	} 
}

function zoomInOnContinent (dX,dY,dS) {
	currentlyZoomed = true;
	$('#vmap').vectorMap('zoomIn',dX,dY,dS);
	document.getElementById('backButton').style.display='block';
	$('#directions').text('Sélectionnez votre pays');

}

function zoomOutOnContinent (dX,dY,dS) {
	currentlyZoomed = false;
	$('#description-box').fadeOut();
	$('#vmap').vectorMap('zoomOut',dX,dY,dS);
	document.getElementById('directions').style.display='block';
	document.getElementById('backButton').style.display='none';
	$('#directions').text('Sélectionnez votre continent');
	
	
}

function setRegion(cc){
	var selectedRegion = countryMap[cc];
	currentRegionSelected = selectedRegion;

}

//Fonction permettant d'afficher un popup contenant les informations du distributeur pour un pays
//Utilise les fichiers jquery.vmap.programdata.js pour la redirection du site web et jquery.vmap.sampledata.js pour la couleur du background (couleur selon distri ou noir)
function displayBoxText (cc) {
	if(countrySelected){
		var selectedRegion = countryMap[selectedCode];

		if(selectedRegion == currentRegionSelected){
			document.getElementById('directions').style.display='none';

			if($( "div#description-box" ).hasClass("left"))
				$( "div#description-box" ).removeClass( "left" );
			else if($( "div#description-box" ).hasClass("right"))
				$( "div#description-box" ).removeClass( "right" );

			if(currentRegionSelected=='Europe' || currentRegionSelected=='Asia' || currentRegionSelected=='Australia')
				$( "div#description-box" ).toggleClass( "left" );
			else
				$( "div#description-box" ).toggleClass( "right" );

			$('#description-box').fadeIn();
			$('#description-box').append('<div class="center-text" id="modal-header">' + currentCountrySelected + '</div>');

			if(currentRegionSelected == 'Africa')
				var terms = AfricaPrograms[selectedCode];
			else if(currentRegionSelected == 'Europe')
				var terms = EuropePrograms[selectedCode];
			else if(currentRegionSelected == 'Asia')
				var terms = AsiaPrograms[selectedCode];
			else if(currentRegionSelected == 'Australia')
				var terms = AustraliaPrograms[selectedCode];
			else if(currentRegionSelected == 'northAmerica')
				var terms = NAPrograms[selectedCode];
			else if(currentRegionSelected == 'southAmerica')
				var terms = SAPrograms[selectedCode];
			else if (currentRegionSelected == 'northAmerica')
				var terms = CanadaPrograms[selectedCode];

			$('#description-box').append('<div id="program-holder"></div>');
			//Dans le cas ou il n'y a pas de distributeur pour le pays sélectionné
			if(terms == null){
				$('#program-holder').append("<b><div class='term-programs center-text'>Overline Systems n'a pas de distributeur local pour le moment. Veuillez contacter notre siège social.<div> Tel. : +33 (0)5 57 70 21 21 <div> Mail : sales@overline-systems.com</div></b></div> ");
			}else{
				//Génération du HTML du popup selon le pays sélectionné
				if(terms.yrsem != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Year/Semester</div>');
					var programInfo = terms.yrsem;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><div class="programs "><img src="../samples/images/flagimg.png"><div class="program-name center-left">' + value + '</div></div></a>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Overline != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Overline Systems</div>');
					var programInfo = terms.Overline;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Overline Systems</div><div class="program-name center-left">21 Av. Sophie Wallerstein</div><div class="program-name center-left">33510</div><div class="program-name center-left">Andernos, France</div><div class="program-name center-left">Tel : +33 (0)5 57 70 21 21 </div><div class="program-name center-left">Mail : sales@overline-systems.com</div>' + value + '</b></div></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				} 
				if(terms.TNRDistribution != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">TNR Distribution</div>');
					var programInfo = terms.TNRDistribution;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Brian Thompson</div><div class="program-name center-left">10444 E White Horse Lake Drive</div><div class="program-name center-left">Box 50670</div><div class="program-name center-left">Parks, AZ 86018</div><div class="program-name center-left">Tel : (805) 794 7130</div><div class="program-name center-left">Site internet : <a href="http://www.digitear.info">http://www.digitear.info</a>' + value + '</b></div></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				} 
				if(terms.Italie != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Leading Technologies</div>');
					var programInfo = terms.Italie;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Leading Technologies</div><div class="program-name center-left">Via Solferino, 54</div><div class="program-name center-left">20900 Monza MB, Italie</div><div class="program-name center-left">Tel : +39 039 941 5200</div><div class="program-name center-left">Site internet : <a href="http://www.leadingtech.it">http://www.leadingtech.it</a>' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Espagne != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">COEL Audio Solutions</div>');
					var programInfo = terms.Espagne;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Coel Audio Solutions</div><div class="program-name center-left">Barrio Elizalde, Nº 25 Pabellón 10</div><div class="program-name center-left">48213 Izurza, Vizcaya</div><div class="program-name center-left">Tel :  +34 946 202 338</div><div class="program-name center-left">Site internet : <a href="http://www.coelaudio.com">http://www.coelaudio.com</a>' + value + '</b></div></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Sonotechnique != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Sonotechnique</div>');
					var programInfo = terms.Sonotechnique;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Sonotechnique</div><div class="program-name center-left">200 Gince Street Montreal,</div><div class="program-name center-left">Canada</div><div class="program-name center-left">Tel Montreal:  (514)332-6868</div><div class="program-name center-left">Tel Toronto:  (416)947-9112</div><div class="program-name center-left">Tel Vancouver:  (604)461-2202</div><div class="program-name center-left">Site internet : <a href="http://www.sonotechnique.ca/">http://www.sonotechnique.ca/</a>' + value + '</b></div></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Suisse != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Defi Technique</div>');
					var programInfo = terms.Suisse;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Defi Technique</div><div class="program-name center-left">Rue des Alpes 62</div><div class="program-name center-left">1023 Crissier, Suisse</div><div class="program-name center-left">Tel : +41 21 671 00 11</div><div class="program-name center-left">Site internet : <a href="https://defitechnique.com">https://defitechnique.com</a>' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Maroc != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">LTS Network</div>');
					var programInfo = terms.Maroc;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">LTS Network</div><div class="program-name center-left">377, rue Mustapha El Mâani, 1st floor</div><div class="program-name center-left">20140 Casablanca</div><div class="program-name center-left">Tel : +212 (0)5 22 48 20 28</div><div class="program-name center-left">Site internet : <a href="http://www.lts-network.com">http://www.lts-network.com</a>' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Chine != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Dreamfly Ltd.</div>');
					var programInfo = terms.Chine;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Dreamfly Ltd.</div><div class="program-name center-left">He Dong Lu, Li Wan Qu Rd</div><div class="program-name center-left">510380 Guangzhou</div><div class="program-name center-left">Tel : +8613432036075 </div><div class="program-name center-left">Site internet : <a href="http://www.gzdreamfly.com">http://www.gzdreamfly.com</a>' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Exea_media != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Exea Media</div>');
					var programInfo = terms.Exea_media;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Exea Media</div><div class="program-name center-left">Calle 150 #21A-14 Piso 3</div><div class="program-name center-left">Bogota</div><div class="program-name center-left">Tel : +57 310 3155327 </div><div class="program-name center-left">Site internet : <a href="http://www.exeamedia.com">http://www.exeamedia.com</a>' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Ukraine != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Cinema Pro Ltd.</div>');
					var programInfo = terms.Ukraine;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Cinema Pro Ltd.</div><div class="program-name center-left">Rivne, Danyla Galiskogo str., 9</div><div class="program-name center-left">33027 Rivne</div><div class="program-name center-left">Tel : +38 (098) 502-38-46 </div><div class="program-name center-left">Site internet : <i>None</i> ' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.Qatar != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Gulf Broadcast Technology</div>');
					var programInfo = terms.Qatar;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Gulf Broadcast Technology</div><div class="program-name center-left">Bin Omran Town Center Building 1</div><div class="program-name center-left">Doha</div><div class="program-name center-left">Tel : +974 4483 69 55 </div><div class="program-name center-left">Site internet : <a href="http://gulfbt.com">http://gulfbt.com</a> ' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
				if(terms.BroadcastCommunicationsInternational != null){
					$('#program-holder').append('<div class="term-programs"><div class="subheader center-text">Broadcast Communications International</div>');
					var programInfo = terms.BroadcastCommunicationsInternational;
					programInfo.forEach(function (value, i) {
					    if(i%2 == 0)
					    	$('#program-holder').append('<a class="program-link" href=' + programInfo[i+1] + '><img src="img/digitear.png"></a><b><div class="program-name center-left">Broadcast Communications International</div><div class="program-name center-left">7030 Ang Mo Kio Ave 5 #06-06</div><div class="program-name center-left">569880 Singapore</div><div class="program-name center-left">Tel : (65) 6255 1808 </div><div class="program-name center-left">Site internet : <a href="http://www.bci.com.sg">http://www.bci.com.sg</a> ' + value + '</b></div></div></div></div>');
					});
					$('#program-holder').append('</div>');
				}
			}
		}else{
			$('#description-box').fadeOut();
		}
	}
}

function setRegionColors () {
	if (currentlyZoomed)
		$('#vmap').vectorMap('set', 'colors', getColors(currentRegionSelected));
	else
		$('#vmap').vectorMap('set', 'colors', test);
}