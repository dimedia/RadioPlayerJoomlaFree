<?php
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

$name = trim($params->get( 'name', 'MyRadio' ));
$skin = trim($params->get( 'skin', 'ffmp3-compact' ));
$autostart = trim($params->get( 'autostart', 'true' ));
$volume = trim($params->get( 'volume', ''));
$url = trim($params->get( 'url', ''));
$stream = trim($params->get( 'stream', ''));
$welcome = trim($params->get( 'welcome', ''));

$introurl = trim($params->get( 'introurl', ''));
$fallback = trim($params->get( 'fallback', ''));
$codec = trim($params->get( 'codec', '' ));
$track = trim($params->get( 'track', '' ));

if($skin == "jsp-darkconsole")
{
	$width = 190;
	$height = 62;
}

elseif($skin == "jsp-eastanbul")
{
	$width = 467;
	$height = 26;
}

elseif($skin == "jsp-mcclean")
{
	$width = 180;
	$height = 60;
}

elseif($skin == "jsp-tweety")
{
	$width = 189;
	$height = 62;
}

elseif($skin == "faredirfare")
{
	$width = 269;
	$height = 52;
}

elseif($skin == "jsp-dimedia")
{
	$width = 255;
	$height = 77;
}

elseif($skin == "jsp-bumeter")
{
	$width = 300;
	$height = 56;
};

?>

<!-- Start Joomla SHOUTcast player -->
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="<?php echo($width); ?>" height="<?php echo($height); ?>">
<param name="movie" value="<?php echo JURI::root(); ?>modules/mod_shoutcastplayer_v2/muses.swf" />
<param name="flashvars" value="url=<?php if($stream == 'sc'){echo($url); ?>/;<?php } else{ echo($url); }; ?>&fallback=<?php echo $fallback; ?>&lang=auto&codec=<?php echo $codec; ?>&volume=<?php echo $volume; ?>&introurl=<?php echo($introurl); ?><?php if($autostart == 'true'){echo('&autoplay=');echo $autostart;}else if (autostart == 'false'){echo('');};?>&tracking=<?php echo($track); ?>&jsevents=false&buffering=5&skin=<?php echo JURI::root(); ?>modules/mod_shoutcastplayer_v2/<?php echo($skin); ?>.xml&title=<?php echo($name); ?>&welcome=<?php echo($welcome); ?>" />
<param name="wmode" value="transparent" />
<param name="allowscriptaccess" value="always" />
<param name="scale" value="noscale" />
<embed src="<?php echo JURI::root(); ?>modules/mod_shoutcastplayer_v2/muses.swf" flashvars="url=<?php if($stream == 'sc'){echo($url); ?>/;<?php } else{ echo($url); }; ?>&fallback=<?php echo $fallback; ?>&lang=auto&codec=<?php echo $codec; ?>&volume=<?php echo $volume; ?>&introurl=<?php echo($introurl); ?><?php if($autostart == 'true'){echo('&autoplay=');echo $autostart;}else if (autostart == 'false'){echo('');};?>&tracking=<?php echo($track); ?>&jsevents=false&buffering=5&skin=<?php echo JURI::root(); ?>modules/mod_shoutcastplayer_v2/<?php echo($skin); ?>.xml&title=<?php echo($name); ?>&welcome=<?php echo($welcome); ?>" width="<?php echo($width); ?>" scale="noscale" height="<?php echo($height); ?>" wmode="transparent" allowscriptaccess="always" type="application/x-shockwave-flash" />
</object>
<?php 
if ($track == 'true')
	{
		echo('<iframe style="display:none;" src="http://ffmp3.danieldjurdjevic.tk/track.html">Your browser does not support iframe</iframe><!-- End Joomla SHOUTcast player -->');
	}
else if ($track == 'false')
	{
		echo('<!-- End Joomla SHOUTcast player -->');
	};
?>