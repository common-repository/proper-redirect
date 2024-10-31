=== Proper Redirect ===
Contributors: peterarends
Donate link: http://www.mrwebsite.nl/donate/
Tags: redirect, alias, aliasses, multiple domain names, multiple urls
Requires at least: 3.0.1
Tested up to: 3.1.2
Stable tag: 0.1

Redirects you to the proper URL of the website. In case of stumbling upon a working alias.

== Description ==

Redirects you to the proper URL of the website. In case of stumbling upon a working alias. 

Normally (depending on your settings or control panel) http://misterwebsite.nl (an alias of www.mrwebsite.nl) just works, but it should be redirected to [http://www.mrwebsite.nl](http://www.mrwebsite.nl "MrWebsite"). 
The same goes for http://mrwebsite.nl (it should be with www. instead without), https://www.mrwebsite.nl (it should be http instead of https) and all other aliases.

Before WordPress 3 this just worked out of the box. But it does not anymore.

== Installation ==

1. Upload `proper-redirect.php` to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= So why would I ever want to use this plugin? =

Well Charlie, that is an excellent question. Thanks very much for asking me this. It gives me the opportunity to elaborate more on the subject. Which I of course like. Because I can sell you more stuff. Oh no, wait, just read on.

1. It prevents that your website is accessible on multiple domains. It will give your visitors a more consistent experience, the url is in the address bar is always similar. It doesn't matter if they use www. or not in the request, it will work (which is good of course) and will redirect to the proper url.
1. I expect it is better for the search engines as well. It prevents duplicate content. But more important, if someone makes a link to an alias of your domain name it might not be counted as a link to your actual website. Which is negative for your ranking, it will be divided over two urls. Correct me if I am wronk. That is how Brian Cox would say it, right?
1. For me personally it is handy because I develop on an alias. For example at clientname.mrwebsite.nl. When the website is finished and should go live I want to make the switch to clientname.nl instead of the clientname.mrwebsite.nl. All I have to do now is change the URL in WordPress and the 'subdomain alias' stops working. Which is nice because WordPress is awesome and the website will be indexed by Google on the temorary address and clients b*tch about that.

== Screenshots ==

It is invisible! :-)

== Changelog ==

= 0.1 =
First version