var sample_data = {"af":"16.63","al":"11.58","dz":"158.97","ao":"85.81","ag":"1.1","ar":"351.02","am":"8.83","au":"1219.72","at":"366.26","az":"52.17","bs":"7.54","bh":"21.73","bd":"105.4","bb":"3.96","by":"52.89","be":"461.33","bz":"1.43","bj":"6.49","bt":"1.4","bo":"19.18","ba":"16.2","bw":"12.5","br":"2023.53","bn":"11.96","bg":"44.84","bf":"8.67","bi":"1.47","kh":"11.36","cm":"21.88","ca":"1563.66","cv":"1.57","cf":"2.11","td":"7.59","cl":"199.18","cn":"5745.13","co":"283.11","km":"0.56","cd":"12.6","cg":"11.88","cr":"35.02","ci":"22.38","hr":"59.92","cy":"22.75","cz":"195.23","dk":"304.56","dj":"1.14","dm":"0.38","do":"50.87","ec":"61.49","eg":"216.83","sv":"21.8","gq":"14.55","er":"2.25","ee":"19.22","et":"30.94","fj":"3.15","fi":"231.98","fr":"2555.44","ga":"12.56","gm":"1.04","ge":"11.23","de":"3305.9","gh":"18.06","gr":"305.01","gd":"0.65","gt":"40.77","gn":"4.34","gw":"0.83","gy":"2.2","ht":"6.5","hn":"15.34","hk":"226.49","hu":"132.28","is":"12.77","in":"1430.02","id":"695.06","ir":"337.9","iq":"84.14","ie":"204.14","il":"201.25","it":"2036.69","jm":"13.74","jp":"5390.9","jo":"27.13","kz":"129.76","ke":"32.42","ki":"0.15","kr":"986.26","undefined":"5.73","kw":"117.32","kg":"4.44","la":"6.34","lv":"23.39","lb":"39.15","ls":"1.8","lr":"0.98","ly":"77.91","lt":"35.73","lu":"52.43","mk":"9.58","mg":"8.33","mw":"5.04","my":"218.95","mv":"1.43","ml":"9.08","mt":"7.8","mr":"3.49","mu":"9.43","mx":"1004.04","md":"5.36","mn":"5.81","me":"3.88","ma":"91.7","mz":"10.21","mm":"35.65","na":"11.45","np":"15.11","nl":"770.31","nz":"138","ni":"6.38","ne":"5.6","ng":"206.66","no":"413.51","om":"53.78","pk":"174.79","pa":"27.2","pg":"8.81","py":"17.17","pe":"153.55","ph":"189.06","pl":"438.88","pt":"223.7","qa":"126.52","ro":"158.39","ru":"14.91","rw":"5.69","ws":"0.55","st":"0.19","sa":"434.44","sn":"12.66","rs":"38.92","sc":"0.92","sl":"1.9","sg":"217.38","sk":"86.26","si":"46.44","sb":"0.67","za":"154.41","es":"1374.78","lk":"48.24","kn":"0.56","lc":"1","vc":"0.58","sd":"65.93","sr":"3.3","sz":"3.17","se":"444.59","ch":"522.44","sy":"59.63","tw":"426.98","tj":"5.58","tz":"22.43","th":"312.61","tl":"0.62","tg":"3.07","to":"0.3","tt":"21.2","tn":"43.86","tr":"729.05","tm":0,"ug":"17.12","ua":"136.56","ae":"239.65","gb":"2258.57","us":"14624.18","uy":"40.71","uz":"37.72","vu":"0.72","ve":"285.21","vn":"101.99","ye":"30.02","zm":"15.69","zw":"5.57"};

//Définition des couleurs des pays selon affichage de la carte (var test = affichage global de la carte)

var test = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

var Africa = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

var europeOnClick = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

var southAmericaOnClick = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

var northAmericaOnClick = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

var asiaOnClick = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

var australiaOnClick = {
	/* Africa */
	"bi":"#010101",
	"km":"#010101",
	"dj":"#010101",
	"er":"#010101",
	"et":"#010101",
	"ke":"#010101",
	"mg":"#010101",
	"mw":"#010101",
	"mu":"#010101",
	"mz":"#010101",
	"re":"#010101",
	"rw":"#010101",
	"sc":"#010101",
	"so":"#010101",
	"ug":"#010101",
	"tz":"#010101",
	"zm":"#010101",
	"zw":"#010101",
	"ao":"#010101",
	"cm":"#010101",
	"cf":"#010101",
	"td":"#010101",
	"cg":"#010101",
	"cd":"#010101",
	"gq":"#010101",
	"ga":"#010101",
	"st":"#010101",
	"dz":"#010101",
	"eg":"#010101",
	"ly":"#010101",
	"ma":"#7011CA",
	"sd":"#010101",
	"tn":"#010101",
	"bw":"#010101",
	"ls":"#010101",
	"na":"#010101",
	"za":"#010101",
	"sz":"#010101",
	"bj":"#010101",
	"bf":"#010101",
	"cv":"#010101",
	"ci":"#010101",
	"gm":"#010101",
	"gh":"#010101",
	"gn":"#010101",
	"gw":"#010101",
	"lr":"#010101",
	"ml":"#010101",
	"mr":"#010101",
	"ne":"#010101",
	"ng":"#010101",
	"sn":"#010101",
	"sl":"#010101",
	"tg":"#010101",

	/* Asia */
	"cn":"#119966",
	"kp":"#010101",
	"jp":"#010101",
	"mn":"#010101",
	"kr":"#010101",
	"af":"#010101",
	"bd":"#010101",
	"bt":"#010101",
	"in":"#010101",
	"ir":"#010101",
	"kz":"#010101",
	"kg":"#010101",
	"mv":"#010101",
	"np":"#010101",
	"pk":"#010101",
	"lk":"#010101",
	"tj":"#010101",
	"tm":"#010101",
	"uz":"#010101",
	"bn":"#238033",
	"kh":"#238033",
	"tl":"#010101",
	"id":"#238033",
	"la":"#238033",
	"my":"#238033",
	"mm":"#238033",
	"ph":"#238033",
	"th":"#238033",
	"vn":"#238033",
	"az":"#010101",
	"am":"#010101",
	"cy":"#010101",
	"ge":"#010101",
	"iq":"#010101",
	"il":"#010101",
	"jo":"#010101",
	"kw":"#010101",
	"lb":"#010101",
	"om":"#010101",
	"qa":"#11EE66",
	"sa":"#010101",
	"sy":"#010101",
	"tr":"#010101",
	"ae":"#010101",
	"ye":"#010101",
	"ru":"#010101",
	"tw":"#010101",

	/* europe */
	"by":"#010101",
	"bg":"#010101",
	"cz":"#010101",
	"hu":"#010101",
	"pl":"#010101",
	"md":"#010101",
	"ro":"#010101",
	"sk":"#010101",
	"ua":"#66DDCB",
	"dk":"#010101",
	"ee":"#010101",
	"fi":"#010101",
	"is":"#010101",
	"ie":"#010101",
	"lv":"#010101",
	"lt":"#010101",
	"no":"#010101",
	"se":"#010101",
	"gb":"#010101",
	"al":"#010101",
	"ba":"#010101",
	"hr":"#010101",
	"gr":"#010101",
	"it":"#35EAFF",
	"mt":"#010101",
	"pt":"#010101",
	"si":"#010101",
	"es":"#0050E4",
	"mk":"#010101",
	"rs":"#010101",
	"at":"#010101",
	"be":"#0090d4",
	"fr":"#0090d4",
	"de":"#010101",
	"nl":"#0090d4",
	"ch":"#35CAFD",

	/* South America */
	"ar":"#EE4520",
	"bo":"#EE4520",
	"br":"#EE4520",
	"cl":"#EE4520",
	"co":"#EE4520",
	"ec":"#EE4520",
	"fk":"#EE4520",
	"gy":"#EE4520",
	"gf":"#EE4520",
	"pe":"#EE4520",
	"py":"#EE4520",
	"sr":"#EE4520",
	"uy":"#EE4520",
	"ve":"#EE4520",

	/* North America */
	"ca":"#FFCC31",
	"gl":"#010101",
	"us":"#FAAD31",
	"bz":"#EE4520",
	"cr":"#EE4520",
	"sv":"#EE4520",
	"gt":"#EE4520",
	"hn":"#EE4520",
	"mx":"#FAAD31",
	"ni":"#EE4520",
	"pa":"#EE4520",
	"bs":"#EE4520",
	"dm":"#EE4520",
	"ag":"#EE4520",
	"ds":"#EE4520",
	"bb":"#EE4520",
	"cu":"#EE4520",
	"dn":"#EE4520",
	"do":"#EE4520",
	"gd":"#EE4520",
	"ht":"#EE4520",
	"jm":"#EE4520",
	"kn":"#EE4520",
	"lc":"#EE4520",
	"tt":"#EE4520",

	/* Australia */
	"au":"#010101",
	"nz":"#010101",
	"fj":"#010101",
	"sb":"#010101",
	"pg":"#010101",
	"vu":"#010101",
	"nc":"#010101",
	"pf":"#010101"
};

function getColors(region){
	if(region === 'Africa')
		return Africa;
	else if(region === 'Europe')
		return europeOnClick;
	else if(region === 'Asia')
		return asiaOnClick;
	else if(region === 'southAmerica')
		return southAmericaOnClick;
	else if(region === 'northAmerica')
		return northAmericaOnClick;
	else if(region === 'Australia')
		return australiaOnClick;
};