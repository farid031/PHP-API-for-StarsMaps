<?php
include 'koneksi.php';
$node = array(
            array("1","Node 1",-7.058686,112.7952738),
            array("2","Node 2",-7.1139906,113.321909),
            array("3","Node 3",-7.1245747,113.3843829),
            array("4","Node 4",-7.2172278,113.3958764),
            array("5","Node 5",-7.1609344,113.4867306),
            array("6","Node 6",-7.0435105,113.5441148),
            array("7","Node 7",-7.0552314,113.6738851),
            array("8","Node 8",-7.1066431,113.8085095),
            array("9","Node 9",-7.0197318,113.8573546),
            array("10","Node 10",-7.0060435,113.8560316),
            array("11","Node 11",-7.0090534,113.8533816),
            array("12","Node 12",-7.0067589,113.8598614),
            array("13","Node 13",-7.2453484,112.7689709),
            array("14","Node 14",-7.2409528,112.7529322),
            array("15","Node 15",-7.2560353,112.7504778),
            array("16","Node 16",-7.2324388,112.7283349),
            array("17","Node 17",-7.2558088,112.7439855),
            array("18","Node 18",-7.260562,112.7589039),
            array("19","Node 19",-7.2562016,112.7425738),
            array("20","Node 20",-7.2843026,112.7558674),
            array("21","Node 21",-7.3065121,112.7618113),
            array("22","Node 22",-7.3085553,112.7697077),
            array("23","Node 23",-7.3274051,112.7309732),
            array("24","Node 24",-7.2960058,112.7390334),
            array("25","Node 25",-7.2747412,112.7267817),
            array("26","Node 26",-7.3276011,112.7107242),
            array("27","Node 27",-7.3464936,112.7293955),
            array("28","Node 28",-7.3503032,112.7031324),
            array("29","Node 29",-7.3896331,112.7279378),
            array("30","Node 30",-7.3980181,112.5942296),
            array("31","Node 31",-7.3938077,112.6737982),
            array("32","Node 32",-7.358974,112.6810358),
            array("33","Node 33",-7.3570088,112.6912674),
            array("34","Node 34",-7.4301955,112.7218953),
            array("35","Node 35",-7.451493,112.7176962),
            array("36","Node 36",-7.420668,112.6729142),
            array("37","Node 37",-7.4028743,112.5875618),
            array("38","Node 38",-7.4460238,112.6517306),
            array("39","Node 39",-7.2497735,112.5608902),
            array("40","Node 40",-7.1694765,112.5833569),
            array("41","Node 41",-7.1533565,112.5183586),
            array("42","Node 42",-7.2619455,112.501053),
            array("43","Node 43",-7.4402302,112.4599581),
            array("44","Node 44",-7.4813057,112.6468561),
            array("45","Node 45",-7.5028257,112.7090849),
            array("46","Node 46",-7.4904648,112.6043863),
            array("47","Node 47",-7.5416712,112.6991573),
            array("48","Node 48",-7.4752909,112.5602091),
            array("49","Node 49",-7.2252435,112.7408002),
            array("50","Node 50",-7.2297838,112.6827229),
            array("51","Node 51",-7.2585347,112.680293),
            array("52","Node 52",-7.1708957,112.6537093),
            array("53","Node 53",-7.2572505,112.6686659),
            array("54","Node 54",-7.5168927,112.5578985),
            array("55","Node 55",-7.5477144,112.6974223),
            array("56","Node 56",-7.5643061,112.69253),
            array("57","Node 57",-7.4914082,112.4465325),
            array("58","Node 58",-7.5698133,112.338619),
            array("59","Node 59",-7.5375366,112.2307619),
            array("60","Node 60",-7.4574186,112.2279246),
            array("61","Node 61",-7.1897244,112.1710311),
            array("62","Node 83",-7.2713662,112.3567368),
            array("63","Node 63",-7.2591471,112.3613866),
            array("64","Node 64",-7.1868474,112.1966793),
            array("65","Node 65",-7.0975153,112.2663116),
            array("66","Node 66",-6.9023393,112.1338071),
            array("67","Node 67",-6.9822474,112.1140393),
            array("68","Node 68",-7.5984099,112.7835332),
            array("69","Node 69",-7.565625,112.7177754),
            array("70","Node 70",-7.579719,112.6909743),
            array("71","Node 71",-7.6539769,112.6876873),
            array("72","Node 72",-7.7716665,112.7460877),
            array("73","Node 73",-8.0147092,113.240179),
            array("74","Node 74",-7.7592746,113.2289142),
            array("75","Node 75",-7.7335456,113.7270063),
            array("76","Node 76",-8.1685894,113.7030592),
            array("77","Node 77",-8.1898177,113.6523098),
            array("78","Node 78",-8.2097974,113.6022129),
            array("79","Node 79",-8.2770798,113.5347167),
            array("80","Node 80",-8.2381636,113.7122069),
            array("81","Node 81",-8.1487688,113.4298434),
            array("82","Node 82",-8.0784699,113.2376714),
            array("83","Node 83",-8.2734411,113.3683448),
            array("84","Node 84",-8.1039287,113.2324919),
            array("85","Node 85",-8.1025379,113.2220785),
            array("86","Node 86",-8.1350499,113.2137935),
            array("87","Node 87",-8.1770602,113.799197),
            array("88","Node 88",-8.1800661,113.8624213),
            array("89","Node 89",-7.7029987,114.0146411),
            array("90","Node 90",-7.7796143,114.3100946),
            array("91","Node 91",-8.2078037,113.174417),
            array("92","Node 92",-8.0716121,112.6415451),
            array("93","Node 93",-8.0519118,112.6271784),
            array("94","Node 94",-7.9871514,112.6356548),
            array("95","Node 95",-7.9938521,112.6476524),
            array("96","Node 96",-8.0630021,112.6000896),
            array("97","Node 97",-8.1337082,112.5739023),
            array("98","Node 98",-7.9840972,112.6261677),
            array("99","Node 99",-7.9418573,112.6420639),
            array("100","Node 100",-7.9159077,112.6549681),
            array("101","Node 101",-7.86282,112.5268058),
            array("102","Node 102",-7.665666,112.5370475),
            array("103","Node103",-7.6647107,112.5822097),
            array("104","Node 104",-7.5333366,112.5542211),
            array("105","Node 105",-7.5347725,112.5603473),
            array("106","Node 106",-7.5232918,112.5742285),
            array("107","Node 107",-7.4975315,112.476603),
            array("108","Node 108",-7.5642465,112.5358261),
            array("109","Node 109",-7.566279,112.48317),
            array("110","Node 110",-7.6122892,112.489575),
            array("111","Node 111",-7.6112712,112.5314787),
            array("112","Node 112",-7.5815224,112.4174129),
            array("113","Node 113",-7.5325272,112.4069759),
            array("114","Node 114",-7.5624103,112.3663107),
            array("115","Node 115",-7.5701674,112.3511919),
            array("116","Node 116",-8.10307,112.159434),
            array("117","Node 117",-8.1315955,112.5691961),
            array("118","Node 118",-8.0730392,111.9073363),
            array("119","Node 119",-8.057938,112.0492966),
            array("120","Node 120",-8.0167047,111.9253819),
            array("121","Node 121",-8.1407602,112.144862),
            array("122","Node 122",-8.063176,111.9072636),
            array("123","Node 123",-7.8205059,112.0119539),
            array("124","Node 124",-7.963851,112.0267475),
            array("125","Node 125",-7.9528885,111.9601853),
            array("126","Node 126",-7.9251124,112.1259088),
            array("127","Node 127",-7.9049939,112.0349267),
            array("128","Node 128",-7.8626916,112.1531967),
            array("129","Node 129",-7.8980143,111.9907755),
            array("130","Node 130",-7.8270404,112.0315844),
            array("131","Node 131",-7.8241919,112.0268208),
            array("132","Node 132",-7.8183357,112.0291548),
            array("133","Node 133",-7.8144176,112.0140886),
            array("134","Node 134",-7.8700876,112.0290305),
            array("135","Node 135",-7.8622655,112.0022406),
            array("136","Node 136",-7.917978,112.1278195),
            array("137","Node 137",-7.8133908,112.0086582),
            array("138","Node 138",-7.8108079,112.0087869),
            array("139","Node 139",-7.811743,112.0151012),
            array("140","Node 140",-7.8144429,112.0307009),
            array("141","Node 141",-7.8776437,112.383443),
            array("142","Node 142",-8.0864808,112.320619),
            array("143","Node 143",-8.1431257,112.3432094),
            array("144","Node 144",-7.7566956,112.2817011),
            array("145","Node 145",-7.7725205,112.1960187),
            array("146","Node 146",-7.6765133,112.2333491),
            array("147","Node 147",-7.6922069,112.2716296),
            array("148","Node 148",-7.6840616,112.3005342),
            array("149","Node 149",-7.8158917,112.0622286),
            array("150","Node 150",-7.8255041,112.1786495),
            array("151","Node 151",-7.7837551,112.1195328),
            array("152","Node 152",-7.7586318,112.1754206),
            array("153","Node 153",-7.8004131,112.0357622),
            array("154","Node  154",-7.7937167,112.0098964),
            array("155","Node 155",-7.8060298,112.0339509),
            array("156","Node 156",-7.7688529,112.1964749),
            array("157","Node 157",-7.7678696,112.1939751),
            array("158","Node 158",-7.7666365,112.1968075),
            array("159","Node 159",-7.7381754,112.1847759),
            array("160","Node 160",-7.7432571,112.1998606),
            array("161","Node 161",-7.712266,112.1295224),
            array("162","Node 166",-7.6229199,112.1727255),
            array("163","Node 163",-7.6246532,112.1767166),
            array("164","Node 164",-7.669842,112.2734627),
            array("165","Node 165",-7.6049992,112.3105605),
            array("166","Node 166",-7.6331583,112.302235),
            array("167","Node 167",-7.6406838,112.2320178),
            array("168","Node 168",-7.6441716,112.2380689),
            array("169","Node 169",-7.6431612,112.3226625),
            array("170","Node 170",-7.6879923,112.2727181),
            array("171","Node 171",-7.610574,112.2397921),
            array("172","Node 172",-7.5837431,112.2365306),
            array("173","Node 173",-7.5572058,112.2352613),
            array("174","Node 174",-7.5600394,112.2019004),
            array("175","Node 175",-7.5386448,112.2380283),
            array("176","Node 176",-7.5395938,112.278701),
            array("177","Node 177",-7.538164,112.2490388),
            array("178","Node 178",-7.5553232,112.2404892),
            array("179","Node 179",-7.6949367,112.0781155),
            array("180","Node 180",-7.5829249,112.1646747),
            array("181","Node 181",-7.5901566,112.1852741),
            array("182","Node 182",-7.5725889,112.1937223),
            array("183","Node 183",-7.5775052,112.1489906),
            array("184","Node 184",-7.600823,112.112921),
            array("185","Node 185",-7.601139,112.1039934),
            array("186","Node 186",-7.606494,112.0496069),
            array("187","Node 187",-7.6268611,112.0389629),
            array("188","Node 186",-7.626117,112.0199079),
            array("189","Node 189",-7.6396312,112.0159144),
            array("190","Node 190",-7.6035251,112.021775),
            array("191","Node 191",-7.6875635,112.0180841),
            array("192","Node 192",-7.725026,112.0251247),
            array("193","Node 193",-7.780508,112.0057913),
            array("194","Node 194",-7.7803831,112.0003407),
            array("195","Node 195",-7.7951799,112.0017569),
            array("196","Node 196",-7.6560645,111.9320518),
            array("197","Node 197",-7.6021721,111.9444114),
            array("198","Node 198",-7.6816204,111.9262173),
            array("199","Node 199",-8.0731336,111.9020378),
            array("200","Node 200",-8.1221467,111.8938409),
            array("201","Node 201",-8.1224866,111.9152986),
            array("202","Node 202",-8.1650503,111.8523809),
            array("203","Node 203",-8.1212952,111.7989562),
            array("204","Node 204",-8.0575465,111.8536348),
            array("205","Node 205",-8.0951301,111.7484739),
            array("206","Node 206",-8.0883176,111.7114777),
            array("207","Node 207",-8.0764632,111.7060275),
            array("208","Node 208",-8.0484739,111.7379689),
            array("209","Node 209",-8.0464363,111.7095673),
            array("210","Node 210",-8.0533838,111.7085587),
            array("211","Node 211",-7.5994631,111.9000022),
            array("212","Node 212",-7.6469043,111.8926402),
            array("213","Node 213",-6.9909836,112.5640485),
            array("214","Node 214",-7.1976341,111.9288051),
            array("215","Node 215",-7.1595323,111.8816938),
            array("216","Node 216",-7.1343065,111.9283673),
            array("217","Node 217",-7.1441453,111.8757407),
            array("218","Node 218",-7.1515119,111.8735091),
            array("219","Node 219",-7.1522358,111.8825213),
            array("220","Node 220",-7.1557275,111.8723075),
            array("221","Node 221",-7.1631184,111.8698088),
            array("222","Node 222",-7.1567366,111.6160731),
            array("223","Node 223",-7.4071977,111.4608257),
            array("224","Node 224",-7.4107954,111.4433832),
            array("225","Node 225",-7.4064914,111.4546259),
            array("226","Node 226",-7.4295143,111.4677794),
            array("227","Node 227",-7.4125345,111.4882715),
            array("228","Node 228",-7.4247237,111.4411047),
            array("229","Node 229",-7.4271595,111.4407416),
            array("230","Node 230",-7.4259653,111.4472041),
            array("231","Node 231",-7.4587711,111.6087175),
            array("232","Node 232",-7.4872801,111.5982032),
            array("233","Node 233",-7.5399822,111.6583002),
            array("234","Node 234",-7.548023,111.6569698),
            array("235","Node 235",-7.5571132,111.5516854),
            array("236","Node 236",-7.6326042,111.5329422),
            array("237","Node 237",-7.6015241,111.5342192),
            array("238","Node 238",-7.6260007,111.4999314),
            array("239","Node 239",-7.4916766,111.6025412),
            array("240","Node 240",-7.5569928,111.5806611),
            array("241","Node 241",-7.6224747,111.4842861),
            array("242","Node 242",-7.5966667,111.4274083),
            array("243","Node 243",-7.5621875,111.4495267),
            array("244","Node 244",-7.5605321,111.4505274),
            array("245","Node 245",-7.5990462,111.4353552),
            array("246","Node 246",-7.5786068,111.533787),
            array("247","Node 247",-7.6020246,111.5238625),
            array("248","Node 248",-7.5586817,111.4258267),
            array("249","Node 249",-7.5445863,111.535747),
            array("250","Node 250",-7.52974,111.4601575),
            array("251","Node 251",-7.533691,111.4302999),
            array("252","Node 252",-7.4808349,111.4728847),
            array("253","Node 253",-7.4740196,111.4309903),
            array("254","Node 254",-7.5461985,111.5391634),
            array("255","Node 255",-7.6540508,111.3281257),
            array("256","Node 256",-7.6307069,111.370539),
            array("257","Node 257",-7.614694,111.3599389),
            array("258","Node 258",-7.6274388,111.3298788),
            array("259","Node 259",-7.9125649,111.6694369),
            array("260","Node 260",-8.0492333,111.8679275),
            array("261","Node 261",-8.0599413,111.8644942),
            array("262","Node 262",-8.0558621,111.9073237),
            array("263","Node 263",-8.0357895,111.577565),
            array("264","Node 264",-7.974822,111.5748988),
            array("265","Node 265",-7.8766252,111.6173568),
            array("266","Node 266",-7.870565,111.4930444),
            array("267","Node 267",-7.8716277,111.4702134),
            array("268","Node 268",-7.9610183,111.5084457),
            array("269","Node 269",-7.9593395,111.4936184),
            array("270","Node 270",-7.9524754,111.4948415),
            array("271","Node 271",-7.9217873,111.5155696),
            array("272","Node 272",-7.9331362,111.4766883),
            array("273","Node 273",-7.9178343,111.4825248),
            array("274","Node 274",-7.9155416,111.4664687),
            array("275","Node 275",-7.9040284,111.4617051),
            array("276","Node 276",-7.8660539,111.4195682),
            array("277","Node 277",-7.8648905,111.4610628),
            array("278","Node 278",-7.8722025,111.4614061),
            array("279","Node 279",-7.8557929,111.4931206),
            array("280","Node 280",-7.8650559,111.4696506),
            array("281","Node 281",-7.8535776,111.4699939),
            array("282","Node 282",-7.8555955,111.4997456),
            array("283","Node 283",-7.8006097,111.5115366),
            array("284","Node 284",-7.7982286,111.471754),
            array("285","Node 285",-7.8149806,111.4688358),
            array("286","Node 286",-7.7268084,111.5332874),
            array("287","Node 287",-7.6579257,111.5272272),
            array("288","Node 288",-7.6300341,111.5169168),
            array("289","Node 289",-7.6394711,111.5174944),
            array("290","Node 290",-7.6389181,111.510585),
            array("291","Node 291",-7.6285396,111.5096623),
            array("292","Node 292",-7.7959572,111.452745),
            array("293","Node 293",-7.7479083,111.3347278),
            array("294","Node 294",-7.7599836,111.399959),
            array("295","Node 295",-7.7140004,111.478289),
            array("296","Node 292",-7.6960106,111.4257136),
            array("297","Node 297",-7.6821901,111.417175),
            array("298","Node 298",-7.7171237,111.3591426),
            array("299","Node 299",-7.6785647,111.3393045),
            array("300","Node 300",-7.6666955,111.3582731),
            array("301","Node 301",-7.6625274,111.3405061),
            array("302","Node 302",-7.6587775,111.3332924),
            array("303","Node 303",-7.6567465,111.3332817),
            array("304","Node 304",-7.6553748,111.3276812),
            array("305","Node 305",-7.658568,111.5078054),
            array("306","Node 306",-7.3510475,112.7292433),
            array("307","Node 307",-7.3503237,112.7674461),
            array("308","Node 308",-7.3509725,112.7111035),
            array("309","Node 309",-7.3555892,112.7291509),
            array("310","Node 310",-7.3693366,112.7634497),
            array("311","Node 311",-7.3810832,112.7619906),
            array("312","Node 312",-7.3724009,112.7289457),
            array("313","Node 313",-7.391723,112.7601881),
            array("314","Node 314",-7.380913,112.7560682),
            array("315","RUNGKUT",-7.331045,112.767859),
            array("316","PUCANG",-7.284413,112.753717),
            array("317","MANUKAN_1",-7.259586,112.667822),
            array("318","MANUKAN_2",-7.260025,112.665948),
            array("319","KEBALEN ",-7.22965,112.735143),
            array("320","SIDOARJO_3",-7.455992,112.717603),
            array("321","KRIAN_2",-7.410571,112.579387),
            array("322","SEPANJANG_1",-7.344733,112.697198),
            array("323","WADUNG_ASRI",-7.35213,112.766436),
            array("324","KRANGGAN-SURABAYA",-7.25664,112.733339),
            array("325","BANGKALAN",-7.030957,112.745713),
            array("326","SAMPANG",-7.193373,113.251078),
            array("327","PAMEKASAN",-7.160616,113.483891),
            array("328","SUMENEP_1",-7.008669,113.855554),
            array("329","SUMENEP_2",-7.0065,113.858646),
            array("330","JEMBER_2",-8.17313,113.697804),
            array("331","AMBULU",-8.345553,113.606299),
            array("332","JEMBER_3",-8.171941,113.693797),
            array("333","GENTENG",-8.364243,114.155201),
            array("334","ROGOJAMPI",-8.306114,114.29553),
            array("335","BANYUWANGI",-8.211436,114.37223),
            array("336","PROBOLINGGO_2",-7.752148,113.217314),
            array("337","BONDOWOSO",-7.912617,113.824749),
            array("338","BONDOWOSO_2",-7.912769,113.825741),
            array("339","BESUKI_STB",-7.734919,113.688843),
            array("340","LUMAJANG_3",-8.128604,113.225044),
            array("341","LUMAJANG_4",-8.128465,113.225374),
            array("342","KEDIRI_1",-7.815144,112.014052),
            array("343","KEDIRI_2",-7.815431,112.013888),
            array("344","KEDIRI_6",-7.81629,112.013602),
            array("345","KEDIRI_7",-7.823041,112.022264),
            array("346","PARE_1",-7.76629,112.194457),
            array("347","KEDIRI_3",-7.815324,112.01401),
            array("348","NGANJUK_1",-7.604622,111.900694),
            array("349","KERTOSONO",-7.592059,112.105181),
            array("350","TULUNGAGUNG_1",-8.063154,111.903003),
            array("351","BANDUNGAN_TLG",-8.17109,111.783452),
            array("352","MADIUN_1",-7.630375,111.519061),
            array("353","MADIUN_2",-7.63055,111.519458),
            array("354","CARUBAN",-7.547077,111.657202),
            array("355","TULUNGAGUNG_2",-8.069727,111.901177),
            array("356","MAGETAN",-7.652737,111.324356),
            array("357","PARE_3",-7.770738,112.196354),
            array("358","PONOROGO",-7.864252,111.469434),
            array("359","TRENGGALEK",-8.054874,111.708282),
            array("360","NGAWI",-7.397397,111.446932),
            array("361","WARUJAYENG_NGANJUK",-7.631257,112.017992),
            array("362","TRENGGALEK2",-8.053005,111.708679),
            array("363","MALANG_1",-7.985715,112.632972),
            array("364","MALANG_2",-7.984256,112.631229),
            array("365","MALANG_4",-7.985698,112.632142),
            array("366","KEPANJEN",-8.127486,112.571192),
            array("367","GONDANG_LEGI",-8.177294,112.637439),
            array("368","BATU",-7.870115,112.524434),
            array("369","LAWANG",-7.830778,112.697051),
            array("370","PASURUAN_1",-7.640117,112.906859),
            array("371","BANGIL_2",-7.604913,112.77511),
            array("372","PANDAAN_1",-7.654625,112.694783),
            array("373","BABAT",-7.103227,112.165811),
            array("374","TUBAN",-6.895056,112.062087),
            array("375","LAMONGAN",-7.118512,112.416066),
            array("376","PACIRAN",-6.877513,112.295733),
            array("377","BOJONEGORO",-7.155579,111.88231),
            array("378","SUMBEREJO",-7.176322,112.003637),
            array("379","MOJOKERTO_1",-7.465081,112.432054),
            array("380","MOJOSARI",-7.520808,112.562845),
            array("381","JOMBANG_1",-7.537751,112.233111),
            array("382","JOMBANG_2",-7.537617,112.232962),
            array("383","JOMBANG_3",-7.537741,112.234511)    
        );

$query1 = mysqli_query($con, "SELECT * FROM temp_table");

while ($isi = $query1->fetch_object()) {
      $lat_asal   = $isi->lat_temp;
      $lon_asal   = $isi->lon_temp;
      $toClass    = $isi->tujuan_temp;
}

for ($i=0; $i < count($node); $i++) {
    $id           = $node[$i][0];
    $nama         = $node[$i][1];
    $lat_tujuan   = $node[$i][2];
    $lon_tujuan   = $node[$i][3];
    
    $rad    = 0.0174532925;
    $r      = 6371;
    $lat1   = $lat_asal * $rad;
    $lon1   = $lon_asal * $rad;
    $lat2   = $lat_tujuan * $rad;
    $lon2   = $lon_tujuan * $rad;
    $x      = ($lon2 - $lon1) * (cos(($lat1 + $lat2) / 2));
    $y      = ($lat2 - $lat1);
    $h      = ((sqrt($x * $x + $y * $y) * $r));
    $hasil_jarak[] = number_format($h, 3, ".", ",");
}

//mencari index jarak terdekat
$index = array_search(min($hasil_jarak), $hasil_jarak);
$index_min = $index + 1;

$query = mysqli_query($con, "SELECT * FROM node WHERE id_node = '$index_min'");
while ($isi = $query->fetch_object()) {
      $id_min = $isi->id_node;
      $nama_min = $isi->nama_node;
      $lat_min = $isi->latitude;
      $lon_min = $isi->longitude;
}

$z = mysqli_query($con, "UPDATE awal SET nama_node='$nama_min', lat_node='$lat_min', lon_node='$lon_min' WHERE id_node='awal'");

//$response['hasil'] = array();
if ($z) {
      $response['success'] = 1;
      echo json_encode($response);
} else {
      $response["success"] = 0;
      $response["message"] = "Tidak ada data toko";
      echo json_encode($response);
}
?>