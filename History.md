#Changelog
##1.1.1 (2013-06-23):
 - Added support for custom taxonomies
 - Errors are now suppressed unless you include a non-empty `dev` argument

##1.1.0 (2013-06-22):
 - Bugfix for `json_encode` compatibility with PHP < 5.3
 - Bugfix for `get_author_index` warnings in WordPress > 3.5

##1.0.9 (2013-06-21):
 - Added `update_post` and `delete_post` methods to Post controller
 - Added two JSON encoding arguments: `json_encode_options` and `json_unescaped_unicode`
 - Added a `parent` argument to `get_category_index`
 - Fixed a couple places where the code was generating PHP notifications
 - Updated bundled Services_JSON library (only used if `json_encode` is unavailable)

##1.0.8 (2013-06-12):
 - Added `widgets` controller
 - Added a generic `get_posts` method to the core controller
 - Added a `thumbnail_images` object property to complement `thumbnail` URL
 - Attachment image files are now checked to exist and match the expected width/height
 - Fixed a bug where `the_excerpt` filter wasn't being applied to the `excerpt` property
 - Fixed a bug where the number of child pages was being limited to 5
 - Fixed a bug where custom controller class names couldn't include numerics
 - Theme directory check for custom controllers

##1.0.7 (2011-01-27):
 - Created some basic unit tests
 - Fixed a bug where `get_author_posts` was unable to find users by `slug`
 - Added missing `post_type` argument to documentation for `get_post` and `get_page` (props Koshirosan)
 - Added `previous_url` and `next_url` properties to the `get_post` response object (props mlcy44)

##1.0.6 (2011-01-13):
 - Fixed a bug in `exclude` query parameter (big props to ikesyo and archon810)
 - Fix for `get_page_index` that where it only returned 5 pages -- it now responds to `count` query param (props to npavkovic and blinder)
 - Removed `Content-Disposition` header from response (props mimecine, kjwierenga)
 - Fixed an incompatibility issue with Disqus plugin (props joshcanhelp)
 - Fixed a bug where `submit_comment` was resulting in a HTTP 404 status (props @tdweston)
 - Fixed an error in the documentation, external controller example (props jli)

##1.0.5 (2010-07-08):
 - Added an check so that `json-api.php` can be moved one level above the `json-api` directory
 - Added more documentation about using nonces

##1.0.4 (2010-07-07):
 - Fixed a bug where the order of attachments didn't match the gallery
 - Added a section to the developer documentation for externalizing custom controllers
 - Moved JSON_API class to its own file: `singletons/api.php`
 - Created a new top-level function: `json_api_dir()`
 - Improvements for WordPress MU: `JSON_API_DIR` and `JSON_API_CONTROLLERS` constants (props Jim McQuillan)

##1.0.3 (2010-07-07):
 - Added request argument `thumbnail_size` to support different sizes of featured images (see also: `add_image_size` WordPress function)
 - Added request argument `post_type` to support custom post types (props Mark Harris)

##1.0.2 (2010-07-02):
 - Removed an inaccurate section from readme.txt about supporting `query_posts` arguments
 - Changed controller info block format to use "Controller name" and "Controller description"
 - Made admin page more robust about handling errors loading controllers
 - Changed `JSON_API::get_controllers` method to lowercase all entries
 - Added introspector section to developer documentation
 - Fixed incorrect example for `json_api_[controller]_controller_path`
 - Thanks to Tim Nash for early feedback on writing external controllers

##1.0.1 (2010-07-01):
 - Fixed some typos in readme.txt
 - Switched `get_tag_posts` to query on tag instead of tag_id (maybe a WordPress issue?)

##1.0 (2010-06-29):
 - JSON API officially drops support for PHP 4 (it was already broken)
 - Added JSON API Settings page to WP admin
 - Broke apart `JSON_API_Controller` into a modular controller system
 - Refactored `JSON_API_Query` to depend less on WordPress's `get_query_var` mechanism
 - Developer mode now shows response in JSON format
 - The `create_post` method now requires a nonce
 - Improved support for complex post queries (props zibitt)
 - Fixed a bug with `get_author_by_login` (props Krzysztof Sobolewski)
 - Made image attachments more robust with `get_intermediate_image_sizes` (props mimecine)
 - Improved post thumbnail support (props nyamsprod)

##0.9.6 (2010-05-27):
 - Fixed a bug introduced in 0.9.5

##0.9.5 (2010-05-27):
 - Added a `thumbnail` property to Post response objects

##0.9.4 (2010-04-28):
 - Fixed a bug where any non-authenticated user could create a draft blog post through `create_post`. Thanks to user futtta for posting about this.

##0.9.3 (2010-03-19):
 - Fixed a bug where child pages were being ignored by the API. See also: https://core.trac.wordpress.org/ticket/12647

##0.9.2 (2010-03-18):
 - Fixed a bug where the /api/ rewrite rules would be lost

##0.9 (2010-02-04):
 - Added a `create_post` method

##0.8.3 (2010-01-27):
 - Fixed the stable tag version

##0.8.2 (2010-01-27):
 - Fixed a typo in the changelog

##0.8.1 (2010-01-27):
 - Fixed a bug that was making JSONP support non-functional

##0.8 (2010-01-18):
 - Added an attachment model and instance variable for post objects

##0.7.3 (2010-01-15):
 - Added a `count` request parameter to control the number of posts returned

##0.7.2 (2010-01-14):
 - Removed the version number from the description text

##0.7.1 (2010-01-14):
 - Fixed another subtle bug with `get_author_index`

##0.7 (2010-01-08):
 - Added a `post_count` response to tag objects
 - Fixed a bug with `get_author_index`

##0.6 (2009-11-30):
 - Added `count_total` response
 - Added `json_api_encode` filter
 - Fixed bugs in the introspector's `get_current_category` and `get_current_tag`

##0.5 (2009-11-17):
 - Initial Public Release

#Upgrade Notice

##1.1.1
Added support for custom taxonomies

##1.1.0
Minor bugfixes

##1.0.9
Update/delete post methods and some other bugfixes and improvements

##1.0.8
Long overdue bugfix/improvement release

##1.0.7
Minor bugfix/improvement release

##1.0.6
Minor bugfix/improvement release

##1.0.5
Minor improvement release

##1.0.4
Minor bugfix/refactor release

##1.0.3
Two new request arguments added: `thumbnail_size` and `post_type`

##1.0.2
Minor bugfix release

##1.0.1
Bugfix release, possibly stemming from a bug in WordPress 3.0

##1.0
Major release, see changelog for details.

##0.9.6
Bugfix release for something added in 0.9.5.

##0.9.5
Feature addition: post thumbnails now included in response objects.

##0.9.4
Security fix: all users are strongly encouraged to upgrade. (See Changelog.)

##0.9.3
Fixed a bug where child pages could not be introspected by the API.

##0.9.2
Fixed a bug where the /api/ path would stop working upon publishing new pages.

##0.9
Added a new data manipulation method: `create_post`.

##0.8.3
Oh dear, I didn't tag 0.8.2 in the stable tags thing.

##0.8.2
Just fixing a mislabeled 0.8.1 release in the changelog.

##0.8.1
This is a bug fix release for JSONP support. Thanks to Ben Wilson for reporting it!

##0.8
Added what may be the last introspection feature: post attachments. You can now see images and other media that have been added to posts.
