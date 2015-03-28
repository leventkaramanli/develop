<?php
/************************************************************/
/*            FOREIGN CHARS(YABANCI KARAKTERLER)            */
/************************************************************/
/*

Author: Ozan UYKUN
Site: http://www.zntr.net
Copyright 2012-2015 zntr.net - Tüm hakları saklıdır.

//--------------------------------------------------------------------------------------------------------------------------
SETTINGS
//--------------------------------------------------------------------------------------------------------------------------
1-bad_words
2-url_indection_change_char
//--------------------------------------------------------------------------------------------------------------------------

/* ACCENT CHARS */
$config['ForeignChars']['accent_chars'] = array(
	'ä|æ|ǽ' 														=> 'ae',
	'ö|œ' 															=> 'oe',
	'ü' 															=> 'ue',
	'Ä' 															=> 'Ae',
	'Ü' 															=> 'Ue',
	'Ö' 															=> 'Oe',
	'À|Á|Â|Ã|Ä|Å|Ǻ|Ā|Ă|Ą|Ǎ|Α|Ά|Ả|Ạ|Ầ|Ẫ|Ẩ|Ậ|Ằ|Ắ|Ẵ|Ẳ|Ặ|А'			 	=> 'A',
	'à|á|â|ã|å|ǻ|ā|ă|ą|ǎ|ª|α|ά|ả|ạ|ầ|ấ|ẫ|ẩ|ậ|ằ|ắ|ẵ|ẳ|ặ|а' 			=> 'a',
	'Б' 															=> 'B',
	'б' 															=> 'b',
	'Ç|Ć|Ĉ|Ċ|Č' 													=> 'C',
	'ç|ć|ĉ|ċ|č' 													=> 'c',
	'Д' 															=> 'D',
	'д' 															=> 'd',
	'Ð|Ď|Đ|Δ' 														=> 'Dj',
	'ð|ď|đ|δ' 														=> 'dj',
	'È|É|Ê|Ë|Ē|Ĕ|Ė|Ę|Ě|Ε|Έ|Ẽ|Ẻ|Ẹ|Ề|Ế|Ễ|Ể|Ệ|Е|Э' 					=> 'E',
	'è|é|ê|ë|ē|ĕ|ė|ę|ě|έ|ε|ẽ|ẻ|ẹ|ề|ế|ễ|ể|ệ|е|э' 					=> 'e',
	'Ф' 															=> 'F',
	'ф' 															=> 'f',
	'Ĝ|Ğ|Ġ|Ģ|Γ|Г|Ґ'	 												=> 'G',
	'ĝ|ğ|ġ|ģ|γ|г|ґ' 												=> 'g',
	'Ĥ|Ħ' 															=> 'H',
	'ĥ|ħ' 															=> 'h',
	'Ì|Í|Î|Ï|Ĩ|Ī|Ĭ|Ǐ|Į|İ|Η|Ή|Ί|Ι|Ϊ|Ỉ|Ị|И|Ы' 						=> 'I',
	'ì|í|î|ï|ĩ|ī|ĭ|ǐ|į|ı|η|ή|ί|ι|ϊ|ỉ|ị|и|ы|ї' 						=> 'i',
	'Ĵ' 															=> 'J',
	'ĵ' 															=> 'j',
	'Ķ|Κ|К' 														=> 'K',
	'ķ|κ|к' 														=> 'k',
	'Ĺ|Ļ|Ľ|Ŀ|Ł|Λ|Л' 													=> 'L',
	'ĺ|ļ|ľ|ŀ|ł|λ|л' 													=> 'l',
	'М' 															=> 'M',
	'м' 															=> 'm',
	'Ñ|Ń|Ņ|Ň|Ν|Н' 													=> 'N',
	'ñ|ń|ņ|ň|ŉ|ν|н' 												=> 'n',
	'Ò|Ó|Ô|Õ|Ō|Ŏ|Ǒ|Ő|Ơ|Ø|Ǿ|Ο|Ό|Ω|Ώ|Ỏ|Ọ|Ồ|Ố|Ỗ|Ổ|Ộ|Ờ|Ớ|Ỡ|Ở|Ợ|О' 		=> 'O',
	'ò|ó|ô|õ|ō|ŏ|ǒ|ő|ơ|ø|ǿ|º|ο|ό|ω|ώ|ỏ|ọ|ồ|ố|ỗ|ổ|ộ|ờ|ớ|ỡ|ở|ợ|о'		=> 'o',
	'П' 															=> 'P',
	'п' 															=> 'p',
	'Ŕ|Ŗ|Ř|Ρ|Р' 													=> 'R',
	'ŕ|ŗ|ř|ρ|р' 													=> 'r',
	'Ś|Ŝ|Ş|Ș|Š|Σ|С' 												=> 'S',
	'ś|ŝ|ş|ș|š|ſ|σ|ς|с' 											=> 's',
	'Ț|Ţ|Ť|Ŧ|τ|Т' 													=> 'T',
	'ț|ţ|ť|ŧ|т' 														=> 't',
	'Ù|Ú|Û|Ũ|Ū|Ŭ|Ů|Ű|Ų|Ư|Ǔ|Ǖ|Ǘ|Ǚ|Ǜ|Ũ|Ủ|Ụ|Ừ|Ứ|Ữ|Ử|Ự|У' 				=> 'U',
	'ù|ú|û|ũ|ū|ŭ|ů|ű|ų|ư|ǔ|ǖ|ǘ|ǚ|ǜ|υ|ύ|ϋ|ủ|ụ|ừ|ứ|ữ|ử|ự|у' 			=> 'u',
	'Ý|Ÿ|Ŷ|Υ|Ύ|Ϋ|Ỳ|Ỹ|Ỷ|Ỵ|Й' 										=> 'Y',
	'ý|ÿ|ŷ|ỳ|ỹ|ỷ|ỵ|й' 												=> 'y',
	'В' 															=> 'V',
	'в' 															=> 'v',
	'Ŵ' 															=> 'W',
	'ŵ' 															=> 'w',
	'Ź|Ż|Ž|Ζ|З' 													=> 'Z',
	'ź|ż|ž|ζ|з' 													=> 'z',
	'Æ|Ǽ' 															=> 'AE',
	'ß' 															=> 'ss',
	'Ĳ' 															=> 'IJ',
	'ĳ' 																=> 'ij',
	'Œ' 															=> 'OE',
	'ƒ' 															=> 'f',
	'ξ' 															=> 'ks',
	'π' 															=> 'p',
	'β' 															=> 'v',
	'μ' 															=> 'm',
	'ψ'	 															=> 'ps',
	'Ё' 															=> 'Yo',
	'ё' 															=> 'yo',
	'Є' 															=> 'Ye',
	'є' 															=> 'ye',
	'Ї' 															=> 'Yi',
	'Ж' 															=> 'Zh',
	'ж' 															=> 'zh',
	'Х' 															=> 'Kh',
	'х' 															=> 'kh',
	'Ц' 															=> 'Ts',
	'ц' 															=> 'ts',
	'Ч' 															=> 'Ch',
	'ч' 															=> 'ch',
	'Ш' 															=> 'Sh',
	'ш' 															=> 'sh',
	'Щ' 															=> 'Shch',
	'щ' 															=> 'shch',
	'Ъ|ъ|Ь|ь' 														=> '',
	'Ю' 															=> 'Yu',
	'ю' 															=> 'yu',
	'Я' 															=> 'Ya',
	'я' 															=> 'ya'
);

/* UPPER LOWER CASE CHARS */
$config['ForeignChars']['upper_lower_case_chars'] = array
(
	'A' => 'a',
	'B' => 'b',
	'C' => 'c',
	'Ç' => 'ç',
	'D' => 'd',
	'E' => 'e',
	'F' => 'f',
	'G' => 'g',
	'Ğ' => 'ğ',
	'H' => 'h',
	'I' => 'ı',
	'İ' => 'i',
	'J' => 'j',
	'K' => 'k',
	'L' => 'l',
	'M' => 'm',
	'N' => 'n',
	'O' => 'o',
	'Ö' => 'ö',
	'P' => 'p',
	'Q' => 'q',
	'R' => 'r',
	'S' => 's',
	'Ş' => 'ş',
	'T' => 't',
	'U' => 'u',
	'Ü' => 'ü',
	'V' => 'v',
	'W' => 'w',
	'X' => 'x',
	'Y' => 'y',
	'Z' => 'z',
);

/* NUMERICAL CODES */
$config['ForeignChars']['numerical_codes'] = array(
	'À'	=> '&#192;',
	'Ā'	=> '&#256;',
	'ā'	=> '&#257;',
	'Ă'	=> '&#258;',
	'ă'	=> '&#259;',
	'à'	=> '&#224;',
	'Á'	=> '&#193;',
	'á'	=> '&#225;',
	'Â'	=> '&#194;',
	'Ą'	=> '&#260;',
	'ą'	=> '&#261;',
	'â'	=> '&#226;',
	'Ã'	=> '&#195;',
	'ã'	=> '&#227;',
	'Ä'	=> '&#196;',
	'ä'	=> '&#228;',
	'Å'	=> '&#197;',
	'å'	=> '&#229;',
	'Ǎ'	=> '&#461;',
	'ǎ'	=> '&#462;',
	'Ǻ'	=> '&#506;',
	'ǻ'	=> '&#507;',
	'Ǽ'	=> '&#508;',
	'ǽ'	=> '&#509;',
	'Ȁ'	=> '&#512;',
	'ȁ'	=> '&#513;',
	'Ȃ'	=> '&#514;',
	'ȃ'	=> '&#515;',
	'Ȧ'	=> '&#550;',
	'ȧ'	=> '&#551;',	
	'Ǟ'	=> '&#478;',
	'ǟ'	=> '&#479;',
	'Ǡ'	=> '&#480;',
	'ǡ'	=> '&#481;',
	'Ǣ'	=> '&#482;',
	'ǣ'	=> '&#483;',
	'Ⱥ'	=> '&#570;',
	
	'ß' => '&#223;',
	'ƀ' => '&#384;',
	'Ɓ' => '&#385;',
	'Ƃ' => '&#386;',
	'ƃ' => '&#387;',
	'Ƅ' => '&#388;',
	'ƅ' => '&#389;',
	'Ƀ' => '&#579;',
	
	'Ç' => '&#199;',
	'ç' => '&#231;',
	'Ć'	=> '&#262;',
	'ć'	=> '&#263;',
	'Ĉ'	=> '&#264;',
	'ĉ'	=> '&#265;',
	'Ċ'	=> '&#266;',
	'ċ'	=> '&#267;',
	'Č'	=> '&#268;',
	'č'	=> '&#269;',	
	'Ɔ'	=> '&#390;',
	'Ƈ'	=> '&#391;',
	'ƈ'	=> '&#392;',
	'Ȼ'	=> '&#571;',
	'ȼ'	=> '&#572;',
	
	'Ð' => '&#208;',
	'ð' => '&#240;',
	'Ď'	=> '&#270;',
	'ď'	=> '&#271;',
	'ď'	=> '&#271;',
	'Đ'	=> '&#272;',
	'đ'	=> '&#273;',
	'Ɖ'	=> '&#393;',
	'Ɗ'	=> '&#394;',
	'Ƌ'	=> '&#395;',
	'ƌ'	=> '&#396;',
	'ƍ'	=> '&#397;',
	'ȡ'	=> '&#545;',
	'ȸ'	=> '&#568;',
	
	'È'	=> '&#200;',
	'è'	=> '&#232;',
	'É'	=> '&#201;',
	'é'	=> '&#233;',
	'Ê'	=> '&#202;',
	'ê'	=> '&#234;',
	'Ë'	=> '&#203;',
	'ë'	=> '&#235;',
	'Ē'	=> '&#274;',
	'ē'	=> '&#275;',
	'Ĕ'	=> '&#276;',
	'ĕ'	=> '&#277;',
	'Ė'	=> '&#278;',
	'ė'	=> '&#279;',
	'Ę'	=> '&#280;',
	'ę'	=> '&#281;',
	'Ě'	=> '&#282;',
	'ě'	=> '&#283;',
	'Ǝ'	=> '&#398;',
	'Ə'	=> '&#399;',
	'Ɛ'	=> '&#400;',
	'ǝ'	=> '&#477;',
	'Ȅ'	=> '&#516;',
	'ȅ'	=> '&#517;',
	'Ȇ'	=> '&#518;',
	'ȇ'	=> '&#519;',
	'Ȩ'	=> '&#552;',
	'ȩ'	=> '&#553;',
	'Ɇ'	=> '&#582;',
	'ɇ'	=> '&#583;',
	
	'Ƒ'	=> '&#401;',
	'ƒ'	=> '&#402;',
	
	'Ĝ'	=> '&#284;',
	'ĝ'	=> '&#285;',
	'Ğ'	=> '&#286;',
	'ğ'	=> '&#287;',
	'Ġ'	=> '&#288;',
	'ġ'	=> '&#289;',
	'Ģ'	=> '&#290;',
	'ģ'	=> '&#291;',
	'ģ'	=> '&#291;',
	'Ɠ'	=> '&#403;',
	'Ǥ'	=> '&#484;',
	'ǥ'	=> '&#485;',
	'Ǧ'	=> '&#486;',
	'ǧ'	=> '&#487;',
	'Ǵ'	=> '&#500;',
	'ǵ'	=> '&#501;',
	
	'Ĥ'	=> '&#292;',
	'ĥ'	=> '&#293;',
	'Ħ'	=> '&#294;',
	'ħ'	=> '&#295;',
	'Ɣ'	=> '&#404;',
	'ƕ'	=> '&#405;',
	'Ƕ'	=> '&#502;',
	'Ȟ'	=> '&#542;',
	'ȟ'	=> '&#543;',
	
	'Ì'	=> '&#204;',
	'ì'	=> '&#236;',
	'Í'	=> '&#205;',
	'í'	=> '&#237;',
	'Î'	=> '&#206;',
	'î'	=> '&#238;',
	'Ï'	=> '&#207;',
	'ï'	=> '&#239;',
	'Ĩ'	=> '&#296;',
	'ĩ'	=> '&#297;',
	'Ī'	=> '&#298;',
	'ī'	=> '&#299;',
	'Ĭ'	=> '&#300;',
	'ĭ'	=> '&#301;',
	'Į'	=> '&#302;',
	'į'	=> '&#303;',
	'İ'	=> '&#304;',
	'ı'	=> '&#305;',
	'Ɩ'	=> '&#406;',
	'Ɨ'	=> '&#407;',
	'Ǐ'	=> '&#463;',
	'ǐ'	=> '&#464;',
	'Ȉ'	=> '&#520;',
	'ȉ'	=> '&#521;',
	'Ȋ'	=> '&#522;',
	'ȋ'	=> '&#523;',
	
	'Ĳ'	=> '&#306;',
	'ĳ'	=> '&#307;',
	'Ĵ'	=> '&#308;',
	'ĵ'	=> '&#309;',
	'ǰ'	=> '&#496;',
	'Ɉ'	=> '&#584;',
	'ɉ'	=> '&#585;',
	
	'Ķ'	=> '&#310;',
	'ķ'	=> '&#311;',
	'ĸ'	=> '&#312;',
	'Ƙ'	=> '&#408;',
	'ƙ'	=> '&#409;',
	'Ǩ'	=> '&#488;',
	'ǩ'	=> '&#489;',
	
	'ƚ'	=> '&#410;',
	
	'ƛ'	=> '&#411;',
	
	'Ɯ'	=> '&#412;',
	
	'Ĺ'	=> '&#313;',
	'ĺ'	=> '&#314;',
	'Ļ'	=> '&#315;',
	'ļ'	=> '&#316;',
	'Ľ'	=> '&#317;',
	'ľ'	=> '&#318;',
	'Ŀ'	=> '&#319;',
	'ŀ'	=> '&#320;',
	'Ł'	=> '&#321;',
	'ł'	=> '&#322;',
	'ȴ'	=> '&#564;',
	'Ƚ'	=> '&#573;',
	
	'Ñ' => '&#209;',
	'ñ' => '&#241;',
	'Ń'	=> '&#323;',
	'ń'	=> '&#324;',
	'Ņ'	=> '&#325;',
	'ņ'	=> '&#326;',
	'Ň'	=> '&#327;',
	'ň'	=> '&#328;',
	'ŉ'	=> '&#329;',
	'Ŋ'	=> '&#330;',
	'ŋ'	=> '&#331;',
	'Ɲ'	=> '&#413;',
	'ƞ'	=> '&#414;',
	'Ǹ'	=> '&#504;',
	'ǹ'	=> '&#505;',
	'Ƞ'	=> '&#544;',
	'ȵ'	=> '&#565;',
	
	'Ò'	=> '&#210;',
	'ò'	=> '&#242;',
	'Ó'	=> '&#211;',
	'ó'	=> '&#243;',
	'Ô'	=> '&#212;',
	'ô'	=> '&#244;',
	'Õ'	=> '&#213;',
	'õ'	=> '&#245;',
	'Ö'	=> '&#214;',
	'ö'	=> '&#246;',
	'Ō'	=> '&#332;',
	'ō'	=> '&#333;',
	'Ŏ'	=> '&#334;',
	'ŏ'	=> '&#335;',
	'Ő'	=> '&#336;',
	'ő'	=> '&#337;',
	'Ɵ'	=> '&#415;',
	'Ơ'	=> '&#416;',
	'ơ'	=> '&#417;',
	'Ǒ'	=> '&#465;',
	'ǒ'	=> '&#466;',	
	'Ȍ'	=> '&#524;',
	'ȍ'	=> '&#525;',
	'Ȏ'	=> '&#526;',
	'ȏ'	=> '&#527;',
	'Ȣ'	=> '&#546;',
	'ȣ'	=> '&#547;',	
	'Ȫ'	=> '&#554;',
	'ȫ'	=> '&#555;',
	'Ȭ'	=> '&#556;',
	'ȭ'	=> '&#557;',
	'Ȯ'	=> '&#558;',
	'ȯ'	=> '&#559;',
	'Ȱ'	=> '&#560;',
	'ȱ'	=> '&#561;',
	
	
	'Þ' => '&#222;',
	'þ' => '&#254;',
	'Ƣ'	=> '&#418;',
	'ƣ'	=> '&#419;',
	'Ƥ'	=> '&#420;',
	'ƥ'	=> '&#421;',
	
	'Ǫ'	=> '&#490;',
	'ǫ'	=> '&#491;',
	'Ǭ'	=> '&#492;',
	'ǭ'	=> '&#493;',
	'ȹ'	=> '&#569;',
	'Ɋ'	=> '&#586;',
	'ɋ'	=> '&#587;',
	
	'Œ'	=> '&#338;',
	'œ'	=> '&#339;',
	
	'Æ' => '&#198;',
	'æ' => '&#230;',
	
	'Ŕ'	=> '&#340;',
	'ŕ'	=> '&#341;',
	'Ŗ'	=> '&#342;',
	'ŗ'	=> '&#343;',
	'Ř'	=> '&#344;',
	'ř'	=> '&#345;',
	'Ʀ'	=> '&#422;',	
	'Ȑ'	=> '&#528;',
	'ȑ'	=> '&#529;',
	'Ȓ'	=> '&#530;',
	'ȓ'	=> '&#531;',
	'Ɍ'	=> '&#588;',
	'ɍ'	=> '&#589;',
	
	'Ś'	=> '&#346;',
	'ś'	=> '&#347;',
	'Ŝ'	=> '&#348;',
	'ŝ'	=> '&#349;',
	'Ş'	=> '&#350;',
	'ş'	=> '&#351;',
	'Š'	=> '&#352;',
	'š'	=> '&#353;',
	'Ƨ'	=> '&#423;',
	'ƨ'	=> '&#424;',
	'Ș'	=> '&#536;',
	'ș'	=> '&#537;',
	'ȿ'	=> '&#575;',

	'Ʃ'	=> '&#425;',
	'ƪ'	=> '&#426;',
	
	'Ţ'	=> '&#354;',
	'ţ'	=> '&#355;',
	'Ť'	=> '&#356;',
	'ť'	=> '&#357;',
	'Ŧ'	=> '&#358;',
	'ŧ'	=> '&#359;',
	'ƫ'	=> '&#427;',	
	'Ƭ'	=> '&#428;',
	'ƭ'	=> '&#429;',
	'Ʈ'	=> '&#430;',	
	'Ț'	=> '&#538;',
	'ț'	=> '&#539;',
	'ȶ'	=> '&#566;',
	'Ⱦ'	=> '&#574;',
	
	'Ù' => '&#217;',
	'ù' => '&#249;',
	'Ú' => '&#218;',
	'ú' => '&#250;',
	'Û' => '&#219;',
	'û' => '&#251;',
	'Ü' => '&#220;',
	'ü' => '&#252;',
	'Ũ'	=> '&#360;',
	'ũ'	=> '&#361;',
	'Ū'	=> '&#362;',
	'ū'	=> '&#363;',
	'Ŭ'	=> '&#364;',
	'ŭ'	=> '&#365;',
	'Ů'	=> '&#366;',
	'ů'	=> '&#367;',
	'Ű'	=> '&#368;',
	'ű'	=> '&#369;',
	'Ų'	=> '&#370;',
	'ų'	=> '&#371;',
	'Ư'	=> '&#431;',
	'ư'	=> '&#432;',
	'Ʊ'	=> '&#433;',
	'Ʋ'	=> '&#434;',
	'Ǔ'	=> '&#467;',
	'ǔ'	=> '&#468;',
	'Ǖ'	=> '&#469;',
	'ǖ'	=> '&#470;',
	'Ǘ'	=> '&#471;',
	'ǘ'	=> '&#472;',
	'Ǚ'	=> '&#473;',
	'ǚ'	=> '&#474;',
	'Ǜ'	=> '&#475;',
	'ǜ'	=> '&#476;',
	'Ȕ'	=> '&#532;',
	'ȕ'	=> '&#533;',
	'Ȗ'	=> '&#534;',
	'ȗ'	=> '&#535;',
	'Ʉ'	=> '&#580;',
	
	'Ʌ'	=> '&#581;',
		
	'Ŵ'	=> '&#372;',
	'ŵ'	=> '&#373;',
	
	
	'Ý' => '&#221;',
	'ý' => '&#253;',
	'ÿ' => '&#255;',
	'Ŷ' => '&#374;',
	'ŷ' => '&#375;',
	'Ÿ' => '&#376;',
	'Ƴ' => '&#435;',
	'ƴ' => '&#436;',
	'Ȳ' => '&#562;',
	'ȳ' => '&#563;',
	'Ɏ' => '&#590;',
	'ɏ' => '&#591;',
	
	'Ź' => '&#377;',
	'ź' => '&#378;',
	'Ż' => '&#379;',
	'ż' => '&#380;',
	'Ž' => '&#381;',
	'ž' => '&#382;',
	'ſ' => '&#383;',
	'Ƶ' => '&#437;',
	'ƶ' => '&#438;',
	'Ȥ' => '&#548;',
	'ȥ' => '&#549;',
	'ɀ' => '&#576;',
);
//--------------------------------------------------------------------------------------------------------------------------