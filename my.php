<?php

//TRIBES - edit wanbotak
define("TRIBE1","Roman"); 
define("TRIBE2","Teuton");
define("TRIBE3","Gaul"); 
define("TRIBE4","Hokage"); 
define("TRIBE5","Akatsuki");
define("TRIBE6","Monsters");


//MAIN MENU - edit wanbotak
define("HOME","Laman Utama");
define("LOGIN","Masuk");
define("REG","Daftar");
define("FORUM","Forum");
define("SUPPORT","Bantuan");
define("LOGOUT","Keluar");
define("HEADER_DORF1","Sumber");
define("HEADER_DORF2","Bangunan");
define("HEADER_MAP","Peta");
define("HEADER_STATS","Statistik");
define("HEADER_NOTICES","Laporan");
define("HEADER_NOTICES_NEW","Laporan Baru");
define("HEADER_MESSAGES","Mesej");
define("HEADER_MESSAGES_NEW","Mesej Baru");


//LOGIN.php
define("LOGIN_WELCOME","Server ". SERVER_NAME." Hi there!");
define("LOGIN_NO_JAVASCRIPT","JavaScript is disabled in your browser. To be able to play, you must enable JavaScript in your browser.");
define("LOGIN_USERNAME","Account Name");
define("LOGIN_PASSWORD","Password");
define("LOGIN_LOWRES_OPTION","Editing for players");
define("LOGIN_LOWRES_DESC","With less bandwidth (speed less)");
define("LOGIN_LOWRES_NOTICE","(Note: All options may not edit map)");
define("LOGIN_PW_FORGOTTEN","Password Forgot?");
define("LOGIN_PW_EMAIL","Email:");
define("LOGIN_PW_BTN","Password");
define("LOGIN_PW_REQUEST","We will send you a new password. Once you receive a confirmation code will be active.");
define("LOGIN_PW_SENT","An email containing a new password sent to your email");
define("LOGIN_SERVER_START","The game has not started yet. You are able to play in");
define("LOGIN_SERVER_START2","می باشید.");
define("PW_GENERATE","All fields are mandatory");
define("EMAIL_NOT_VERIFIED","Email unconfirmed");
define("EMAIL_FOLLOW","Click on this link to activate your account");
define("VERIFY_EMAIL","Confirmed email");
define("COOKIES","To enter, you must enable cookies. If your computer is shared with other people, you should exit the log August (departure) hitد.");


/ / LOGOUT.php
define ("LOGOUT_TITLE", " successful exit " ) ;
define ("LOGOUT_H4", " thank you for visiting. ' ) ;
define ("LOGOUT_DESC", " If other people are using the computer , you will need to delete your cookies for security " ) ;
define ("LOGOUT_LINK", " Delete Cookies " ) ;


/ / REGISTER
define ("REGISTER_USERINFO", " user " ) ;
define ("REGISTER_USERNAME", " name " ) ;
define ("REGISTER_EMAIL", " email " ) ;
define ("REGISTER_LOCATION", " zero " ) ;
define ("REGISTER_RANDOM", " random " ) ;
define ("REGISTER_NW", " North West " ) ;
define ("REGISTER_NE", " North East " ) ;
define ("REGISTER_SW", " Southwest " ) ;
define ("REGISTER_SE", " Southeast " ) ;
define ("ACCEPT_RULES", " I have read and agree to the rules . " ) ;
define ("REGISTER_MOREINFO", " Details " ) ;
define ("REGISTER_PASSWORD", " password " ) ;
define ("REGISTER_SELECT_TRIBE", " pick a race " ) ;
define ("BEFORE_REGISTER", " Before you sign up the better part <a href='../anleitung.php' target='_blank'> tips </ a> to read through the advantages and disadvantages of each if one of the three tribes . " ) ;
define ("REGISTER_STARTER", " If you've met recently TRAFIAN is recommended to select the breed fool . " ) ;


/ / CONTACT.PHP
define ("CONTACT_DESC", " You can use the form below to send your request to support . , please answer the questions on the form and enter the details as soon as you are able to help . " ) ;
define ("CONTACT_CATEGORY", " handle" ) ;
define ("CONTACT_SELECT_SUBJECT", " Please Select " ) ;
define ("CONTACT_SUBJECT1", " General Question " ) ;
define ("CONTACT_SUBJECT2", " I can not enter my account " ) ;
define ("CONTACT_SUBJECT3", " can not I register " ) ;
define ("CONTACT_SUPPORT", " Server Support " ) ;
define ("CONTACT_USERNAME", " username" ) ;
define ("CONTACT_USER_NOT_EXIST", " User name not registered . " ) ;
define ("CONTACT_EMAIL", " email" ) ;
define ("CONTACT_MESSAGE", " Message " ) ;
define ("CONTACT_SEND", " post " ) ;
define ("CONTACT_SENT", " was sent successfully . " ) ;


/ / ERRORS
define ("USRNM_EMPTY", "( empty ) " ) ;
define ("USRNM_TAKEN", "( already in use ) " ) ;
define ("USRNM_SHORT", "( at least ". USRNM_MIN_LENGTH. " characters) " ) ;
define ("USRNM_CHAR", "( wrong characters ) " ) ;
define ("PW_EMPTY", "( empty ) " ) ;
define ("PW_SHORT", "( at least ". PW_MIN_LENGTH. " characters) " ) ;
define ("PW_INSECURE", "( password is invalid, please choose a different password ) " ) ;
define ("EMAIL_EMPTY", "( empty ) " ) ;
define ("EMAIL_INVALID", "( error ) " ) ;
define ("EMAIL_NOTEXIST", " This e-mail does not exist. " ) ;
define ("EMAIL_TAKEN", "( already in use ) " ) ;
define ("TRIBE_EMPTY", "<li> Please select breed </ li>");
define ("AGREE_ERROR", "<li> have read and accept the game rules </ li>");
define ("LOGIN_USR_EMPTY", " Enter Name " ) ;
define ("LOGIN_PASS_EMPTY", " Enter Password " ) ;
define ("EMAIL_ERROR", " Email entered is not valid " ) ;
define ("PASS_MISMATCH", " Password does not match " ) ;
define ("ALLI_OWNER", " Please choose a successor to delete " ) ;
define ("SIT_ERROR", " the successor to the previously selected " ) ;
define ("USR_NT_FOUND", " The name does not exist" ) ;
define ("USR_BAN", " Your account has been arrested " ) ;
define ("LOGIN_PW_ERROR", " Invalid Password " ) ;
define ("WEL_TOPIC", " description and information" ) ;
define ("ATAG_EMPTY", " blank check " ) ;
define ("ANAME_EMPTY", " Name is empty" ) ;
define ("ATAG_EXIST", " unavailable " ) ;
define ("ANAME_EXIST", " unavailable " ) ;


/ / BUILD.TPL
define ("CUR_PROD", " current production " ) ;
define ("NEXT_PROD", " production -level" ) ;
define ("BUILDING_UPGRADING", " building " ) ;
define ("HOURS", " time " ) ;


/ / WARSIM.TPL
define ("WARSIM", " war simulator " ) ;
define ("WARSIM_ATTACKER", " attacker " ) ;
define ("WARSIM_DEFENDER", " defense " ) ;
define ("WARSIM_ETC", " other " ) ;

define ("WARSIM_POP", " crowd" ) ;
define ("WARSIM_KATA", " Catapult target " ) ;
define ("WARSIM_HEROPOWER", " Hero (Score Attack ) " ) ;
define ("WARSIM_STONEMASON", " masonry " ) ;
define ("WARSIM_PALACE", " palace / residence " ) ;

/ / BUILDINGS
define ("B1", " woodcutter " ) ;
define ("B1_DESC", " woodcutter 's wood production . much more will be upgraded to produce more wood " ) ;
define ("B2", " Brick " ) ;
define ("B2_DESC", " Here's the raw bricks ( clay ) is made . higher the level the building will further production . " ) ;
define ("B3", " Iron Mine " ) ;
define ("B3_DESC", " Here miners , the iron production process . higher mining level is , however , more iron will be produced. " ) ;
define ("B4", " wheat fields " ) ;
define ("B4_DESC", " foods that people here will produce a higher yield than the Melrose area " ) ;

/ / DORF1
define ("LUMBER", " timber " ) ;
define ("CLAY", " brick " ) ;
define ("IRON", " iron " ) ;
define ("CROP", " wheat " ) ;
define ("LEVEL", " level " ) ;
define ("CROP_COM", CROP. " Consumer " ) ;
define ("PER_HR", " h " ) ;
define ("PROD_HEADER", " Products " ) ;
define ("MULTI_V_HEADER", " village " ) ;
define ("ANNOUNCEMENT", " Announcements " ) ;
define ("GO2MY_VILLAGE", " Return to Village " ) ;
define ("VILLAGE_CENTER", " village center " ) ;
define ("FINISH_GOLD", " Do you want to work in the village , with 2 Gold Finish ? " ) ;
define ("WAITING_LOOP", "( round building ) " ) ;
define ("HRS", "( h ) " ) ;
define ("DONE_AT", " Check " ) ;
define ("CANCEL", " Cancel" ) ;
define ("LOYALTY", " loyalty " ) ;
define ("SEVER_TIME", " server " ) ;
define ("SIDEINFO_CHANGEVIL_BTN", " Save" ) ;
define ("SIDEINFO_CHANGEVIL_LABEL", " the new name of the village : " ) ;
define ("SIDEINFO_CHANGEVIL_TITLE", " rename the village" ) ;
define ("SIDEINFO_CHANGE_TITLE", " to change the village's name , double-click ( double -click ) it." ) ;
define ("SIDEINFO_ADVENTURES", " adventure " ) ;
define ("SIDEINFO_AUCTIONS", " Auctions " ) ;
define ("SIDEINFO_PROFILE", " profile " ) ;
define ("SIDEINFO_ALLIANCE", " unity " ) ;
define ("SIDEINFO_ALLY_FORUM", " Unity Forum " ) ;


/ / ================================================ ====== / /
/ / ================ UNITS ================ / /
/ / ================================================ ====== / /

/ / HERO
define ("U0", " Hero" ) ;

/ / ROMAN UNITS
define ("U1", " Legionnaire " ) ;
define ("U2", " protection " ) ;
define ("U3", " Swordsman " ) ;
define ("U4", " informer " ) ;
define ("U5", " knight" ) ;
define ("U6", " Knights of Caesar " ) ;
define ("U7", " ram " ) ;
define ("U8", " Catapult Catapult " ) ;
define ("U9", " Senator " ) ;
define ("U10", " immigrant " ) ;

/ / TEUTON UNITS
define ("U11", " Grzdar " ) ;
define ("U12", " spear " ) ;
define ("U13", " Axeman " ) ;
define ("U14", " spyware" ) ;
define ("U15", " Delaware " ) ;
define ("U16", " Teutonic Knights " ) ;
define ("U17", " ram " ) ;
define ("U18", " catapult " ) ;
define ("U19", " head " ) ;
define ("U20", " immigrant " ) ;

/ / GAUL UNITS
define ("U21", " Phalanx " ) ;
define ("U22", " Swordsman " ) ;
define ("U23", " trace" ) ;
define ("U24", " thunder" ) ;
define ("U25", " a priest Cavalry " ) ;
define ("U26", " Knight deceive " ) ;
define ("U27", " ram " ) ;
define ("U28", " catapult " ) ;
define ("U29", " chief " ) ;
define ("U30", " immigrant " ) ;

/ / HOKAGE UNITS
define ("U31", "Hashirama Senju");
define ("U32", "Tobirama Senju");
define ("U33", "Hiruzen Sarutobi");
define ("U34", "Minato Namikaze");
define ("U35", "Tsunade");
define ("U36", "Danzō Shimura");
define ("U37", "Kizashi Haruno");
define ("U38", "Kakashi Hatake");
define ("U39", "Naruto Uzumaki");
define ("U40", "Jiraiya");

/ / AKATSUKI UNITS
define ("U41", "Pain");
define ("U42", "Deidara");
define ("U43", "Konan");
define ("U44", "Itachi Uchiha");
define ("U45", "Zetsu");
define ("U46", "Orochimaru");
define ("U47", "Kisame Hoshigaki");
define ("U48", "Kakuzu");
define ("U49", "Sasori");
define ("U50", "Uchiha Madara");

/ / INDEX.php
define ("LOGIN", "Masuk");
define ("PLAYERS", "Pemain);
define ("ONLINE", "Online n " ) ;
define ("TUTORIAL", "Panduan");
define ("PLAYER_STATISTICS", " Player Stats ");
define ("TOTAL_PLAYERS", " Total ". PLAYERS. "");
define ("ACTIVE_PLAYERS", "Pemain Aktif");
define ("ONLINE_PLAYERS", "". PLAYERS. " online" ) ;
define ("MP_STRATEGY_GAME", "". SERVER_NAME. "- Browser Game - Romans, Gauls and Teutons " ) ;
define ("WHAT_IS", "". SERVER_NAME. "is one of the most popular browser games in the world. As a player in". SERVER_NAME. ", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony. ");
define ("REGISTER_FOR_FREE", " free sign up " ) ;
define ("LATEST_GAME_WORLD", " latest gaming world " ) ;
define ("LATEST_GAME_WORLD2", " The Last <br/> world <br/> subscribe <br/> <br/> and try for the first time. " ) ;
define ("PLAY_NOW", " play ". SERVER_NAME. "");
define ("LEARN_MORE", " <br/> more information about ". SERVER_NAME. "!");
define ("COMUNITY", " community " ) ;
define ("NEWS", "Berita r" ) ;
define ("SCREENSHOTS", " images " ) ;
define ("LOGIN_TO", " Login ". SERVER_NAME);
define ("REGIN_TO", " Subscribe ". SERVER_NAME);
define ("P_ONLINE", " playing " ) ;
define ("P_TOTAL", " all players " ) ;
define ("CHOOSE", " Please select a server " ) ;
define ("STARTED", " server ". round ((time ()-COMMENCE) / 86400). " days before it " ) ;


/ / ATTACKS ETC.
define ("TROOP_MOVEMENTS", " the troops " ) ;
define ("ARRIVING_REINF_TROOPS", " getting help, " ) ;
define ("ARRIVING_REINF_TROOPS_SHORT", " auxiliary force " ) ;
define ("OWN_ATTACKING_TROOPS", " attacking the village " ) ;
define ("ARRIVING_ATTACKING_TROOPS", " the enemy " ) ;
define ("ATTACK", " attack" ) ;
define ("OWN_REINFORCING_TROOPS", " auxiliary force in the village" ) ;
define ("TROOPS_DORF", " army " ) ;


/ / 404.php
define ("NOTHING_HERE", " There is nothing here ! " ) ;
define ("WE_LOOKED", " We looked 404 times but did not find anything !" ) ;

/ / HEADER.TPL
define ("SERVER_TIME", " server " ) ;
define ("HEADER_DAY", " day " ) ;
define ("HEADER_NIGHT", " night" ) ;
define ("HEADER_GOLD", " gold coin online " ) ;
define ("HEADER_SILVER", " coin silver tiles " ) ;
define ("HEADER_PLUS", " Plus" ) ;
define ("HEADER_PLUSMENU", " Menu Plus" ) ;
define ("HEADER_ADMIN", " management" ) ;

/ / NOTICES
define ("REPORT_SUBJECT", " Subject : " ) ;
define ("REPORT_ATTACKER", " attacker " ) ;
define ("REPORT_DEFENDER", " defense " ) ;
define ("REPORT_RESOURCES", " resources " ) ;
define ("REPORT_FROM_VIL", " The Village" ) ;
define ("REPORT_FROM_ALLY", " unity " ) ;
define ("REPORT_SENT", " Sent " ) ;
define ("REPORT_SENDER", " sender" ) ;
define ("REPORT_RECEIVER", " receiver " ) ;
define ("REPORT_AT", " on " ) ;
define ("REPORT_TO", " to " ) ;
define ("REPORT_SEND_RES", " send resources " ) ;
define ("REPORT_DEL_BTN", " Delete Report" ) ;
define ("REPORT_DEL_QST", " really report to be removed ? " ) ;
define ("REPORT_WARSIM", " war simulator " ) ;
define ("REPORT_ATK_AGAIN", " repeated attacks " ) ;
define ("REPORT_TROOPS", " army " ) ;
define ("REPORT_REINF", " auxiliary force " ) ;
define ("REPORT_CASUALTIES", " losses " ) ;
define ("REPORT_INFORMATION", " data" ) ;
define ("REPORT_BOUNTY", " Bounty " ) ;
define ("REPORT_CLOCK", " time " ) ;
define ("REPORT_UPKEEP", " food " ) ;
define ("REPORT_PER_HOURS", " h " ) ;
define ("REPORT_SEND_REINF_TO", " auxiliary force sent to " ) ;

/ / MASSMESSAGE.php
define ("MASS", " text message" ) ;
define ("MASS_SUBJECT", " Subject : " ) ;
define ("MASS_COLOR", " color " ) ;
define ("MASS_REQUIRED", " All fields are required " ) ;
define ("MASS_UNITS", "Images (units):");
define ("MASS_SHOWHIDE", "Show / Hide");
define ("MASS_READ", "Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define ("MASS_CONFIRM", " OK" ) ;
define ("MASS_REALLY", " Do you want to send " ) ;
define ("MASS_ABORT", " Unable to send " ) ;
define ("MASS_SENT", " Sent " ) ;
