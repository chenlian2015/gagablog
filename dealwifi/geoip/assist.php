<?php

include(constant('ROOT_PATH')."/geoip/geoip.inc.php");
include(constant('ROOT_PATH')."/geoip/ipAddress.php");

function getCountryCode()
{
	$gi = geoip_open(constant('ROOT_PATH')."/geoip/"."GeoIP.dat",GEOIP_STANDARD);
	$ip = get_client_ip();
	$country_code = geoip_country_code_by_addr($gi, $ip);
	
	function get_country($ip) {
		return file_get_contents("http://ipinfo.io/{$ip}/country");
	}
	
	if(false == $country_code)
	{
		$country_code = trim(get_country($ip));
	}
	
	$country_code = (string)$country_code;
	return $country_code;
}
?>