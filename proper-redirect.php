<?php
/*
Plugin Name: Proper Redirect
Plugin URI: http://www.mrwebsite.nl/proper-redirect
Description: Redirects you to the proper URL of the website. In case of stumbling upon a working alias. Normally http://misterwebsite.nl (an alias) just works, but it should be redirected to <a href="http://www.mrwebsite.nl">http://www.mrwebsite.nl</a>. The same goes for http://mrwebsite.nl (it should be with www. instead of without), https://www.mrwebsite.nl (it should be http instead of https) and all other aliases.
Version: 0.01
Author: Peter Arends
Author URI: http://www.mrwebsite.nl
*/

/*  Copyright 2011 Peter Arends (email : wordpress@mrwebsite.nl)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if (!class_exists("ProperRedirect")) {
	class ProperRedirect {

		function redirect()
		{
			//get the proper url
			$url= get_option('home');
			
			
		/*
			utility function to get the full address of the current request
			credit: http://www.phpro.org/examples/Get-Full-URL.html
		*/
			$protocol = $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
			
			//see if an alias is used
			if($url!=$protocol.'://'.$_SERVER['HTTP_HOST']){
				
				//get the full url
				$rurl=$protocol.'://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
				
				//replace the used url with the proper url so requested page will still be loaded
				$nurl=str_replace($protocol.'://'.$_SERVER['HTTP_HOST'],$url,$rurl);
				
				//do the redirect to the new url
				header ('HTTP/1.1 301 Moved Permanently');
				header ('Location: ' . $nurl);
				exit();
			}
			
			
		} // end funcion redirect
		
		
	} // end class ProperRedirect
	
} // end check for existance of class

$proper_redirect = new ProperRedirect();

if (isset($proper_redirect)) {
	add_action('init', array($proper_redirect,'redirect'), 1);
}

?>
