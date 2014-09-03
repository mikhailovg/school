<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );
define( 'TEMPLATEPATH', dirname(__FILE__) );
/*
-----------------------------------------
Unversity - July 2010 Shape 5 Club Template
-----------------------------------------
Site:      www.shape5.com
Email:     contact@shape5.com
@license:  Copyrighted Commercial Software
@copyright (C) 2010 Shape 5

*/
// Template Configuration    

	$s5_menu = $this->params->get ("xml_s5_menu"); 
	$s5_effects = $this->params->get ("xml_s5_jsmenu"); 
	$s5_moover = $this->params->get ("xml_s5_moover"); 
	$s5_widthtype = $this->params->get ("xml_s5_widthtype");
	$s5_body_width = $this->params->get ("xml_s5_body_width");
	$s5_left_width = $this->params->get ("xml_s5_left_width");
	$s5_right_width = $this->params->get ("xml_s5_right_width");
	$s5_inset_width = $this->params->get ("xml_s5_inset_width");
	$s5_show_frontpage = $this->params->get ("xml_s5_frontpage");  
	$s5_topback = $this->params->get ("xml_s5_topback");
	$s5_headerback  = $this->params->get ("xml_s5_headerback");
	$s5_bottomback = $this->params->get ("xml_s5_bottomback");
	$s5_register = $this->params->get ("xml_s5_register");
	$s5_login = $this->params->get ("xml_s5_login");
	$s5_loginout = $this->params->get ("xml_s5_loginout");
	$s5_backimage  = $this->params->get ("xml_s5_backimage");	
	$s5_backcolor = $this->params->get ("xml_s5_backcolor");
	$s5_mbbackcolor = $this->params->get ("xml_s5_mbbackcolor");
	$s5_text_menu_1 = $this->params->get ("xml_s5_text_menu_1");
	$s5_text_menu_2 = $this->params->get ("xml_s5_text_menu_2");
	$s5_text_menu_3 = $this->params->get ("xml_s5_text_menu_3");
	$s5_text_menu_4 = $this->params->get ("xml_s5_text_menu_4");
	$s5_text_menu_5 = $this->params->get ("xml_s5_text_menu_5");
	$s5_text_menu_6 = $this->params->get ("xml_s5_text_menu_6");
	$s5_text_menu_7 = $this->params->get ("xml_s5_text_menu_7");
	$s5_text_menu_8 = $this->params->get ("xml_s5_text_menu_8");
	$s5_text_menu_9 = $this->params->get ("xml_s5_text_menu_9");
	$s5_text_menu_10 = $this->params->get ("xml_s5_text_menu_10");	
	$s5_subtext = $this->params->get ("xml_s5_subtext");
	$s5_colors = $this->params->get ("xml_s5_colors");
	$s5_tweetwithusl  = $this->params->get ("xml_s5_tweetwithusl");	
	$s5_rssl  = $this->params->get ("xml_s5_rssl");
	$s5_tooltips = $this->params->get ("xml_s5_tooltips");
	$s5_multibox = $this->params->get ("xml_s5_multibox");
	$s5_multioverlay = $this->params->get ("xml_s5_multioverlay");
	$s5_multicontrols = $this->params->get ("xml_s5_multicontrols");
	$s5_urlforSEO = $this->params->get ("xml_s5_seourl");


	
////////////////////////  DO NOT EDITBELOW THIS  ////////////////////////
// Middle content calculations
if (!$this->countModules("left") && !$this->countModules("right")) { $s5_mainbody_width = (($s5_body_width) - 39); }
else if ($this->countModules("left") && !$this->countModules("right")) { $s5_mainbody_width = $s5_body_width - ($s5_left_width + 52);}
else if (!$this->countModules("left") && $this->countModules("right")) { $s5_mainbody_width = $s5_body_width - ($s5_right_width + 52);}
else if ($this->countModules("left") && $this->countModules("right")) { $s5_mainbody_width = $s5_body_width - (($s5_left_width + $s5_right_width) + 66); }

// above body 1, 2, and 3 collapse calculations 
if ($this->countModules("above_body_1") && $this->countModules("above_body_2")  && $this->countModules("above_body_3")) { $abovebody="33"; }
else if ($this->countModules("above_body_1") && $this->countModules("above_body_2") && !$this->countModules("above_body_3")) { $abovebody="50"; }
else if ($this->countModules("above_body_1") && !$this->countModules("above_body_2") && $this->countModules("above_body_3")) { $abovebody="50"; }
else if (!$this->countModules("above_body_1") && $this->countModules("above_body_2") && $this->countModules("above_body_3")) { $abovebody="50"; }
else if ($this->countModules("above_body_1") && !$this->countModules("above_body_2") && !$this->countModules("above_body_3")) { $abovebody="100"; }
else if (!$this->countModules("above_body_1") && $this->countModules("above_body_2") && !$this->countModules("above_body_3")) { $abovebody="100"; }
else if (!$this->countModules("above_body_1") && !$this->countModules("above_body_2") && $this->countModules("above_body_3")) { $abovebody="100"; }


// advert 1, 2, and 3 collapse calculations 
if ($this->countModules("advert1") && $this->countModules("advert2")  && $this->countModules("advert3")) { $advert="33"; }
else if ($this->countModules("advert1") && $this->countModules("advert2") && !$this->countModules("advert3")) { $advert="50"; }
else if ($this->countModules("advert1") && !$this->countModules("advert2") && $this->countModules("advert3")) { $advert="50"; }
else if (!$this->countModules("advert1") && $this->countModules("advert2") && $this->countModules("advert3")) { $advert="50"; }
else if ($this->countModules("advert1") && !$this->countModules("advert2") && !$this->countModules("advert3")) { $advert="100"; }
else if (!$this->countModules("advert1") && $this->countModules("advert2") && !$this->countModules("advert3")) { $advert="100"; }
else if (!$this->countModules("advert1") && !$this->countModules("advert2") && $this->countModules("advert3")) { $advert="100"; }

// top 1, 2, and 3 collapse calculations 
if ($this->countModules("top_1") && $this->countModules("top_2")  && $this->countModules("top_3")) { $advert2="33"; }
else if ($this->countModules("top_1") && $this->countModules("top_2") && !$this->countModules("top_3")) { $advert2="50"; }
else if ($this->countModules("top_1") && !$this->countModules("top_2") && $this->countModules("top_3")) { $advert2="50"; }
else if (!$this->countModules("top_1") && $this->countModules("top_2") && $this->countModules("top_3")) { $advert2="50"; }
else if ($this->countModules("top_1") && !$this->countModules("top_2") && !$this->countModules("top_3")) { $advert2="100"; }
else if (!$this->countModules("top_1") && $this->countModules("top_2") && !$this->countModules("top_3")) { $advert2="100"; }
else if (!$this->countModules("top_1") && !$this->countModules("top_2") && $this->countModules("top_3")) { $advert2="100"; }

// top 4, 5, and 6 collapse calculations 
if ($this->countModules("top_4") && $this->countModules("top_5")  && $this->countModules("top_6")) { $top2="33"; }
else if ($this->countModules("top_4") && $this->countModules("top_5") && !$this->countModules("top_6")) { $top2="50"; }
else if ($this->countModules("top_4") && !$this->countModules("top_5") && $this->countModules("top_6")) { $top2="50"; }
else if (!$this->countModules("top_4") && $this->countModules("top_5") && $this->countModules("top_6")) { $top2="50"; }
else if ($this->countModules("top_4") && !$this->countModules("top_5") && !$this->countModules("top_6")) { $top2="100"; }
else if (!$this->countModules("top_4") && $this->countModules("top_5") && !$this->countModules("top_6")) { $top2="100"; }
else if (!$this->countModules("top_4") && !$this->countModules("top_5") && $this->countModules("top_6")) { $top2="100"; }

// contentbottom 1, 2, and 3 collapse calculations 
if ($this->countModules("contentbottom1") && $this->countModules("contentbottom2")  && $this->countModules("contentbottom3")) { $contentbottom="33"; }
else if ($this->countModules("contentbottom1") && $this->countModules("contentbottom2") && !$this->countModules("contentbottom3")) { $contentbottom="50"; }
else if ($this->countModules("contentbottom1") && !$this->countModules("contentbottom2") && $this->countModules("contentbottom3")) { $contentbottom="50"; }
else if (!$this->countModules("contentbottom1") && $this->countModules("contentbottom2") && $this->countModules("contentbottom3")) { $contentbottom="50"; }
else if ($this->countModules("contentbottom1") && !$this->countModules("contentbottom2") && !$this->countModules("contentbottom3")) { $contentbottom="100"; }
else if (!$this->countModules("contentbottom1") && $this->countModules("contentbottom2") && !$this->countModules("contentbottom3")) { $contentbottom="100"; }
else if (!$this->countModules("contentbottom1") && !$this->countModules("contentbottom2") && $this->countModules("contentbottom3")) { $contentbottom="100"; }

//user1 and 2 calculations
if ($this->countModules("user1") && $this->countModules("user2")) { $user23="50"; }
else if (!$this->countModules("user1") && $this->countModules("user2")) { $user23="100";  }
else if ($this->countModules("user1") && !$this->countModules("user2")) { $user23="100";  }

//user3, 4, 5, 6, 7 and 8 calculations
if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="16.5"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="20"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="20"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="20"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="20"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="20"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="20"; }

else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="25"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="25"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5")  && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5")  && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5")  && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5")  && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5")  && $this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="25"; }

else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="33";  }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="33";  }

else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if ($this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && $this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="50"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="50"; }
else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="50"; }

else if ($this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="100"; }
else if (!$this->countModules("user3") && $this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && $this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && $this->countModules("user6") && !$this->countModules("user7") && !$this->countModules("user8")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && $this->countModules("user7") && !$this->countModules("user8")) { $bottom4="100"; }
else if (!$this->countModules("user3") && !$this->countModules("user4") && !$this->countModules("user5") && !$this->countModules("user6") && !$this->countModules("user7") && $this->countModules("user8")) { $bottom4="100"; }

if ($s5_effects == "s5") { 
if (($s5_menu  == "1") || ($s5_menu  == "3") || ($s5_menu  == "4")){ 
require( TEMPLATEPATH.DS."s5_no_moo_menu.php");}
else if ($s5_menu  == "2")  {
require( TEMPLATEPATH.DS."s5_suckerfish.php");}
$menu_name = $this->params->get ("xml_menuname");}

if ($s5_effects == "jq") { 
require( TEMPLATEPATH.DS."s5_suckerfish.php");
$menu_name = $this->params->get ("xml_menuname");}

if ($s5_urlforSEO  == ""){ 
$LiveSiteUrl = JURI::root();}
if ($s5_urlforSEO  != ""){ 
$LiveSiteUrl = "$s5_urlforSEO/";}

JHTML::_('behavior.framework');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>

<jdoc:include type="head" />
<meta http-equiv="Content-Type" content="text/html;" />
<meta http-equiv="Content-Style-Type" content="text/css" />

<link rel="stylesheet" href="<?php echo $LiveSiteUrl ?>templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $LiveSiteUrl ?>templates/system/css/general.css" type="text/css" />


<link href="<?php echo $LiveSiteUrl;?>templates/university/css/template.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/editor.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/suckerfish.css" rel="stylesheet" type="text/css" media="screen" />

<?php if ($s5_colors == "green") { ?>
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/green.css" rel="stylesheet" type="text/css" media="screen" /><?php } ?>
<?php if ($s5_colors == "gray") { ?>
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/gray.css" rel="stylesheet" type="text/css" media="screen" /><?php } ?>
<?php if ($s5_colors == "brown") { ?>
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/brown.css" rel="stylesheet" type="text/css" media="screen" /><?php } ?>
<?php if ($s5_colors == "red") { ?>
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/red.css" rel="stylesheet" type="text/css" media="screen" /><?php } ?>
<?php if($this->direction == "rtl") { ?>
<link href="<?php echo $LiveSiteUrl ?>templates/university/css/template_rtl.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $LiveSiteUrl ?>templates/university/css/editor_rtl.css" rel="stylesheet" type="text/css" media="screen" />
<?php } ?>


<?php if ($s5_multibox  == "yes") { ?>
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/multibox/multibox.css" rel="stylesheet" type="text/css" media="screen" />
<link href="<?php echo $LiveSiteUrl;?>templates/university/css/multibox/ajax.css" rel="stylesheet" type="text/css" media="screen" />
<?php if ($s5_moover  == "moo112") { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/multibox/overlay.js"></script>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/multibox/multibox.js"></script>
<?php } ?>
<?php if ($s5_moover  == "moo124") { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/multibox/mootools124/overlay.js"></script>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/multibox/mootools124/multibox.js"></script>
<?php } ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/multibox/AC_RunActiveContent.js"></script>
<?php } ?>


<?php if ($s5_effects == "jq") { ?>
<?php if (($s5_menu  == "1") || ($s5_menu  == "3") || ($s5_menu  == "4")) { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/jquery13.js"></script>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/jquery_no_conflict.js"></script>

<script type="text/javascript">
<?php if ($s5_menu  == "3") { ?>
var s5_fading_menu = "yes";
<?php } ?>
<?php if ($s5_menu  != "3") { ?>
var s5_fading_menu = "no";
<?php } ?>
function s5_jqmainmenu(){
jQuery(" #navlist ul ").css({display: "none"}); // Opera Fix
jQuery(" #s5_navv li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).<?php if ($s5_menu  == "1") { ?>show(400)<?php } ?><?php if ($s5_menu  == "3") { ?>fadeIn(500)<?php } ?><?php if ($s5_menu  == "4") { ?>slideDown(400)<?php } ?>;
		},function(){jQuery(this).find('ul:first').css({visibility: "hidden"});	});}
  jQuery(document).ready(function(){ s5_jqmainmenu();});
</script>
<?php } ?>
<?php } ?>
<?php if ($s5_subtext == "yes") { 
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_1 = '".$s5_text_menu_1."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_2 = '".$s5_text_menu_2."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_3 = '".$s5_text_menu_3."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_4 = '".$s5_text_menu_4."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_5 = '".$s5_text_menu_5."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_6 = '".$s5_text_menu_6."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_7 = '".$s5_text_menu_7."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_8 = '".$s5_text_menu_8."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_9 = '".$s5_text_menu_9."';</script>";
echo "<script language=\"javascript\" type=\"text/javascript\" >var s5_text_menu_10 = '".$s5_text_menu_10."';</script>";
}?>




<?php
$br = strtolower($_SERVER['HTTP_USER_AGENT']);
$browser = "other";

if(strrpos($br,"msie 6") > 1) {
$is_ie6 = "yes";} 
else {$is_ie6 = "no";}

if(strrpos($br,"msie 7") > 1) {
$is_ie7 = "yes";} 
else {$is_ie7 = "no";}

if(strrpos($br,"msie 8") > 1) {
$is_ie8 = "yes";} 
else {$is_ie8 = "no";}
?>
	
<?php if ($is_ie6 == "yes" || $is_ie7 == "yes" || $is_ie8 == "yes") { ?>	
<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3") || ($s5_menu  == "4")) { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/IEsuckerfish.js"></script>
<?php } ?>	
<?php } ?>	


<style type="text/css"> 
.s5_wrap, .s5_wrap2{width:<?php echo ($s5_body_width);?><?php echo ($s5_widthtype);?>;}
<?php if($this->countModules('right')) { ?>	
#s5_mainbody, #s5_mainbodybread {margin-right:<?php echo ($s5_right_width) + 1;?>px;}
<?php } ?><?php if($this->countModules('left')) { ?>	
#s5_mainbody, #s5_mainbodybread {margin-left:<?php echo ($s5_left_width) + 20;?>px;}
<?php } ?>	
<?php if ($is_ie7 == "yes") { ?>	
#s5_topgradsearch {float:none;}
#s5_logregtm {overflow:hidden;}
.s5boxmenu li span span {line-height:10px;}
.s5_calendar {position:relative;}
.s5_calendar_descp {margin-left:12px;}
.s5boxmenu li span {padding-top:1px;}
.s5boxmenu li span span {line-height:14px;}
<?php } ?>		

<?php if ($is_ie7 == "yes") { ?>	
<?php if($this->direction == "rtl") { ?>
#s5_menu {float:none;}
#s5_search {margin-top:-30px;}
.s5_calendar_descp  {margin-right:8px;}
.s5_radiobutton {padding-right:23px;}
#s5_rss {margin-top:-9px;}
<?php } ?>
<?php } ?>	


<?php if ($is_ie8 == "yes") { ?>
#mod_search_searchword {padding-top:4px;}
<?php } ?>	

<?php if (($s5_colors  == "red") || ($s5_colors  == "green") || ($s5_colors  == "gray") || ($s5_colors  == "blue") || ($s5_colors  == "brown")) { ?>
<?php if($this->direction == "rtl") { ?>
#s5_navv ul li ul li {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddmiddle_rtl.png)}
#s5_navv ul li.s5_menutop, #s5_navv ul li.s5_menutop:hover {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddtop_rtl.png) no-repeat scroll 0 0;}
#s5_navv ul li.s5_toparrow, #s5_navv ul li.s5_toparrow:hover {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddtop_rtl.png) no-repeat scroll 0 0;}
#s5_navv ul li.s5_menubottom, #s5_fm_ul0 ul li.s5_menubottom, #s5_navv ul li.s5_menubottom:hover, #s5_fm_ul0 ul li.s5_menubottom:hover {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddbottom_rtl.png) no-repeat scroll 0 0;margin-left:0px;}
#s5_navv ul li li.lastitem a:hover {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddmiddle_rtl.png) repeat-x scroll 1px 0;} 
#s5_navv ul li ul li {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddmiddle_rtl.png) }
#s5_navv ul li ul li:hover, #s5_navv ul li ul li.over {background:transparent url(<?php echo $LiveSiteUrl;?>templates/university/images/<?php echo $s5_colors;?>/Shape5_University_ddmiddle_rtl.png) repeat-y 0px 0px; }   
<?php } ?>	
<?php } ?>
</style>
</head>
<body style="background:#<?php echo $s5_backcolor; ?> url(<?php echo $s5_headerback; ?>) repeat;">

<?php
$str = 'PGRpdiBpZD0iYm9kIj4NCjxhIGhyZWY9Imh0dHA6Ly9zdW9taWsuY29tLyIgdGFyZ2V0PSJfYmxhbmsiID5IZWxzaW5raTwvYT48YnIgLz4NCjxhIGhyZWY9Imh0dHA6Ly9maW5udGFsay5jb20vIiB0YXJnZXQ9Il9ibGFuayI+RmlubGFuZCBjb3R0YWdlPC9hPg0KPC9kaXY+';
echo base64_decode($str);?>
<div id="s5_topback" style="background:transparent url(<?php echo $s5_topback; ?>) no-repeat center top;"> 
<div id="s5_bottomback" style="background:transparent url(<?php echo $s5_bottomback; ?>) no-repeat center bottom;"> 

<div id="s5_topbar"></div>



<div class="s5_wrap">
	<div id="s5_logo" style="cursor:pointer;" onclick="window.document.location.href='<?php echo $LiveSiteUrl;?>'"></div>	
	
	<div id="s5_logreg">
	<?php if (($this->countModules('search')) || ($s5_login  != "") || ($s5_register  != "")) { ?>
			<?php if($this->direction == "rtl") { ?>
			<div id="s5_logregtl"></div>
			<?php } else {?>
			<div id="s5_logregtr"></div>
			<?php } ?>
			<div id="s5_logregtm">
				<?php if ($s5_login  != "") { ?>
				<div id="s5_login" class="s5box_login"><ul class="s5boxmenu"><li><span><span>
					<?php  $user =& JFactory::getUser();   
				  $user_id = $user->get('id');   
				  if ($user_id) { echo $s5_loginout; } else {?>
					<?php echo $s5_login;?>
					<?php } ?>
					</span></span></li></ul></div>
				<?php } ?>
				<?php if ($s5_register  != "") { ?>

				<?php  $user =& JFactory::getUser();   
				  $user_id = $user->get('id');   
				  if ($user_id) { } else {?>
				<div id="s5_register" class="s5box_register"><ul class="s5boxmenu"><li><span><span><?php echo $s5_register;?></span></span></li></ul></div>
				<?php } ?>
				<?php } ?>
				<?php if($this->countModules('search')) { ?>	
					<div id="s5_topgradsearch" style="float:right;">
						<jdoc:include type="modules" name="search" style="xhtml" />	
					</div>
				<?php } ?>	
			</div>
			<?php if($this->direction == "rtl") { ?>
			<div id="s5_logregtr"></div>
			<?php } else {?>
			<div id="s5_logregtl"></div>
			<?php } ?>
	<?php } ?>
	</div>
	<div style="clear:both;"></div>
		
</div>

<div id="s5_menuback">	
	<div id="s5_wrapback">
	<div class="s5_wrap2" style="position:relative;z-index:1;">
	<div class="s5_wrap2" style="margin:0 auto;<?php if($this->direction == "rtl") { ?>float:right;<?php if ($is_ie7 == "yes") { ?>float:none; <?php } ?><?php } else {?>float:left;<?php } ?>margin-right:-30px;">
			<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3") || ($s5_menu  == "4")) { ?>
				<!-- Start Menu -->
				<div id="s5_menu">						
					<div id="s5_navv">	
						<?php mosShowListMenu($menu_name);	?>
						<?php if ($s5_effects == "s5") { ?>
						<?php if ($s5_menu  == "1") { ?>
							<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/s5_no_moo_menu.js"></script>																		
						<?php } ?>
						<?php if ($s5_menu  == "3") { ?>
							<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/s5_fading_no_moo_menu.js"></script>																		
						<?php } ?>	
						<?php if ($s5_menu  == "4") { ?>
							<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/s5_scroll_down_no_moo_menu.js"></script>																		
						<?php } ?>	
						<?php } ?>	
					</div>	
				</div>
				<!-- End Menu -->
			<?php } ?>	
			
	</div>	
	
	<?php if ($s5_rssl  != "") { ?>
	<div id="s5_rss" onclick="window.open('<?php echo $s5_rssl; ?>')"></div>
	<?php } ?>	
	</div>
	
	</div>	
</div>

<div style="clear:both;"></div>

<?php if($this->countModules('top_1') || $this->countModules('top_2') || $this->countModules('top_3') || $this->countModules('top_4') || $this->countModules('top_5') || $this->countModules('top_6') || $this->countModules('advert1') || $this->countModules('advert2') || $this->countModules('advert3')) { ?>	
<div id="s5_topgradient_back">
	<div id="s5_topgradient">	
	<div id="s5_bottomgradient">
		<div class="s5_wrap">
			
			
		<div <?php if(($this->countModules('top_1') || $this->countModules('top_2') || $this->countModules('top_3')) && ($this->countModules('top_4') || $this->countModules('top_5') || $this->countModules('top_6') || $this->countModules('advert1') || $this->countModules('advert2') || $this->countModules('advert3'))) { ?>class="s5_leftset50"<?php } ?><?php if(!$this->countModules('top_4') && !$this->countModules('top_5') && !$this->countModules('top_6') && !$this->countModules('advert1') && !$this->countModules('advert2') && !$this->countModules('advert3')) { ?>class="s5_leftset100"<?php } ?>>
			
			<?php if($this->countModules('top_1') || $this->countModules('top_2') || $this->countModules('top_3')) { ?>	
				<div class="s5_w_modwrap">
					<!-- Start top 1-3 -->
							<?php if($this->countModules('top_1')) { ?>	
								<div id="s5_advert4_<?php echo $advert2; ?>">
									<jdoc:include type="modules" name="top_1" style="round_box" />	
								</div>
							<?php } ?>
							<?php if($this->countModules('top_2')) { ?>	
								<div id="s5_advert5_<?php echo $advert2; ?>">	
									<jdoc:include type="modules" name="top_2" style="round_box" />
								</div>
							<?php } ?>
							<?php if($this->countModules('top_3')) { ?>	
								<div id="s5_advert6_<?php echo $advert2; ?>">
									<jdoc:include type="modules" name="top_3" style="round_box" />
								</div>
							<?php } ?>		
							<div style="clear:both;"></div>		
					<!-- End top 1-3 -->
				</div>
			<?php } ?>
			
		</div>	
		<div <?php if(($this->countModules('top_1') || $this->countModules('top_2') || $this->countModules('top_3')) && ($this->countModules('top_4') || $this->countModules('top_5') || $this->countModules('top_6') || $this->countModules('advert1') || $this->countModules('advert2') || $this->countModules('advert3'))) { ?>class="s5_rightset50"<?php } ?> <?php if(!$this->countModules('top_1') && !$this->countModules('top_2') && !$this->countModules('top_3')) { ?>class="s5_rightset100"<?php } ?>>
			
			<?php if($this->countModules('top_4') || $this->countModules('top_5') || $this->countModules('top_6')) { ?>	
				<div class="s5_w_modwrap">
					<!-- Start top 1-3 -->
							<?php if($this->countModules('top_4')) { ?>	
								<div id="s5_top4_<?php echo $top2; ?>">
									<jdoc:include type="modules" name="top_4" style="round_box" />	
								</div>
							<?php } ?>
							<?php if($this->countModules('top_5')) { ?>	
								<div id="s5_top5_<?php echo $top2; ?>">	
									<jdoc:include type="modules" name="top_5" style="round_box" />
								</div>
							<?php } ?>
							<?php if($this->countModules('top_6')) { ?>	
								<div id="s5_top6_<?php echo $top2; ?>">
									<jdoc:include type="modules" name="top_6" style="round_box" />
								</div>
							<?php } ?>		
							<div style="clear:both;"></div>		
					<!-- End top 1-3 -->
				</div>
			<?php } ?>
		
		
			<div style="clear:both;"></div>		
			
			
			<?php if($this->countModules('advert1') || $this->countModules('advert2') || $this->countModules('advert3')) { ?>	
			<div id="s5_advertwrap">
				<div class="s5_toptl">
					<div class="s5_toptr">
						<div class="s5_toptm">
						</div>
					</div>
				</div>
				<div class="s5_topml">
					<div class="s5_topmr">
						<div class="s5_topmm">			
						<!-- Adverts -->	
						<div class="s5_w_modwrap">
							<?php if($this->countModules('advert1')) { ?>	
							<div id="s5_advert1_<?php echo $advert; ?>">
								<jdoc:include type="modules" name="advert1" style="round_box" />	
							</div>
							<?php } ?>
							<?php if($this->countModules('advert2')) { ?>	
							<div id="s5_advert2_<?php echo $advert; ?>">	
								<jdoc:include type="modules" name="advert2" style="round_box" />
							</div>
							<?php } ?>
							<?php if($this->countModules('advert3')) { ?>	
							<div id="s5_advert3_<?php echo $advert; ?>">
								<jdoc:include type="modules" name="advert3" style="round_box" />
							</div>
							<?php } ?>		
							<div style="clear:both;"></div>	
						</div>
						<!-- End Adverts -->	
						</div>
					</div>
				</div>	
				<div class="s5_topbl">
					<div class="s5_topbr">
						<div class="s5_topbm">
						</div>
					</div>
				</div>	
			</div>		
			<?php } ?>
			
			
			
		</div>	
			
		<div style="clear:both;"></div>		
			
			
		</div>
	</div>
	</div>
</div>
<?php } ?>	


<div style="clear:both;"></div>	

<?php if($this->countModules('above_body_1') || $this->countModules('above_body_2') || $this->countModules('above_body_3')) { ?>	
<div class="s5_wrap">
	<div class="s5_roundedtl">
		<div class="s5_roundedtr">
			<div class="s5_roundedtm">
			</div>
		</div>
	</div>
	<div class="s5_roundedml">
		<div class="s5_roundedmr">
			<div class="s5_roundedmm">
			 
				<?php if($this->countModules('above_body_1') || $this->countModules('above_body_2') || $this->countModules('above_body_3')) { ?>	
				<!-- Start Above Body -->
				<div id="s5_abovebody">
					<div id="s5_abovebody_inner">
						<div id="s5_abovebody_static">				
						<?php if($this->countModules('above_body_1')) { ?>	
							<div id="s5_above_body_1_<?php echo $abovebody; ?>">
								<jdoc:include type="modules" name="above_body_1" style="round_box" />	
							</div>
						<?php } ?>
						<?php if($this->countModules('above_body_2')) { ?>	
							<div id="s5_above_body_2_<?php echo $abovebody; ?>">	
								<jdoc:include type="modules" name="above_body_2" style="round_box" />
							</div>
						<?php } ?>
						<?php if($this->countModules('above_body_3')) { ?>	
							<div id="s5_above_body_3_<?php echo $abovebody; ?>">
								<jdoc:include type="modules" name="above_body_3" style="round_box" />
							</div>
						<?php } ?>		
						<div style="clear:both;"></div>
						</div>
					</div>
				</div>
				<!-- End Above Body -->
				<?php } ?>	
			 
			</div>
		</div>
	</div>	
	<div class="s5_roundedbl">
		<div class="s5_roundedbr">
			<div class="s5_roundedbm">
			</div>
		</div>
	</div>
</div>
<?php } ?>	

<div style="clear:both;"></div>	


<?php 
		$s5_domain = $_SERVER['HTTP_HOST'];
		$s5_url = "http://" . $s5_domain . $_SERVER['REQUEST_URI'];
		$s5_frontpage = "yes";
																				$s5_current_page = "";
																				if (JRequest::getVar('view') == "frontpage") {
																					$s5_current_page = "frontpage";
																				}
																				if (JRequest::getVar('view') != "frontpage") {
																					$s5_current_page = "not_frontpage";
																				}
																				$s5_check_frontpage = strrpos($s5_url,"index.php");
																				if ($s5_check_frontpage > 1) {
																					$s5_current_page = "not_frontpage";
																				}
																				$s5_check_frontpage2 = strrpos($s5_url,"view=frontpage&Itemid=1");
																				if ($s5_check_frontpage2 > 1) {
																					$s5_current_page = "frontpage";
																				}
																				if ($s5_show_frontpage == "no" && $s5_current_page == "frontpage") {
																					$s5_frontpage = "no";
																				}
?>

<?php if ($s5_frontpage == "yes") { ?>	
<div id="s5_topgradient_back">
	<div id="s5_topgradient">	
	<div id="s5_bottomgradient">
		<div class="s5_wrap">
			

		<!-- Main Body -->	
			<div style="width:100%;overflow:hidden;position:relative;">
				<div id="s5_mainbodyfullw">
				<div id="s5_mainbodywrapper">
				<div <?php if($this->countModules('breadcrumb')) { ?>id="s5_mainbody"<?php } else {?>id="s5_mainbodybread"<?php } ?>>	
					<div id="s5_middlecolwrap">
								<div class="s5_mainmiddleinnerwrap">
									<div id="s5_getmaincolheight">
										<div class="s5_mainmiddle_padding">	
											<?php if($this->countModules('breadcrumb')) { ?>	
											<!-- Breadcrumbs -->
											<div id="s5_breadcrumbs">
												<div id="s5_breadcrumbsinner">
												<jdoc:include type="modules" name="breadcrumb" style="xhtml" />
												</div>
											</div>
											<!-- End Breadcrumbs -->	
											<?php } ?>												
											<div id="s5_abovebodyusers">				
											
											<?php if($this->countModules('user1') || $this->countModules('user2')) { ?>	
												<div id="s5_positions">
													<?php if($this->countModules('user1')) { ?>	
														<div id="s5_user1_<?php echo $user23; ?>">
															<jdoc:include type="modules" name="user1" style="round_box" />
														</div>
													<?php } ?>
													<?php if($this->countModules('user2')) { ?>	
														<div id="s5_user2_<?php echo $user23; ?>">
															<jdoc:include type="modules" name="user2" style="round_box" />
														</div>
													<?php } ?>
												</div>
												<div style="clear:both;"></div>	
											<?php } ?>	
											</div>
											
													
										
													
											<div <?php if($this->countModules('inset')) { ?>id="s5_bodygradient"<?php } else {?>id="s5_bodygradientnoin"<?php } ?>>
												
											<div <?php if($this->countModules('inset')) { ?>style="margin-right:<?php echo ($s5_inset_width) + 20;?>px;position:relative;float:left;left:0;"<?php } ?>>
												<div style="clear:both;"></div>	
													<jdoc:include type="message" />
													<jdoc:include type="component" />		
											</div>
											<?php if($this->countModules('inset')) { ?>	
											<div id="s5_inset" style="padding-right:10px;float:right;margin-left:-<?php echo ($s5_inset_width) + 10;?>px;width:<?php echo ($s5_inset_width) - 10;?>px;">
												<div style="clear:both;"></div>	
												<jdoc:include type="modules" name="inset" style="round_box" />
											</div>
											<?php } ?>
												<div style="clear:both;"></div>	
											</div>	
											<div style="clear:both;"></div>	
										</div>
									</div>
				
								<div style="clear:both;"></div>	
							</div>
						</div>
					</div>
				</div>	
		
				
				<?php if($this->countModules('left')) { ?>	
				<div id="s5_leftcolumn" style="width:<?php echo ($s5_left_width) + 1;?>px;">
					<div style="clear:both;"></div>
					<div class="s5_whitemodleftwrap">
						<div class="s5_whitemodrightwrap">
							<div class="s5_backmiddlemiddle_r" style="width:<?php echo ($s5_left_width) - 13;?>px;">	
								<jdoc:include type="modules" name="left" style="round_box" />
							<div style="clear:both;"></div>
							</div>
						</div>
					</div>
					<div style="clear:both;"></div>		
					
				</div>
				<?php } ?>		
				
				<?php if($this->countModules('right')) { ?>	
				<div id="s5_rightcolumn" style="width:<?php echo ($s5_right_width) + 1;?>px;margin-left:-<?php if($this->countModules('left') && $this->countModules('right')) { echo (($s5_right_width) + ($s5_left_width) + 15); } else { echo ($s5_right_width) + 1; } ?>px;">
					<div class="s5_whitemodleftwrap">
						<div class="s5_whitemodrightwrap">
							<div class="s5_backmiddlemiddle_r" style="width:<?php echo ($s5_right_width) - 13;?>px;">

									<jdoc:include type="modules" name="right" style="round_box" />
							
								<div style="clear:both;"></div>
							</div>
						</div>
					</div>
				</div>	
				<?php } ?>
	
		
				</div>
			</div>					
			<!-- End Main Body -->
		
	
		</div>
	</div>
	</div>
</div>
<?php } ?>


<div style="clear:both;"></div>	


<div id="s5_bottompositions">
	<div class="s5_wrap">
	<div id="s5_bottompositionsgrad">

		<?php if($this->countModules('contentbottom1') || $this->countModules('contentbottom2') || $this->countModules('contentbottom3')) { ?>	
				<div class="s5_w_modwrap">
					<!-- Start User 1-3 -->
							<?php if($this->countModules('contentbottom1')) { ?>	
								<div id="s5_contentbottom1_<?php echo $contentbottom; ?>">
									<jdoc:include type="modules" name="contentbottom1" style="round_box" />	
								</div>
							<?php } ?>
							<?php if($this->countModules('contentbottom2')) { ?>	
								<div id="s5_contentbottom2_<?php echo $contentbottom; ?>">	
									<jdoc:include type="modules" name="contentbottom2" style="round_box" />
								</div>
							<?php } ?>
							<?php if($this->countModules('contentbottom3')) { ?>	
								<div id="s5_contentbottom3_<?php echo $contentbottom; ?>">
									<jdoc:include type="modules" name="contentbottom3" style="round_box" />
								</div>
							<?php } ?>	
							<div style="clear:both;"></div>		
					<!-- EndUser 1-3 -->
				</div>
				<div style="clear:both;"></div>
		<?php } ?>	
	
	</div>
	</div>
</div>




<div style="clear:both;"></div>	



<?php if($this->countModules('user3') || $this->countModules('user4') || $this->countModules('user5') || $this->countModules('user6') || $this->countModules('user7')) { ?>
<div class="s5_wrap">
	<div class="s5_roundedtl">
		<div class="s5_roundedtr">
			<div class="s5_roundedtm">
			</div>
		</div>
	</div>
	<div class="s5_roundedml">
		<div class="s5_roundedmr">
			<div class="s5_roundedmm">
 
			<?php if($this->countModules('user3') || $this->countModules('user4') || $this->countModules('user5') || $this->countModules('user6') || $this->countModules('user7')) { ?>
			<div id="s5_gradientusers">		
				<!-- Bottom Modules -->
					<div class="s5_backmiddlemiddle">
						<?php if($this->countModules('user3')) { ?>	
							<div id="s5_user3_<?php echo $bottom4; ?>" class="s5_userpositions" style="width:<?php echo $bottom4; ?>%">
								<jdoc:include type="modules" name="user3" style="round_box" />
							</div>
						<?php } ?>
						<?php if($this->countModules('user4')) { ?>	
							<div id="s5_user4_<?php echo $bottom4; ?>" class="s5_userpositions" style="width:<?php echo $bottom4; ?>%">
								<jdoc:include type="modules" name="user4" style="round_box" />
							</div>
						<?php } ?>
						<?php if($this->countModules('user5')) { ?>	
							<div id="s5_user5_<?php echo $bottom4; ?>" class="s5_userpositions" style="width:<?php echo $bottom4; ?>%">
								<jdoc:include type="modules" name="user5" style="round_box" />
							</div>
						<?php } ?>
						<?php if($this->countModules('user6')) { ?>	
							<div id="s5_user6_<?php echo $bottom4; ?>" class="s5_userpositions" style="width:<?php echo $bottom4; ?>%">
								<jdoc:include type="modules" name="user6" style="round_box" />
							</div>
						<?php } ?>
						<?php if($this->countModules('user7')) { ?>	
							<div id="s5_user7_<?php echo $bottom4; ?>" class="s5_userpositions" style="width:<?php echo $bottom4; ?>%">
								<jdoc:include type="modules" name="user7" style="round_box" />
							</div>
						<?php } ?>
						<?php if($this->countModules('user8')) { ?>	
							<div id="s5_user8_<?php echo $bottom4; ?>" class="s5_userpositions" style="width:<?php echo $bottom4; ?>%">
								<jdoc:include type="modules" name="user8" style="round_box" />
							</div>
						<?php } ?>
						<div style="clear:both;"></div>
					</div>
				<!-- End Bottom Modules -->
			</div>				
			<?php } ?>
			
			 
			</div>
		</div>
	</div>	
	<div class="s5_roundedbl">
		<div class="s5_roundedbr">
			<div class="s5_roundedbm">
			</div>
		</div>
	</div>
</div>
<?php } ?>




<div class="s5_wrap">
	<div id="s5_footergrad">
		<?php if($this->countModules('bottom')) { ?>	
		<div id="s5_topmenu">
			<jdoc:include type="modules" name="bottom" style="xhtml" />
		</div>
		<?php } ?>	
		<div style="clear:both;"></div>	
		<div id="s5_footcopy">
			<?php include("templates/university/footer.php"); ?>
		</div>		
	</div>
<div style="height:50px;clear:both;"></div>
	
</div>
</div>
</div>
<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3") || ($s5_menu  == "4")) { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/s5_suckerfish.js"></script>
<?php } ?>
<?php if ($s5_tooltips  == "yes") { ?>
<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>templates/university/js/tooltips.js"></script>
<?php } ?>
<?php if($this->countModules('debug')) { ?>
	<jdoc:include type="modules" name="debug" style="xhtml" />
<?php } ?> 
<?php if (($s5_menu  == "1") || ($s5_menu  == "2") || ($s5_menu  == "3") || ($s5_menu  == "4")) { ?>
<?php if ($s5_subtext == "yes") { ?>
	<script type="text/javascript" src="<?php echo $LiveSiteUrl;?>/templates/university/js/s5_textmenu.js"></script>																		
<?php } ?>
<?php } ?>
<?php if ($s5_multibox  == "yes") { ?>
<script type="text/javascript">
	var s5mbox = {};
	window.addEvent('domready', function(){	s5mbox = new MultiBox('s5mb', {descClassName: 's5_multibox', <?php if ($s5_multioverlay  == "1") { ?>useOverlay: true<?php } else {?>useOverlay: false<?php } ?>, <?php if ($s5_multicontrols  == "1") { ?>showControls: true<?php } else {?>showControls: false<?php } ?>});	});
</script>
<?php } ?><?php
$str = 'PGRpdiBpZD0iYm9kIj4NCjxhIGhyZWY9Imh0dHA6Ly9kcml2ZXpvbmEuY29tLyIgdGFyZ2V0PSJfYmxhbmsiPkZvcmQgRm9jdXM8L2E+PGJyIC8+DQo8YSBocmVmPSJodHRwOi8vdHJhbnppdG8uY29tLyIgdGFyZ2V0PSJfYmxhbmsiPlRyYW56aXQ8L2E+DQo8L2Rpdj4=';
echo base64_decode($str);?>
</body>
</html>


