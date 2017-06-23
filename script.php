
<?php

# This is adapted from:
# http://www.wikihow.com/Develop-an-IRC-Bot

# To run me,  fill in the parameters.  Then do  php filename.php5 under
# Linux.
$server   = "188.165.239.81";
$port     = 6667;
$nickname = 'Grandbot2';
$ident    = 'alwaystalking';
$gecos    = 'diebot to murder me';
$channel  = "#XD";

# Set up a network socket connection to the IRC server

$socket = socket_create  (AF_INET, SOCK_STREAM, SOL_TCP);
$error  = socket_connect ($socket, $server, $port);

if ($socket === false) {
	$errorCode   = socket_last_error();
	$errorString = socket_strerror ($errorCode);
	die ("Error $errorCoder: $errorString\n");
}

# Do a basic login (not authenticated)
socket_write ($socket, "NICK $nickname\r\n");
socket_write ($socket, "USER $ident * 8 :$gecos\r\n");

# Now lurkey like a turkey
while (is_resource ($socket))
{
	$data = trim (socket_read ($socket, 1024, PHP_NORMAL_READ));
	echo $data . "\n";
	$d    = explode (' ', $data);
	$d    = array_pad ($d, 10, "");

    if ($d [0] === 'PING')
    { # Need to respond to pings
    	socket_write ($socket, 'PONG' . $d [1] . "\r\n");
    }

    if (($d [1] === '376') || ($d [1] === '422'))
    { # Join channel when things are ready
    	socket_write ($socket, 'JOIN ' . $channel . "\r\n");
    }

    if ($d [3] == ":diebot")
    {	$text = 'noooooo'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n");
	}

    if ($d [3] == ':@moo')
    {
        $moo = "M" . str_repeat ("o", mt_rand (2, 15));
    	socket_write ($socket, 'PRIVMSG ' . $d [2] . " :$moo\r\n");
	}
    if ($d [3] == ':hi')
    {
        $moo = "h" . str_repeat ("i", mt_rand (1, 3));
    	socket_write ($socket, 'PRIVMSG ' . $d [2] . " :$moo\r\n");
	}
    if ($d [3] == ':bye')
	if ($d [3] == ':bye') {
	$text = 'buh bye'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':bacon') {
	$text = 'Fry it'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':how are you') {
	$text = 'good, and you'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':hello') {
	$text = 'hi :)'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':ninja') {
	$text = 'now brown cow'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?!') {
	$text = '! - exclamation mark'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?"') {
	$text = '" - double quote'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}	if ($d [3] == ':happy') ($d [4] == 'birthday'); {
	if (($d [3] == ':how') and ($d [4] == 'are') and ($d [5] == 'you')) {
	$text = 'good :D';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if (($d [3] == ':***') and ($d [5] == 'joined') and ($d [6] == 'the') and ($d [7] == 'game')) {
	$text = "sorry, servers are currently expiriencing tecnical issues, they will be resolved ASAP, please come back later" . str_repeat (":)", mt_rand (1, 3));;
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if (($d [3] == ':when') and ($d [4] == 'is') and ($d [5] == 'your') and ($d [6] == 'birthday')) {
	$text = 'May 7, 2007';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if (($d [1] == 'ChanServ') and ($d [2] == 'gives') and ($d [3] == 'voice') and ($d [4] == 'to')) {
	$text = 'Hi :D';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n");
	}
    if ($d [3] == ":diebot")
    {	exit (1) and exit (2);
	}
		if ($d == 'ChanServ') {
	$text = 'hi :)'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':he is a WIP') {
	$text = 'im learning'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if (($d [3] == ':am') and ($d [4] == 'not')) {
	$text = 'are too!';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n");
	}
	if (($d [3] == ':are') and ($d [4] == 'too')) {
	$text = 'am not!';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n");
	}
		if (($d == ':is') and ($d == 'a') and ($d == 'bot')) {
	$text = 'am not!';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n");
	}
	if ($d [3] == ':lol') {
	$text = 'XD'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if (($d [3] == ':?bacteria') and ($d [4] == 'fertiliser')) {
	$text = 'lottfarming:bacteria_fertiliser; Used on tree trunks to allow you to plant mushroom spores on the tree trunk'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?lottfarming:bacteria_fertiliser') {
	$text = 'lottfarming:bacteria_fertiliser; Used on tree trunks to allow you to plant mushroom spores on the tree trunk'; socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
# help
		if ($d [3] == ':?help') {
	$text = '	?mod_list - list of mods ?help_crafting - explains crafting recipies'; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?help_crafting') {
	$text = 'item strings (what the item "code" name is goes in the " " seperated by a , a blank " " means nothing goes there, each craft line goes in { } say ?crafting_example an example or ?crafting_more for more info';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?crafting_example') {
	$text = ' 	{"","default:steel",""},
	{"","default:steel",""},
	{"","default:stick",""} is the recipie for a steel sword '; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?mod_list') {
	$text = '?orienteering,?3d_armor'; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?crafting_more') {
	$text = 'if a recipies "code names" are replaces by and X/x then you may replace the x with a raw material ( such as copper, wood, iron, ect. ) what you replace x with must be used in all locations x is (do not use copper and wood to replace x in seprate location of the same recipie) if x can be replace by 2 or more diffrent things, x,y, and z will also be used.';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	# {,,},{,,},{,,}


# mods
	# 3d_armor
	if ($d [3] == ':?3d_armor') {
	$text = 'adds armors, equipt armors by placing the pieces of armor in armor slots. commands are ?3d_armor:helmet; ?3d_armor:chestplate; ?3d_armor:leggings; ?3d_armor:boots; ?3d_armor:shield';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?3d_armor:helmet') {
	$text = 'adds armors, equipt armors by placing the pieces of armor in armor slots {x,x,x},{x,"",x}';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?3d_armor:chestplate') {
	$text = 'adds armors, equipt armors by placing the pieces of armor in armor slots{x,"",x},{x,x,x},{x,x,x}';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?3d_armor:leggings') {
	$text = 'adds armors, equipt armors by placing the pieces of armor in armor slots{x,x,x},{x,"",x},{x,"",x}';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?3d_armor:boots') {
	$text = 'adds armors, equipt armors by placing the pieces of armor in armor slots{"","",""},{x,"",x},{x,"",x}';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?3d_armor:shield') {
	$text = 'adds armors, equipt armors by placing the pieces of armor in armor slots{x,x,x},{x,x,x},{"",x,""}';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	# Orienteering v1.2

	if ($d [3] == ':?orienteering') {
	$text = 'A collection of tools to help you orient yourselves in the world, such as compass, altimeter, etc. commands are: ?orienteering:altimeter ?orienteering:triangulator ?orienteering:compass ?orienteering:sextant ?orienteering:quadcorder ?orienteering:watch ?orienteering:speedometer ?orienteering:automapper ?orienteering:gps';
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:altimeter') {
	$text = 'It shows you your current elevation (Y);recipe: {"default:glass"},{"default:steel_ingot"},{"default:steel_ingot"},'; 	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:triangulator') {
	$text = 'shows you the coordinates of your current position in the horizontal plane (X and Z);recipe = {"", "default:bronze_ingot", ""}, {"default:bronze_ingot", "", "default:bronze_ingot"}, '; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:compass') {
	$text = 'It shows you your yaw (horizontal viewing angle) in degrees; recipe = {"", "default:copper_ingot", ""}, {"default:copper_ingot", "group:stick", "default:copper_ingot"}, {"", "default:copper_ingot", ""}, '; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:sextant') {
	$text = 'It shows you your pitch (vertical viewing angle) in degrees; recipe = {"", "default:gold_ingot", ""},{"default:gold_ingot", "default:gold_ingot", "default:gold_ingot"}, '; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:quadcorder') {
	$text = 'This is the ultimate orientieering tool. It shows you your coordinates (X, Y and Z), shows your yaw and pitch (horizontal and vertical viewing angles), the current time, your current speed and it enables you to access the minimap; recipe = { "default:gold_ingot", "default:gold_ingot", "default:gold_ingot" }, { "orienteering:speedometer", "default:diamond", "orienteering:automapper", }, { "orienteering:sextant", "default:diamond", "orienteering:gps" }'; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:watch') {
	$text = 'It shows you the current time; Put the watch in your hotbar to see the time. Leftclick to toggle between the 24-hour and 12-hour display; recipe = { "default:copper_ingot" }, { "default:glass" }, { "default:copper_ingot" }'; 	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:speedometer') {
	$text = 'It shows you your current horizontal (“hor.”) and vertical (“ver.”) speed in meters per second, where one meter is the side length of a single cube; recipe = {"", "default:gold_ingot", ""}, {"default:steel_ingot", "group:stick", "default:steel_ingot"}, {"", "default:steel_ingot", ""},'; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?orienteering:automapper') {
	$text = 'The automapper automatically creates a map of the area around you and enables you to view a minimap of your surroundings. It also has a built-in radar; If you put an automapper in your hotbar, you will be able to access the minimap. By default the minimap can be opened with [F7];
		recipe = {
			{"default:gold_ingot", "default:gold_ingot", "default:gold_ingot"},
			{"default:mese_crystal", "default:obsidian_shard", "default:mese_crystal"},
			{"default:gold_ingot", "default:gold_ingot", "default:gold_ingot"}'; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?orienteering:gps') {
	$text = 'The GPS device shows you your coordinates (X, Y and Z), your yaw (horizontal viewing angle) and the time;
		recipe = {
			{ "default:gold_ingot", "orienteering:triangulator", "default:gold_ingot" },
			{ "orienteering:compass", "default:bronze_ingot", "orienteering:watch" },
                        { "default:steel_ingot", "orienteering:altimeter", "default:steel_ingot" }'; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?') {
	$text = ''; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}
	if ($d [3] == ':?') {
	$text = ''; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}

	if ($d [3] == ':?') {
	$text = ''; 
	socket_write ($socket, 'PRIVMSG ' . $d[2] . " :$text\r\n"); 
	}































}
}
?>
