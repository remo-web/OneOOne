=== HREFLANG Tags Lite ===
Contributors: dcgws
Donate link: http://PayPal.Me/DCGWS/5usd
Tags: hreflang, localization, metatags, seo, google, metabox, meta
Requires at least: 4.4.0
Tested up to: 4.9.4
Stable tag: 1.6.1
License: GPLv2 or later
== Description ==
Smart implementation of HREFLANG meta tags into the head section of your WordPress site.

= Features =

* Creates a new meta box under Posts, Pages and Categories named HREFLANG
* Supports all languages that WordPress supports
* Integrates with Wordpress MU

= New Pro features! =

* **HTML Generator** - *Generate HTML code instantly for use on your non-WordPress websites*
* *Improved* Bulk Editor – *Save yourself the hassle of opening each page, post or product one-by-one and use this tool to update all your entries in one convenient location.* **New with version 1.4.5+, improved Bulk Editing capabilities, including the ability to save and delete all your HREFLANG Tags in one click. Comes with a Master Template that you can use to set all your posts and pages default tags in one click!**
* **Validation tool** - *Test your hreflang implementation directly fron the meta box you are working from. No more external tools or waiting for Google to index your pages*
* **HTML Language Attribute** – *For improved SEO, you can now set the <html lang=””> per post or page.* **New in version 1.4.5**
* **Enhanced WooCommmerce Support** - *You can now set hreflang tags on the shop main page (or block them completely)* **New in version 1.5.8**
* **BULK Validation Tool** - Do you use our Bulk Editor to enter all of your tags? If so, you no longer have to check the validation results page-by-page. *View all of your validation results in one place with our brand new Bulk Validation Tool.* **New in version 1.6.0+**

= Tutorial/How to Video =

I get a lot of requests for a user manual or a tutorial on how to best set up the hreflang tags.

Here it is.

[youtube https://youtu.be/GWzrrNNGX1Y ]

You can easily *[upgrade to the powerful Pro tools](http://dcgws.com/product/hreflang-tags-pro-plugin-wordpress/)* via our online store. 

If you enjoy using this plugin and it saves you time and/or money, please help out with a small donation to show your appreciation. This keeps me motivated to continue developing cool plugins for the community. Even $1 is fine! 

<a href="http://PayPal.Me/DCGWS/1usd">-> Click here to donate $1</a>

== Installation ==

Follow the steps below to install the plugin.

1. Upload the hreflang-tags-for-wordpress directory to the /wp-content/plugins/ directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= What are HREFLang Tags? =

Hreflang Attribute. The hreflang attribute (also referred to as rel="alternate" hreflang="x" ) tells Google which language you are using on a specific page, so the search engine can serve that result to users searching in that language.

= Who should use this plugin? =

Google recommends the use of hreflang tags if the any of the following are true:

*You keep the main content in a single language and translate only the template, such as the navigation and footer. Pages that feature user-generated content, like forums, typically do this.
*Your content has small regional variations with similar content in a single language. For example, you might have English-language content targeted to the US, GB, and Ireland.
*Your site content is fully translated. For example, you have both German and English versions of each page.

= What does Google say about hreflang tags? =

Watch the video below to see what Google says about using hreflang tags

[youtube https://www.youtube.com/watch?v=8ce9jv91beQ]

= Why can't I get my tags to validate? =

Important: Make sure that your provided hreflang value is actually valid. Take special care in regard to the two most common mistakes:

Missing confirmation links: If page A links to page B, page B must link back to page A. If this is not the case for all pages that use hreflang annotations, those annotations may be ignored or not interpreted correctly.

Incorrect language codes: Make sure that all language codes you use identify the language (in ISO 639-1 format) and optionally the region (in ISO 3166-1 Alpha 2 format) of an alternate URL. Specifying the region alone is not valid.

= Do I have to add these tags one post/page at a time? =

No. If you *[upgrade to our powerful Pro tools](http://dcgws.com/product/hreflang-tags-pro-plugin-wordpress/)*, you can update all of your pages and posts in one place, with a single click.

Check out this video.

[youtube https://youtu.be/kux6mm9F_jM]


== Screenshots ==

1. Meta box
2. Dashboard
3. HTML Generator (Pro feature, upgrade easily from plugins settings page)
4. Bulk Editor (Pro feature, upgrade easily from plugins settings page)

== Upgrade Notice ==

Updates will be made available via Wordpress.org

== Help ==

Please contact at us http://dcgws.com/contact/ for any questions.

== Changelog ==

= 1.6.1 =
* Code base improvements

= 1.6.0 =

* Enhancement
	* Added default language CS (Czech)

* Bug fix
	* Fixed a few possible PHP noticed on 404 pages

= 1.5.9 =

* Bug fix
	* Fixes in issue that prevented hreflang tags being displayed on tag pages.

= 1.5.8 =

* Bug fix
	* Blocks hreflang tags on main shop page of WooCommerce powered shops (Pro Version allows configuration of tags on main shop page)

= 1.5.7 =

* Enhancements
	* Added nl Dutch
	* Added en-RO English (Romanian)
	* Added fr-LU French (Luxembourg)
	
* Bug fix
	* Fixes an issue reported by John Parker (thanks): PHP Notice: Undefined variable: href_lang in {PATH}/plugins/hreflang-tags-by-dcgws/includes/functions.php on line 227

= 1.5.6 =

* Bug fix
	* Resolves an issue where HREFLANG Tags are displaying on tag pages


= 1.5.5 =

* Enhancements
	* Added en-MM English (Myanmar)

= 1.5.4 =

* Enhancements
	* Added en-ID English (Indonesia)

= 1.5.3 =

* Enhancements
	* Added ru - Russian
	* Changed ru-RU from Russian to Russian (Russia)

* Bug fix
	* Resolves an issue where HREFLANG Tags are displaying on author pages

= 1.5.2 =

* Bug fix
	* Resolves an issue that prevented a saved x-default tag being marked selected="selected" in the metabox.

= 1.5.1

* Bug Fix
	* Resolves an issue that prevented hreflang tags from being updated from the Edit (taxonomy) page. *Update highly recommended.*

= 1.5.0 =

* Improvements
	* Added support for all registered taxonomies

= 1.4.4 =

* Improvements
	* Added support video tutorial to dashboard
	* Improvements to localization

= 1.4.3 =

* Enhancements
	* Added en-HK - English (Hong Kong)

= 1.4.2 =

* Enhancements
	* Added zh-HANS - Chinese (Simplified)
	* Added zh-HANT - Chinese (Traditional)
	* Blocking HREFLANG Tags on dynamic home pages

* Improvements
	* Added support for Media pages

= 1.4.1 =

* Enhancements
	* Added pt - Portuguese
	
= 1.4.0 =

* Enhancements
	* Added no-NO - Norwegian

= 1.3.9 =

* Enhancements
	* Added nl-BE - Dutch (Belgium)

= 1.3.8 =

* Enhancements
	* Added en-IE - English (Ireland)

= 1.3.7 =

* Enhancements
	* Added en-PH - English (Philippines)

= 1.3.6 =

* Enhancements
	* Added non-regional variations for:
		* Italian
		* French
		* Spanish 

= 1.3.5 =

* Enhancements
	* Added interface support for 
		* Italian 
		* French (Canada)
		* Thai

* Improvements
	* Updated interface support for
		* Spanish (Mexico)
		* Portuguese (Brasil)
		* German (Germany)
		* French (France)
		* Dutch (Netherlands)
		* Danish (Denmark)

= 1.3.4 =

* Improvements
	* Made functions pluggable
	* Improved code base

= 1.3.2 =

* Enhancements
	* Added interface support for
		* Dutch (Netherlands)
		* Danish (Denmark)
* Improvements
	* Updated interface support for
		* Spanish (Mexico)
		* Portuguese (Brasil)
		* German (Germany)
		* French (France)

= 1.3.1 =

* Improvements
	* Removed "Upgrade" tab
	* Removed domain limitations in license keys
	* Added video demomnstration to HTML Code Generator
	* Added video demonstration to Bulk Editor

= 1.3.0 =

* Improved handling of the x-default tags
* Improvements to code organization

= 1.2.9 =

* Removes dismissable notice reminding users to upgrade to Pro version

= 1.2.8 =

* Bug Fix
	* Fixes a bug which caused x-default to show on all posts and pages.

= 1.2.7 =
* Bug Fix
	* Fixes the way x-default is presented in the alternate tags

= 1.2.6 =

* Bug Fix
	* Repaired corrupted package

= 1.2.5 = 

* Corrupted Package

= 1.2.4 =

* Enhancements
	* Removed direct access to Pro features

= 1.2.3 =

* Enhancements
	* Improvements to German language tagging (Kudos to wpgerd for his suggestions)

= 1.2.2 =

* Bug Fix
	* Urgent fix to bulk editor js file

= 1.2.1 =

* Enhancements
	* Added confirmation email upon successful license purchase
	* Impproved Spanish and Portuguese translations

* Bug Fixes
	* Fixed popup to alert user when a data row has been updated in the Bulk Editor

= 1.2.0 =

* Enhancements
	* Added support for custom post types

* Features 
	* Added a new Dashboard page where you can chooose which posts types you would like to use our metabox on
	* Added new Pro features
		* HTML Generator - Generate HTML code instantly for use on your non-WordPress websites
		* Bulk Editor - Save yourself the hassle of opening each page, post or product one-by-one and use this tool to update all your entries in one convenient location

= 1.1.3 =

* Enhancements
	* Added support for Kazakhstan, Turkmenistan, Uzbekistan, Tajikistan, and UAE

= 1.1.2 =

* Enhancements
	* Added support for English (EN), English/United States (EN-US), and German (DE)
	* Improved alphabetical sorting of language dropdown
	* Added support for x-default

= 1.1.1 =

Release date: June 6, 2016

* Enhancements
	* Setup localization

= 1.1.0 =

Release date: June 6, 2016

* Features
	* Adds HREFLANG Tags interface to Add Category and Edit Category screens
	* Adds HREFLANG Tags to head section on Category pages.
	
= 1.0.0 =

Release date: May 27, 2016

* Features
	* Adds HREFLANG Tags interface to Add Post and Edit Post screens
	* Adds HREFLANG Tags interface to Add Page and Edit Page screens
	* Adds HREFLANG Tags to head section on Pages.
	* Adds HREFLANG Tags to head section on Posts.
	
