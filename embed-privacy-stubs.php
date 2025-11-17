<?php

namespace epiphyt\Embed_Privacy\thumbnail\provider {
    /**
     * Thumbnail provider interface.
     */
    interface Thumbnail_Provider_Interface
    {
        /**
         * Get the thumbnail from a source string.
         * 
         * @param	object	$data A data object result from an oEmbed provider
         * @param	string	$url The URL of the content to be embedded
         */
        public static function get($data, $url);
        /**
         * Get the thumbnail ID from an embed content.
         * 
         * @param	string	$content Embed content/URL to get the thumbnail ID from
         * @return	string Thumbnail ID
         */
        public static function get_id($content);
        /**
         * Get a thumbnail path.
         * 
         * @param	string	$filename Thumbnail filename
         * @return	string Absolute thumbnail path
         */
        public static function get_path($filename);
        /**
         * Get the thumbnail provider title.
         * 
         * @return	string Thumbnail provider title
         */
        public static function get_title();
        /**
         * Get a thumbnail URL.
         * 
         * @param	string	$filename Thumbnail filename
         * @return	string Thumbnail URL
         */
        public static function get_url($filename);
        /**
         * Check whether the given URL is from this provider.
         * 
         * @param	string	$url The URL of the content to be embedded
         * @return	bool Whether the given URL is from this provider
         */
        public static function is_provider_embed($url);
        /**
         * Download and save a thumbnail.
         * 
         * @param	string	$id Embed ID
         * @param	string	$url Embed URL
         * @param	string	$thumbnail_url Optional thumbnail URL if already available
         */
        public static function save($id, $url, $thumbnail_url = '');
    }
    /**
     * An abstract implementation of a thumbnail provider.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    abstract class Thumbnail_Provider implements \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider_Interface
    {
        /**
         * @var		string[] List of valid domains for the thumbnail provider
         */
        public static $domains = [];
        /**
         * @var		string Thumbnail provider name
         */
        public static $name = '';
        /**
         * {@inheritDoc}
         */
        public static function get($data, $url)
        {
        }
        // phpcs:ignore SlevomatCodingStandard.Functions.DisallowEmptyFunction.EmptyFunction
        /**
         * {@inheritDoc}
         */
        public static function get_id($url)
        {
        }
        // phpcs:ignore SlevomatCodingStandard.Functions.DisallowEmptyFunction.EmptyFunction
        /**
         * {@inheritDoc}
         */
        public static function get_path($filename)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_title()
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_url($filename)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function is_provider_embed($url)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function save($id, $url, $thumbnail_url = '')
        {
        }
        // phpcs:ignore SlevomatCodingStandard.Functions.DisallowEmptyFunction.EmptyFunction
    }
    /**
     * WordPress TV thumbnail implementation.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    final class WordPress_TV extends \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider implements \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider_Interface
    {
        /**
         * @var		string[] List of valid domains for the thumbnail provider
         */
        public static $domains = ['wordpress.tv'];
        /**
         * @var		string Thumbnail provider name
         */
        public static $name = 'wordpress-tv';
        /**
         * {@inheritDoc}
         */
        public static function get($data, $url)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_id($content)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_title()
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function save($id, $url, $thumbnail_url = '')
        {
        }
    }
    /**
     * SlideShare thumbnail implementation.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    final class SlideShare extends \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider implements \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider_Interface
    {
        /**
         * @var		string[] List of valid domains for the thumbnail provider
         */
        public static $domains = ['slideshare.net'];
        /**
         * @var		string Thumbnail provider name
         */
        public static $name = 'slideshare';
        /**
         * {@inheritDoc}
         */
        public static function get($data, $url)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_id($content)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_title()
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function save($id, $url, $thumbnail_url = '')
        {
        }
    }
    /**
     * Vimeo thumbnail implementation.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    final class Vimeo extends \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider implements \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider_Interface
    {
        /**
         * @var		string[] List of valid domains for the thumbnail provider
         */
        public static $domains = ['vimeo.com'];
        /**
         * @var		string Thumbnail provider name
         */
        public static $name = 'vimeo';
        /**
         * {@inheritDoc}
         */
        public static function get($data, $url)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_id($content)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_title()
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function save($id, $url, $thumbnail_url = '')
        {
        }
    }
    /**
     * YouTube thumbnail implementation.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    final class YouTube extends \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider implements \epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider_Interface
    {
        /**
         * @var		string[] List of valid domains for the thumbnail provider
         */
        public static $domains = ['youtu.be', 'youtube.com'];
        /**
         * @var		string Thumbnail provider name
         */
        public static $name = 'youtube';
        /**
         * {@inheritDoc}
         */
        public static function get($data, $url)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_id($content)
        {
        }
        /**
         * Get the thumbnail ID from a thumbnail URL.
         * 
         * @param	string	$url Thumbnail URL to get the thumbnail ID from
         * @return	string Thumbnail ID
         */
        public static function get_id_by_thumbnail_url($url)
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function get_title()
        {
        }
        /**
         * {@inheritDoc}
         */
        public static function save($id, $url, $thumbnail_url = '')
        {
        }
    }
}
namespace epiphyt\Embed_Privacy\thumbnail {
    /**
     * Thumbnail related functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    final class Thumbnail
    {
        const METADATA_PREFIX = 'embed_privacy_thumbnail';
        /**
         * @var		\epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider[] List of thumbnail provider classes
         */
        public $providers = [\epiphyt\Embed_Privacy\thumbnail\provider\SlideShare::class, \epiphyt\Embed_Privacy\thumbnail\provider\Vimeo::class, \epiphyt\Embed_Privacy\thumbnail\provider\WordPress_TV::class, \epiphyt\Embed_Privacy\thumbnail\provider\YouTube::class];
        /**
         * Initialize functionality.
         */
        public function init()
        {
        }
        /**
         * Check and delete orphaned thumbnails.
         * 
         * @param	int			$post_id The post ID
         * @param	\WP_Post	$post The post object
         */
        public function delete_orphaned($post_id, $post)
        {
        }
        /**
         * Delete thumbnails for a given post ID.
         * 
         * @param	int		$post_id Post ID
         */
        public static function delete_thumbnails($post_id)
        {
        }
        /**
         * Get path and URL to an embed thumbnail.
         * 
         * @param	\WP_Post	$post Post object
         * @param	string		$url Embedded URL
         * @return	array Thumbnail path and URL
         */
        public function get_data($post, $url)
        {
        }
        /**
         * Get the thumbnail directory and URL.
         * Since we don't want to have a directory per site in a network, we need to
         * get rid of the site ID in the path.
         * 
         * @return	string[] Thumbnail directory and URL
         */
        public static function get_directory()
        {
        }
        /**
         * Get embed thumbnails from the embed provider.
         * 
         * @param	string	$output The returned oEmbed HTML
         * @param	object	$data A data object result from an oEmbed provider
         * @param	string	$url The URL of the content to be embedded
         * @return	string The returned oEmbed HTML
         */
        public function get_from_provider($output, $data, $url)
        {
        }
        /**
         * Get all thumbnail metadata of all posts.
         * 
         * @param	string	$provider Optional provider name to limit metadata
         * @return	array All thumbnail metadata
         */
        public static function get_metadata($provider = '')
        {
        }
        /**
         * Get a thumbnail provider by an URL.
         * 
         * @param	string	$url Embed URL
         * @return	\epiphyt\Embed_Privacy\thumbnail\provider\Thumbnail_Provider|null Thumbnail provider object or null
         */
        public function get_provider_by_url($url)
        {
        }
        /**
         * Get the provider titles
         * 
         * @return	string[] List of provider titles
         */
        public function get_provider_titles()
        {
        }
        /**
         * Register thumbnail providers.
         */
        public function register_providers()
        {
        }
    }
}
namespace epiphyt\Embed_Privacy\handler {
    /**
     * Feed handler.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.11.2
     */
    final class Feed
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Replace template in feeds with a link.
         * 
         * @param	string									$markup Embed overlay markup
         * @param	\epiphyt\Embed_Privacy\embed\Provider	$provider Embed provider
         * @param	array									$attributes Embed attributes
         * @return	string Link markup 
         */
        public static function replace_template($markup, $provider, $attributes)
        {
        }
        /**
         * Get link markup for the embedded content.
         * 
         * @param	mixed[]									$attributes Embed attributes
         * @param	\epiphyt\Embed_Privacy\embed\Provider	$provider Embed provider
         * @return	string Link markup
         */
        public static function get_link_markup($attributes, $provider)
        {
        }
    }
    /**
     * oEmbed handler.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Oembed
    {
        /**
         * Get the dimensions of an oEmbed.
         * 
         * @param	string	$content The content to get the title of
         * @return	array The dimensions or an empty array
         */
        public static function get_dimensions($content)
        {
        }
        /**
         * Get an oEmbed title by its title attribute.
         * 
         * @param	string	$content The content to get the title of
         * @return	string The title or an empty string
         */
        public static function get_title($content)
        {
        }
    }
    /**
     * Widget handler.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Widget
    {
        /**
         * @var		string The alternative option name of this filter
         */
        public $alt_option_name = '';
        /**
         * @var		string The ID of this filter
         */
        public $id = '';
        /**
         * @var		string The ID base of this filter
         */
        public $id_base = 'embed_privacy_widget_output_filter';
        /**
         * @var		string The name of this filter
         */
        public $name = 'Embed Privacy';
        /**
         * @var		string The option name of this filter
         */
        public $option_name = 'widget_embed_privacy_widget_output_filter';
        /**
         * @var		bool The updated value of this filter
         */
        public $updated = false;
        /**
         * @var		array The widget options of this filter
         */
        public $widget_options = [];
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Return the single instance of this class.
         * 
         * @return	\epiphyt\Embed_Privacy\handler\Widget The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Execute the widget's original callback function, filtering its output.
         */
        public static function display_widget()
        {
        }
        /**
         * Replace the widget's display callback with the Dynamic Sidebar Params display callback, storing the original callback for use later.
         * The $sidebar_params variable is not modified; it is only used to get the current widget's ID.
         * 
         * @param	array	$sidebar_params The sidebar parameters
         * @return	array The sidebar parameters
         */
        public static function filter_dynamic_sidebar_params($sidebar_params)
        {
        }
    }
    /**
     * Shortcode handler.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Shortcode
    {
        /**
         * Initialize functionality.
         */
        public function init()
        {
        }
        /**
         * Get a list with ignored shortcodes.
         * 
         * @return	string[] List with ignored shortcodes
         */
        public function get_ignored()
        {
        }
        /**
         * Display an Opt-out shortcode.
         * 
         * @param	array|string	$attributes Shortcode attributes
         * @return	string The shortcode output
         */
        public static function opt_out($attributes)
        {
        }
        /**
         * Print Embed Privacy assets if page contains the shortcode.
         * 
         * @since	1.11.1
         * 
         * @param	string	$content Current page content
         * @return	string Current page content
         */
        public function print_assets_for_shortcode($content)
        {
        }
    }
    /**
     * Post handler.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Post
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Embeds are cached in the postmeta database table and need to be removed
         * whenever the plugin will be enabled or disabled.
         */
        public static function clear_embed_cache()
        {
        }
        /**
         * Check if a post contains an embed.
         * 
         * @param	\WP_Post|int|null	$post A post object, post ID or null
         * @return	bool True if a post contains an embed, false otherwise
         */
        public static function has_embed($post = null)
        {
        }
    }
    /**
     * Theme handler.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Theme
    {
        /**
         * Check if the current theme is matching your name.
         * 
         * @param	string	$name The theme name to test
         * @return	bool True if the current theme is matching, false otherwise
         */
        public static function is($name)
        {
        }
    }
}
namespace epiphyt\Embed_Privacy {
    /**
     * Admin related methods for Embed Privacy.
     * 
     * @deprecated	1.10.0
     * @since		1.2.0
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    class Admin
    {
        /**
         * @deprecated	1.10.0
         * @var			array Admin to output
         */
        public $fields = [];
        /**
         * Admin constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize functions.
         * 
         * @deprecated	1.10.0
         */
        public function init()
        {
        }
        /**
         * Add plugin meta links.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\User_Interface::add_meta_link() instead
         * @since		1.6.0
         * 
         * @param	array	$input Registered links.
         * @param	string	$file  Current plugin file.
         * @return	array Merged links
         */
        public function add_meta_link($input, $file)
        {
        }
        /**
         * Disallow deletion of system embeds.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::disallow_deleting_system_embeds() instead
         * @since		1.4.0
         * 
         * @param	array	$caps The current capabilities
         * @param	string	$cap The capability to check
         * @param	int		$user_id The user ID
         * @param	array	$args Additional arguments
         * @return	array The updated capabilities
         */
        function disallow_deleting_system_embeds(array $caps, $cap, $user_id, array $args)
        {
        }
        /**
         * Wrapping function to get a field HTML.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Field::get() instead
         * 
         * @param	array	$attributes Field attributes
         */
        public function get_field(array $attributes)
        {
        }
        /**
         * Get a unique instance of the class.
         * 
         * @return	\epiphyt\Embed_Privacy\Admin The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Initialize the settings page.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Settings::register() instead
         */
        public function init_settings()
        {
        }
        /**
         * Output the options HTML.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Settings::get_page() instead
         */
        public function options_html()
        {
        }
        /**
         * Register menu entries.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Settings::register_menu() instead
         */
        public function register_menu()
        {
        }
    }
}
namespace epiphyt\Embed_Privacy\embed {
    /**
     * Styles of an embed.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Style
    {
        /**
         * Construct the object.
         * 
         * @since	1.11.0 Deprecated second parameter
         * @since	1.11.0 First parameter must be a provider object
         * 
         * @param	string|\epiphyt\Embed_Privacy\embed\Provider	$provider Provider object
         * @param	null											$deprecated Deprecated parameter
         * @param	array											$attributes Additional embed attributes
         */
        public function __construct($provider, $deprecated = null, $attributes = [])
        {
        }
        /**
         * Get the style for an element.
         * 
         * @param	string	$element Element to get the style for
         * @return	string Style as CSS
         */
        public function get($element)
        {
        }
        /**
         * Register a style for an element.
         * 
         * @param	string	$element Element the style is for
         * @param	string	$property CSS property
         * @param	string	$value CSS value
         */
        public function register($element, $property, $value)
        {
        }
    }
    /**
     * Embed provider representation.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Provider
    {
        /**
         * Provider constructor
         * 
         * @param	\WP_Post	$provider_object Provider post object
         */
        public function __construct($provider_object = null)
        {
        }
        /**
         * String representation of the provider.
         * 
         * @since	1.11.0
         * 
         * @return	string Provider name
         */
        public function __toString()
        {
        }
        /**
         * Get the background image ID.
         * 
         * @return	int|null Background image ID or null
         */
        public function get_background_image_id()
        {
        }
        /**
         * Get the name of a content item.
         * 
         * @return	string The content name
         */
        public function get_content_name()
        {
        }
        /**
         * Get the description.
         * 
         * @return	string The description
         */
        public function get_description()
        {
        }
        /**
         * Get the name.
         * 
         * @return	string Provider name
         */
        public function get_name()
        {
        }
        /**
         * Get the pattern.
         * 
         * @return	string Regular expression pattern
         */
        public function get_pattern()
        {
        }
        /**
         * Get the post object.
         * 
         * @return	\WP_Post|null Post object or null
         */
        public function get_post_object()
        {
        }
        /**
         * Get the privacy policy URL.
         * 
         * @return	string Privacy policy URL
         */
        public function get_privacy_policy_url()
        {
        }
        /**
         * Get the thumbnail ID.
         * 
         * @return	int|null Thumbnail ID or null
         */
        public function get_thumbnail_id()
        {
        }
        /**
         * Get the title.
         * 
         * @return	string Title
         */
        public function get_title()
        {
        }
        /**
         * Set the background image ID.
         * 
         * @param	int|null	$background_image_id Background image ID or null
         */
        public function set_background_image_id($background_image_id)
        {
        }
        /**
         * Whether the provider has a certain name.
         * 
         * @param	string	$name Name to check
         * @return	bool Whether the provider has the name to check
         */
        public function is($name)
        {
        }
        /**
         * Whether the provider is disabled or not.
         * 
         * @return	bool Whether the provider is disabled
         */
        public function is_disabled()
        {
        }
        /**
         * Whether the provider is a system provider or not.
         * 
         * @return	bool Whether the provider is a system provider
         */
        public function is_system()
        {
        }
        /**
         * Whether the provider is unknown or not.
         * 
         * @return	bool Whether the provider is unknown
         */
        public function is_unknown()
        {
        }
        /**
         * Whether the provider is matching the current content.
         * 
         * @param	string	$content Content to check
         * @param	string	$pattern Optional alternative pattern
         * @return	bool Whether the provider is matching the current content
         */
        public function is_matching($content, $pattern = '')
        {
        }
        /**
         * Set the content item name.
         * 
         * @param	string	$content_name Content name
         */
        public function set_content_name($content_name)
        {
        }
        /**
         * Set the description.
         * 
         * @param	string	$description Description
         */
        public function set_description($description)
        {
        }
        /**
         * Set the disabled state.
         * 
         * @param	bool	$disabled Whether this provider is disabled
         */
        public function set_is_disabled($disabled)
        {
        }
        /**
         * Set the system state.
         * 
         * @param	bool	$system Whether this provider is a system provider
         */
        public function set_is_system($system)
        {
        }
        /**
         * Set the unknown state.
         * 
         * @param	bool	$unknown Whether this provider is unknown
         */
        public function set_is_unknown($unknown)
        {
        }
        /**
         * Set the name.
         * 
         * @param	string	$name Name
         */
        public function set_name($name)
        {
        }
        /**
         * Set the pattern.
         * 
         * @param	string	$pattern Regular expression pattern
         */
        public function set_pattern($pattern)
        {
        }
        /**
         * Set the post object.
         * 
         * @param	string	$post_object Post object
         */
        public function set_post_object($post_object)
        {
        }
        /**
         * Set the privacy policy URL.
         * 
         * @param	string	$privacy_policy_url URL to the privacy policy
         */
        public function set_privacy_policy_url($privacy_policy_url)
        {
        }
        /**
         * Set the thumbnail_id.
         * 
         * @param	int|null	$thumbnail_id Thumbnail ID or null
         */
        public function set_thumbnail_id($thumbnail_id)
        {
        }
        /**
         * Set the title.
         * 
         * @param	string	$title Title
         */
        public function set_title($title)
        {
        }
    }
    /**
     * Embed Privacy template related functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Template
    {
        /**
         * Get an overlay template.
         * 
         * @param	\epiphyt\Embed_Privacy\embed\Provider|string	$provider The embed provider
         * @param	string	$output The output before replacing it
         * @param	array	$attributes Additional attributes
         * @return	string The overlay template
         */
        public static function get($provider, $output, $attributes = [])
        {
        }
    }
    /**
     * Assets of an embed.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Assets
    {
        /**
         * Construct the object.
         * 
         * @since	1.11.0 Deprecated second parameter
         * @since	1.11.0 First parameter must be a provider object
         * 
         * @param	string|\epiphyt\Embed_Privacy\embed\Provider	$provider Provider object
         * @param	null											$deprecated Deprecated parameter
         * @param	array											$attributes Additional embed attributes
         */
        public function __construct($provider, $deprecated = null, $attributes = [])
        {
        }
        /**
         * Get the background image asset data.
         * 
         * @return	string[] Background image asset data
         */
        public function get_background()
        {
        }
        /**
         * Get the logo asset data.
         * 
         * @return	string[] Logo asset data
         */
        public function get_logo()
        {
        }
        /**
         * Get static assets.
         * 
         * @param	array	$assets List of assets
         * @param	string	$provider Provider name
         * @return	string Static assets as HTML
         */
        public static function get_static($assets, $provider = '')
        {
        }
        /**
         * Get the thumbnail asset data.
         * 
         * @return	string[] Thumbnail asset data
         */
        public function get_thumbnail()
        {
        }
    }
    /**
     * Embed replacement representation.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Replacement
    {
        /**
         * Replacement constructor
         * 
         * @param	string	$content Original embedded content
         * @param	string	$url Embedded content URL
         */
        public function __construct($content, $url = '')
        {
        }
        /**
         * Get the content with an overlay.
         * 
         * @param	array										$attributes Embed attributes
         * @param	\epiphyt\Embed_Privacy\embed\Provider|null	$provider Embed provider
         * @return	string Content with embeds replaced by an overlay
         */
        public function get(array $attributes = [], $provider = null)
        {
        }
        /**
         * Get the current provider.
         * 
         * @deprecated	1.10.4
         * 
         * @return	\epiphyt\Embed_privacy\embed\Provider|null Provider object
         */
        public function get_provider()
        {
        }
        /**
         * Get all providers to replace an embed of.
         * 
         * @return	\epiphyt\Embed_privacy\embed\Provider[] Provider object
         */
        public function get_providers()
        {
        }
    }
}
namespace epiphyt\Embed_Privacy {
    /**
     * Frontend functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Frontend
    {
        /**
         * Initialize functionality.
         */
        public function init()
        {
        }
        /**
         * Handle printing assets.
         */
        public function print_assets()
        {
        }
        /**
         * Register our assets for the frontend.
         */
        public function register_assets()
        {
        }
    }
}
namespace epiphyt\Embed_Privacy\integration {
    /**
     * Polylang integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Polylang
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Register post type in Polylang to allow translation.
         * 
         * @param	array	$post_types List of current translatable custom post types
         * @param	bool	$is_settings Whether the current page is the settings page
         * @return	array Updated list of translatable custom post types
         */
        public static function register_post_type(array $post_types, $is_settings)
        {
        }
        /**
         * Sanitize the embed provider name.
         * 
         * @param	string	$name Current provider name
         * @return	string Sanitized provider name
         */
        public static function sanitize_name($name)
        {
        }
    }
    /**
     * Instagram integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.11.0
     */
    final class Instagram
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Replace Instagram posts.
         * 
         * @param	string	$content Current replaced content
         * @return	string Updated replaced content
         */
        public static function replace_posts($content)
        {
        }
    }
    /**
     * ActivityPub integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Activitypub
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Check, whether the current content is a valid ActivityPub embed.
         * 
         * @param	mixed	$content Given content
         * @return	bool Whether the current content is a valid ActivityPub embed
         */
        public static function is_valid_embed($content)
        {
        }
        /**
         * Maybe set a cache for an ActivityPub embed.
         * Creates a cache entry only if there is no oEmbed result yet.
         * 
         * @param	?string	$result Current oEmbed result
         * @param	string	$url Current oEmbed URL
         * @return	string|false|null oEmbed result
         */
        public static function maybe_set_cache($result, $url)
        {
        }
        /**
         * Set a local toot if it's a valid ActivityPub embed.
         * 
         * @param	string									$custom_replacement Current custom replacement
         * @param	string									$content The original content
         * @param	\epiphyt\Embed_privacy\embed\Provider	$provider Current provider
         * @param	string									$url Embed URL
         * @return	string Local toot or original embed
         */
        public static function maybe_set_local_toot($custom_replacement, $content, $provider, $url)
        {
        }
        /**
         * Set whether the current request is an ActivityPub request and thus should be ignored.
         * Return the unaltered value if it's already ignored.
         * 
         * @param	bool	$is_ignored Whether the current request is ignored
         * @return	bool Whether the current request is ignored
         */
        public static function set_ignored_request($is_ignored)
        {
        }
    }
    /**
     * Divi integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Divi
    {
        /**
         * Initialize functionality.
         */
        public function init()
        {
        }
        /**
         * Add filter for dynamic content.
         * 
         * @since	1.10.9
         * 
         * @param	string	$content Current dynamic content
         * @return	string Current dynamic content
         */
        public static function add_dynamic_content_filter($content)
        {
        }
        /**
         * Allow script tags in post, since Divi runs a wp_kses_post over the embed.
         * 
         * @since	1.10.9
         * 
         * @param	array	$html List of allowed HTML tags and attributes
         * @param	string	$context Current context
         * @return	array Updated list of allowed HTML
         */
        public static function allow_script_in_post(array $html, $context)
        {
        }
        /**
         * Enqueue assets.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Replace Google Maps Markup in Divi.
         * 
         * @param	string				$output Current output
         * @param	string				$render_method Divi render method
         * @param	\ET_Builder_Module	$module Module instance
         * @return	string Updated output
         */
        public static function replace_google_maps($output, $render_method, $module)
        {
        }
        /**
         * Register assets.
         * 
         * @param	bool	$is_debug Whether debug mode is enabled
         * @param	string	$suffix A filename suffix
         */
        public static function register_assets($is_debug, $suffix)
        {
        }
        /**
         * Remove filter for dynamic content.
         * 
         * @since	1.10.9
         * 
         * @param	string	$content Current dynamic content
         * @return	string Current dynamic content
         */
        public static function remove_dynamic_content_filter($content)
        {
        }
    }
    /**
     * AMP integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Amp
    {
        /**
         * Determine whether this is an AMP response.
         * Note that this must only be called after the parse_query action.
         * 
         * @return	bool True if the current page is an AMP page, false otherwise
         */
        public static function is_amp()
        {
        }
    }
    /**
     * Twitter/X integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.5
     */
    class X
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Transform a tweet into a local one.
         * 
         * @param	string	$html Embed code
         * @return	string Local embed
         */
        public static function get_local_tweet($html)
        {
        }
        /**
         * Set local tweets.
         * 
         * @param	string									$custom_replacement Current custom replacement
         * @param	string									$content The original content
         * @param	\epiphyt\Embed_privacy\embed\Provider	$provider Current provider
         * @return	string Original replacement or local tweet
         */
        public static function set_local_tweet($custom_replacement, $content, $provider)
        {
        }
    }
    /**
     * Twitter/X integration for Embed Privacy.
     * 
     * @author		Epiphyt
     * @deprecated	1.10.5 Use epiphyt\Embed_Privacy\integration\X instead
     * @license		GPL2
     * @package		epiphyt\Embed_Privacy
     * @since		1.10.0
     */
    final class Twitter extends \epiphyt\Embed_Privacy\integration\X
    {
        // identical to X, available just for backwards-compatibility
    }
    /**
     * Kadence Blocks integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Kadence_Blocks
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Enqueue assets.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Register assets.
         * 
         * @param	bool	$is_debug Whether debug mode is enabled
         * @param	string	$suffix A filename suffix
         */
        public static function register_assets($is_debug, $suffix)
        {
        }
    }
    /**
     * Astra integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Astra
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Enqueue assets.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Register assets.
         * 
         * @param	bool	$is_debug Whether debug mode is enabled
         * @param	string	$suffix A filename suffix
         */
        public static function register_assets($is_debug, $suffix)
        {
        }
    }
    /**
     * Shortcodes Ultimate integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Shortcodes_Ultimate
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Enqueue assets.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Register assets.
         * 
         * @param	bool	$is_debug Whether debug mode is enabled
         * @param	string	$suffix A filename suffix
         */
        public static function register_assets($is_debug, $suffix)
        {
        }
    }
    /**
     * Maps Marker integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Maps_Marker
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Replace Maps Marker (Pro) shortcodes.
         * 
         * @param	string	$output Shortcode output
         * @param	string	$tag Shortcode tag
         * @return	string Updated shortcode output
         */
        public static function replace($output, $tag)
        {
        }
        /**
         * Set the Maps Marker Pro provider.
         * 
         * @param	\epiphyt\Embed_Privacy\embed\Provider|null	$provider Current provider
         * @param	string										$content Embedded content
         * @return	\epiphyt\Embed_Privacy\embed\Provider|null Updated provider
         */
        public static function set_provider($provider, $content)
        {
        }
    }
    /**
     * Elementor integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Elementor
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Enqueue assets.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Check if a post is written in Elementor.
         * 
         * @return	bool Whether Elementor has been used
         */
        public static function is_used()
        {
        }
        /**
         * Register assets.
         * 
         * @param	bool	$is_debug Whether debug mode is enabled
         * @param	string	$suffix A filename suffix
         */
        public static function register_assets($is_debug, $suffix)
        {
        }
        /**
         * Replace YouTube videos.
         * As they are not embedded via regular iframe, we need to handle them manually.
         * 
         * @param	string	$content Current replaced content
         * @return	string Updated replaced content
         */
        public static function replace_youtube($content)
        {
        }
    }
    /**
     * wpForo Embeds integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.11.0
     */
    final class Wpforo_Embeds
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Enqueue assets.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Register assets.
         * 
         * @param	bool	$is_debug Whether debug mode is enabled
         * @param	string	$suffix A filename suffix
         */
        public static function register_assets($is_debug, $suffix)
        {
        }
        /**
         * Replace activity stream content.
         * 
         * @param	string	$content Current activity stream content
         * @return	string Updated activity stream content
         */
        public static function replace($content)
        {
        }
    }
    /**
     * BuddyPress integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.11.0
     */
    final class Buddypress
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Enqueue Embed Privacy assets for BuddyPress.
         */
        public static function enqueue_assets()
        {
        }
        /**
         * Register Embed Privacy assets for BuddyPress.
         */
        public static function register_scripts()
        {
        }
        /**
         * Replace activity stream content.
         * 
         * @param	string	$content Current activity stream content
         * @return	string Updated activity stream content
         */
        public static function replace_activity_content($content)
        {
        }
    }
    /**
     * Jetpack integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Jetpack
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Deregister assets.
         */
        public static function deregister_assets()
        {
        }
        /**
         * Replace Facebook posts.
         * 
         * @param	string	$content Current replaced content
         * @return	string Updated replaced content
         */
        public static function replace_facebook_posts($content)
        {
        }
    }
    /**
     * Instagram Feed integration for Embed Privacy.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.9
     */
    final class Instagram_Feed
    {
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Check the matched content whether it comes from Instagram Feed.
         * 
         * @param	bool									$should_replace Whether the replacement should take place
         * @param	string									$matched_content Actual matched content
         * @param	\epiphyt\Embed_privacy\embed\Provider	$provider Provider object
         * @return	bool Whether the replacement should take place
         */
        public static function should_replace_match($should_replace, $matched_content, $provider)
        {
        }
    }
}
namespace epiphyt\Embed_Privacy {
    /**
     * Filter the output of widgets.
     * 
     * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Widget instead
     * @see			https://github.com/philipnewcomer/widget-output-filters
     * @since		1.1.0
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    class Embed_Privacy_Widget_Output_Filter
    {
        /**
         * @var		string The alternative option name of this filter
         */
        public $alt_option_name = '';
        /**
         * @var		string The ID of this filter
         */
        public $id = '';
        /**
         * @var		string The ID base of this filter
         */
        public $id_base = 'embed_privacy_widget_output_filter';
        /**
         * @var		string The name of this filter
         */
        public $name = 'Embed Privacy';
        /**
         * @var		string The option name of this filter
         */
        public $option_name = 'widget_embed_privacy_widget_output_filter';
        /**
         * @var		bool The updated value of this filter
         */
        public $updated = false;
        /**
         * @var		array The widget options of this filter
         */
        public $widget_options = [];
        /**
         * Return the single instance of this class.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Widget::get_instance() instead
         * 
         * @return	\epiphyt\Embed_Privacy\Embed_Privacy_Widget_Output_Filter The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Replace the widget's display callback with the Dynamic Sidebar Params display callback, storing the original callback for use later.
         * The $sidebar_params variable is not modified; it is only used to get the current widget's ID.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Widget::filter_dynamic_sidebar_params() instead
         * 
         * @param	array	$sidebar_params The sidebar parameters
         * @return	array The sidebar parameters
         */
        public function filter_dynamic_sidebar_params($sidebar_params)
        {
        }
        /**
         * Execute the widget's original callback function, filtering its output.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Widget::display_widget() instead
         */
        public function display_widget()
        {
        }
    }
}
namespace epiphyt\Embed_Privacy\admin {
    /**
     * Admin user interface functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class User_Interface
    {
        /**
         * Initialize functions.
         */
        public static function init()
        {
        }
        /**
         * Add plugin meta links.
         * 
         * @param	array	$input Registered links.
         * @param	string	$file  Current plugin file.
         * @return	array Merged links
         */
        public static function add_meta_link($input, $file)
        {
        }
        /**
         * Enqueue admin assets.
         * 
         * @param	string	$hook The current hook
         */
        public static function enqueue_assets($hook)
        {
        }
    }
    /**
     * Functionality for a single admin field.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Field
    {
        /**
         * Get a field.
         * 
         * @param	array	$attributes Field attributes
         * @param	int		$post_id Optional post ID
         */
        public static function get(array $attributes, $post_id = 0)
        {
        }
        /**
         * Get a choice field (checkbox or radio button).
         * 
         * @param	array	$attributes Field attributes
         * @param	mixed	$current_value Current value
         */
        public static function get_choice(array $attributes, $current_value)
        {
        }
        /**
         * Get an image field.
         * 
         * @param	int		$post_id Post ID
         * @param	array	$attributes An array with attributes
         */
        public static function get_image($post_id, array $attributes)
        {
        }
        /**
         * Get a text field.
         * 
         * @param	array	$attributes Field attributes
         * @param	mixed	$current_value Current value
         */
        public static function get_text(array $attributes, $current_value)
        {
        }
    }
    /**
     * Admin support data related functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.11.0
     */
    final class Support_Data
    {
        const CAPABILITY = 'manage_options';
        /**
         * Get support data.
         * 
         * @return	string Support data
         */
        public static function get()
        {
        }
    }
    /**
     * Admin settings.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Settings
    {
        const CAPABILITY = 'manage_options';
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Get settings page.
         */
        public static function get_page()
        {
        }
        /**
         * Register settings.
         */
        public static function register()
        {
        }
        /**
         * Register menu items.
         */
        public static function register_menu()
        {
        }
    }
    /**
     * Admin fields functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Fields
    {
        /**
         * @var		array List of fields
         */
        public $fields = [];
        /**
         * Initialize functions.
         */
        public function init()
        {
        }
        /**
         * Add meta boxes.
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Disallow deletion of system embeds.
         * 
         * @param	array	$caps The current capabilities
         * @param	string	$cap The capability to check
         * @param	int		$user_id The user ID
         * @param	array	$args Additional arguments
         * @return	array The updated capabilities
         */
        public static function disallow_deleting_system_embeds(array $caps, $cap, $user_id, array $args)
        {
        }
        /**
         * Get the post meta fields HTML.
         */
        public function get()
        {
        }
        /**
         * Register fields.
         * 
         * @param	array	$fields Fields to register
         */
        public function register(array $fields = [])
        {
        }
        /**
         * Register default fields.
         */
        public function register_default()
        {
        }
        /**
         * Remove default meta box "Custom Fields”.
         */
        public static function remove_default()
        {
        }
        /**
         * Save the fields as post meta.
         * 
         * @param	int			$post_id The ID of the post
         * @param	\WP_Post	$post The post object
         */
        public function save($post_id, $post)
        {
        }
        /**
         * Upload a file as attachment.
         * 
         * @param	array	$file The file to upload
         * @return	int The attachment ID
         */
        public static function upload_file(array $file)
        {
        }
    }
}
namespace epiphyt\Embed_Privacy {
    /**
     * Two click embed main class.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    class Embed_Privacy
    {
        /**
         * @deprecated	1.2.0
         * @since		1.1.0
         */
        const IFRAME_REGEX = '/<iframe(.*?)src="([^"]+)"([^>]*)>((?!<\/iframe).)*<\/iframe>/ms';
        /**
         * @since	1.3.5
         * @var		array Replacements that already have taken place.
         */
        public $did_replacements = [];
        /**
         * @since	1.3.0
         * @var		array An array of embed providers
         */
        public $embeds = [];
        /**
         * @since	1.10.0
         * @var		\epiphyt\Embed_Privacy\admin\Fields
         */
        public $fields;
        /**
         * @since	1.10.0
         * @var		\epiphyt\Embed_Privacy\Frontend
         */
        public $frontend;
        /**
         * @since	1.3.0
         * @var		bool Whether the current request has any embed processed by Embed Privacy
         */
        public $has_embed = false;
        /**
         * @since	1.10.0
         * @var		bool Whether the current request should be ignored
         */
        public $is_ignored_request = false;
        /**
         * @var		\epiphyt\Embed_Privacy\Embed_Privacy
         */
        public static $instance;
        /**
         * @deprecated	1.10.0 Use \EPI_EMBED_PRIVACY_FILE instead
         * @var		string The full path to the main plugin file
         */
        public $plugin_file = '';
        /**
         * @since	1.10.0
         * @var		\epiphyt\Embed_Privacy\handler\Shortcode
         */
        public $shortcode;
        /**
         * @deprecated	1.10.0
         * @var			array Style properties
         */
        public $style = ['container' => [], 'global' => []];
        /**
         * @var		\epiphyt\Embed_Privacy\thumbnail\Thumbnail
         */
        public $thumbnail;
        /**
         * @var		bool Determine if we use the cache
         */
        public $use_cache;
        /**
         * @deprecated	1.2.0
         * @var			array The supported media providers
         */
        public $embed_providers = [
            // phpcs:ignore SlevomatCodingStandard.Arrays.AlphabeticallySortedByKeys.IncorrectKeyOrder
            '.amazon.' => 'Amazon Kindle',
            '.amzn.' => 'Amazon Kindle',
            'a.co' => 'Amazon Kindle',
            'z.cn' => 'Amazon Kindle',
            'animoto.com' => 'Animoto',
            'cloudup.com' => 'Cloudup',
            'crowdsignal.com' => 'Crowdsignal',
            'dailymotion.com' => 'DailyMotion',
            'facebook.com' => 'Facebook',
            'flickr.com' => 'Flickr',
            'funnyordie.com' => 'Funny Or Die',
            'imgur.com' => 'Imgur',
            'instagram.com' => 'Instagram',
            'issuu.com' => 'Issuu',
            'kickstarter.com' => 'Kickstarter',
            'meetup.com' => 'Meetup',
            'mixcloud.com' => 'Mixcloud',
            'photobucket.com' => 'Photobucket',
            'poll.fm' => 'Crowdsignal',
            'polldaddy.com' => 'Crowdsignal',
            'reddit.com' => 'Reddit',
            'reverbnation.com' => 'ReverbNation',
            'scribd.com' => 'Scribd',
            'sketchfab.com' => 'Sketchfab',
            'slideshare.net' => 'SlideShare',
            'smugmug.com' => 'SmugMug',
            'soundcloud.com' => 'SoundCloud',
            'speakerdeck.com' => 'Speaker Deck',
            'spotify.com' => 'Spotify',
            'survey.fm' => 'Crowdsignal',
            'tiktok.com' => 'TikTok',
            'ted.com' => 'TED',
            'tumblr.com' => 'Tumblr',
            'twitter.com' => 'Twitter',
            'videopress.com' => 'VideoPress',
            'vimeo.com' => 'Vimeo',
            'wordpress.org/plugins' => 'WordPress.org',
            'wordpress.tv' => 'WordPress.tv',
            'youtu.be' => 'YouTube',
            'youtube.com' => 'YouTube',
        ];
        /**
         * Embed Privacy constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize the class.
         * 
         * @since	1.2.0
         */
        public function init()
        {
        }
        /**
         * Initialize all integrations, if necessary.
         */
        public function init_integrations()
        {
        }
        /**
         * Embeds are cached in the postmeta database table and need to be removed
         * whenever the plugin will be enabled or disabled.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Post::clear_embed_cache() instead
         */
        public function clear_embed_cache()
        {
        }
        /**
         * Deregister assets.
         * 
         * @deprecated	1.10.0
         * @since		1.4.6
         */
        public function deregister_assets()
        {
        }
        /**
         * Enqueue our assets for the frontend.
         * 
         * @deprecated	1.4.4 Use epiphyt\Embed_Privacy\Frontend::print_assets() instead
         */
        public function enqueue_assets()
        {
        }
        /**
         * Get the Embed Privacy cookie.
         * 
         * @return	mixed The content of the cookie
         */
        public function get_cookie()
        {
        }
        /**
         * Get filters for Elementor.
         * 
         * @deprecated	1.3.5
         * @since		1.3.0
         */
        public function get_elementor_filters()
        {
        }
        /**
         * Get an embed provider by its name.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\data\Providers::get_by_name() instead
         * @since		1.3.5
         * 
         * @param	string	$name The name to search for
         * @return	\WP_Post|null The embed or null
         */
        public function get_embed_by_name($name)
        {
        }
        /**
         * Get an embed provider overlay.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\embed\Replacement::get() instead
         * @since		1.3.5
         * 
         * @param	\WP_Post	$provider An embed provider
         * @param	string		$content The content
         * @return	string The content with additional overlays of an embed provider
         */
        public function get_embed_overlay($provider, $content)
        {
        }
        /**
         * Get a specific type of embeds.
         * 
         * For more information on the accepted arguments in $args, see the
         * {@link https://developer.wordpress.org/reference/classes/wp_query/
         * WP_Query} documentation in the Developer Handbook.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\data\Providers::get_list() instead
         * @since		1.3.0
         * @since		1.8.0 Added the $args parameter
         * 
         * @param	string	$type The embed type
         * @param	array	$args Additional arguments
         * @return	array A list of embeds
         */
        public function get_embeds($type = 'all', $args = [])
        {
        }
        /**
         * Get a list with ignored shortcodes.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\Shortcode::get_ignored() instead
         * @since		1.6.0
         * 
         * @return	string[] List with ignored shortcodes
         */
        public function get_ignored_shortcodes()
        {
        }
        /**
         * Get a unique instance of the class.
         * 
         * @since	1.1.0
         * 
         * @return	\epiphyt\Embed_Privacy\Embed_Privacy The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Output a complete template of the overlay.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\embed\Template::get() instead
         * @since		1.1.0
         * 
         * @param	string	$embed_provider The embed provider
         * @param	string	$embed_provider_lowercase The embed provider without spaces and in lowercase
         * @param	string	$output The output before replacing it
         * @param	array	$args Additional arguments
         * @return	string The overlay template
         */
        public function get_output_template($embed_provider, $embed_provider_lowercase, $output, $args = [])
        {
        }
        /**
         * Get a single overlay for all matching embeds.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\embed\Replacement::get() instead
         * @since		1.2.0
         * 
         * @param	string	$content The original content
         * @param	string	$embed_provider The embed provider
         * @param	string	$embed_provider_lowercase The embed provider without spaces and in lowercase
         * @param	array	$args Additional arguments
         * @return	string The updated content
         */
        public function get_single_overlay($content, $embed_provider, $embed_provider_lowercase, $args)
        {
        }
        /**
         * Get dynamically generated style.
         * 
         * @deprecated	1.10.0
         * 
         * @return	string Dynamically generated style
         */
        public function get_style()
        {
        }
        /**
         * Check if a post contains an embed.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Post::has_embed() instead
         * @since		1.3.0
         * 
         * @param	\WP_Post|int|null	$post A post object, post ID or null
         * @return	bool True if a post contains an embed, false otherwise
         */
        public function has_embed($post = null)
        {
        }
        /**
         * Check if a provider is always active.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\data\Providers::is_always_active() instead
         * @since		1.1.0
         * 
         * @param	string	$provider The embed provider in lowercase
         * @return	bool True if provider is always active, false otherwise
         */
        public function is_always_active_provider($provider)
        {
        }
        /**
         * Check if a post is written in Elementor.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\integration\Elementor::is_used() instead
         * @since		1.3.5
         * 
         * @return	bool True if Elementor is used, false otherwise
         */
        public function is_elementor()
        {
        }
        /**
         * Check if the current theme is matching your name.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Theme::is() instead
         * @since		1.3.5
         * 
         * @param	string	$name The theme name to test
         * @return	bool True if the current theme is matching, false otherwise
         */
        public function is_theme($name)
        {
        }
        /**
         * Get the WP_Filesystem object
         * 
         * @return	\WP_Filesystem_Direct WP_Filesystem object
         */
        public static function get_wp_filesystem()
        {
        }
        /**
         * Load the translation files.
         */
        public function load_textdomain()
        {
        }
        /**
         * Callback for the page output buffer.
         * 
         * @deprecated	1.10.0
         * 
         * @param	string	$buffer Current buffer
         * @return	string Updated buffer
         */
        public function output_buffer_callback($buffer)
        {
        }
        /**
         * Preserve backslashes in regex field.
         * 
         * @since	1.4.0
         */
        public function preserve_backslashes()
        {
        }
        /**
         * Handle printing assets.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\Frontend::print_assets() instead
         * @since		1.3.0
         */
        public function print_assets()
        {
        }
        /**
         * Register our assets for the frontend.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\Frontend::register_assets() instead
         * @since		1.4.4
         */
        public function register_assets()
        {
        }
        /**
         * Register post type in Polylang to allow translation.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\integration\Polylang::register_post_type() instead
         * @since		1.5.0
         * 
         * @param	array	$post_types List of current translatable custom post types
         * @param	bool	$is_settings Whether the current page is the settings page
         * @return	array Updated list of translatable custom post types
         */
        public function register_polylang_post_type(array $post_types, $is_settings)
        {
        }
        /**
         * Register post type.
         * 
         * @since	1.10.0
         */
        public static function register_post_type()
        {
        }
        /**
         * Replace embeds with a container and hide the embed with an HTML comment.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\data\Replacer::replace_embeds() instead
         * @since		1.2.0 Changed behavior of the method
         * @since		1.6.0 Added optional $tag parameter
         * 
         * @param	string	$content The original content
         * @param	string	$tag The shortcode tag if called via do_shortcode
         * @return	string The updated content
         */
        public function replace_embeds($content, $tag = '')
        {
        }
        /**
         * Replace oembed embeds with a container and hide the embed with an HTML comment.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\data\Replacer::replace_oembed() instead
         * @since		1.2.0
         * 
         * @param	string	$output The original output
         * @param	string	$url The URL to the embed
         * @param	array	$args Additional arguments of the embed
         * @return	string The updated embed code
         */
        public function replace_embeds_oembed($output, $url, $args)
        {
        }
        /**
         * Replace embeds in Divi Builder.
         * 
         * @deprecated	1.10.0
         * @since		1.2.0
         * @since		1.6.0 Deprecated second parameter
         * 
         * @param	string	$item_embed The original output
         * @param	string	$url The URL of the embed
         * @return	string The updated embed code
         */
        public function replace_embeds_divi($item_embed, $url)
        {
        }
        /**
         * Replace X embeds.
         * 
         * @deprecated	1.6.3
         * @since		1.6.1
         * 
         * @param	string	$output The original output
         * @param	string	$url The URL to the embed
         * @param	array	$args Additional arguments of the embed
         * @return	string The updated embed code
         */
        public function replace_embeds_twitter($output, $url, $args)
        {
        }
        /**
         * Replace Google Maps iframes.
         * 
         * @deprecated	1.2.0 Use epiphyt\Embed_Privacy\embed\Replacement::get() instead
         * @since		1.1.0
         * 
         * @param	string	$content The post content
         * @return	string The post content
         */
        public function replace_google_maps($content)
        {
        }
        /**
         * Replace Maps Marker (Pro) shortcodes.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\integration\Maps_Marker::replace() instead
         * @since		1.5.0
         * 
         * @param	string	$output Shortcode output
         * @param	string	$tag Shortcode tag
         * @return	string Updated shortcode output
         */
        public function replace_maps_marker($output, $tag)
        {
        }
        /**
         * Replace video shortcode embeds.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\data\Replacer::replace_video_shortcode() instead
         * @since		1.7.0
         * 
         * @param	string	$output Video shortcode HTML output
         * @param	array	$atts Array of video shortcode attributes
         * @return	string Updated embed code
         */
        public function replace_video_shortcode($output, $atts)
        {
        }
        /**
         * Run additional for a DOM node checks.
         * 
         * @since	1.4.4
         * @since	1.10.0 Method is now public
         * 
         * @param	array		$checks A list of checks
         * @param	\DOMElement	$element The DOM Element
         * @return	bool Whether all checks are successful
         */
        public function run_checks($checks, $element)
        {
        }
        /**
         * Check whether this request should be ignored by Embed Privacy.
         * 
         * @deprecated	1.10.10 Use epiphyt\Embed_Privacy:\Embed_Privacy:set_ignored_request_in_template_include() instead
         * @since	1.10.0
         */
        public function set_ignored_request()
        {
        }
        /**
         * Check whether this request should be ignored by Embed Privacy.
         * Template inclusion
         * 
         * @since	1.10.10
         * 
         * @param	string	$template Template path to include
         * @return	string $template Template path to include
         */
        public function set_ignored_request_in_template_include($template)
        {
        }
        /**
         * Set the plugin file.
         * 
         * @deprecated	1.10.0 Use \EPI_EMBED_PRIVACY_FILE instead
         * @since		1.1.0
         * 
         * @param	string	$file The path to the file
         */
        public function set_plugin_file($file)
        {
        }
        /**
         * Register post type.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy:\Embed_Privacy:register_post_type() instead
         * @since	1.2.0
         */
        public function set_post_type()
        {
        }
        /**
         * Display an Opt-out shortcode.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\handler\Shortcode::opt_out() instead
         * @since		1.2.0
         * 
         * @param	array	$attributes Shortcode attributes
         * @return	string The shortcode output
         */
        public function shortcode_opt_out($attributes)
        {
        }
        /**
         * Start an output buffer.
         * 
         * @deprecated	1.10.0
         */
        public function start_output_buffer()
        {
        }
    }
    /**
     * System functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.2
     */
    final class System
    {
        /**
         * Determines whether a plugin is active.
         * 
         * Basically a wrapper around core's is_plugin_active(), but with auto-loading.
         * 
         * @param	string	$plugin Path to the plugin file relative to the plugins directory
         * @return	bool Whether the plugin is active
         */
        public static function is_plugin_active($plugin)
        {
        }
    }
    /**
     * Thumbnails for Embed Privacy.
     * 
     * @deprecated	1.9.0 Use the functionality of epiphyt\Embed_Privacy\thumbnail\Thumbnail instead
     * @since		1.5.0
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    class Thumbnails
    {
        // @deprecated: use Thumbnails::$directory instead
        const DIRECTORY = \WP_CONTENT_DIR . '/uploads/embed-privacy/thumbnails';
        /**
         * @var		array Fields to output
         */
        public $fields = [];
        /**
         * Thumbnails constructor.
         * 
         * @deprecated	1.9.0 Use the functionality of epiphyt\Embed_Privacy\thumbnail\Thumbnail instead
         */
        public function __construct()
        {
        }
        /**
         * Initialize functions.
         * 
         * @deprecated	1.9.0 Use the functionality of epiphyt\Embed_Privacy\thumbnail\Thumbnail instead
         */
        public function init()
        {
        }
        /**
         * Check and delete orphaned thumbnails.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\Thumbnail::delete_orphaned() instead
         * 
         * @param	int			$post_id The post ID
         * @param	\WP_Post	$post The post object
         */
        public function check_orphaned($post_id, $post)
        {
        }
        /**
         * Delete thumbnails for a given post ID.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\Thumbnail::delete_thumbnails() instead
         * 
         * @param	int		$post_id Post ID
         */
        public function delete_thumbnails($post_id)
        {
        }
        /**
         * Get path and URL to an embed thumbnail.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\Thumbnail::get_data() instead
         * 
         * @param	\WP_Post	$post Post object
         * @param	string		$url Embedded URL
         * @return	array Thumbnail path and URL
         */
        public function get_data($post, $url)
        {
        }
        /**
         * Get the thumbnail directory and URL.
         * Since we don't want to have a directory per site in a network, we need to
         * get rid of the site ID in the path.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\Thumbnail::get_directory() instead
         * @since		1.7.3
         * 
         * @return	string[] Thumbnail directory and URL
         */
        public function get_directory()
        {
        }
        /**
         * Get embed thumbnails from the embed provider.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\Thumbnail::get_from_provider() instead
         * 
         * @param	string	$output The returned oEmbed HTML
         * @param	object	$data A data object result from an oEmbed provider
         * @param	string	$url The URL of the content to be embedded
         * @return	string The returned oEmbed HTML
         */
        public function get_from_provider($output, $data, $url)
        {
        }
        /**
         * Get a unique instance of the class.
         * 
         * @return	\epiphyt\Embed_Privacy\Thumbnails The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Get a list of supported embed providers for thumbnails.
         * 
         * @deprecated	1.9.0
         * 
         * @return	array A list of supported embed providers
         */
        public function get_supported_providers()
        {
        }
        /**
         * Download and save a SlideShare thumbnail.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\provider\SlideShare::save() instead
         * @since		1.7.0
         * 
         * @param	string	$id SlideShare embed ID
         * @param	string	$url SlideShare deck URL
         * @param	string	$thumbnail_url SlideShare thumbnail URL
         */
        public function set_slideshare_thumbnail($id, $url, $thumbnail_url)
        {
        }
        /**
         * Download and save a Vimeo thumbnail.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\provider\Vimeo::save() instead
         * 
         * @param	string	$id Vimeo video ID
         * @param	string	$url Vimeo video URL
         * @param	string	$thumbnail_url Vimeo thumbnail URL
         */
        public function set_vimeo_thumbnail($id, $url, $thumbnail_url)
        {
        }
        /**
         * Download and save a YouTube thumbnail.
         * 
         * @deprecated	1.9.0 Use epiphyt\Embed_Privacy\thumbnail\provider\YouTube::save() instead
         * 
         * @param	string	$id YouTube video ID
         * @param	string	$url YouTube video URL
         */
        public function set_youtube_thumbnail($id, $url)
        {
        }
    }
}
namespace epiphyt\Embed_Privacy\data {
    /**
     * Replacer functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Replacer
    {
        /**
         * Extend a regular expression pattern with certain tags.
         * 
         * @param	string										$pattern Pattern to extend
         * @param	\epiphyt\Embed_privacy\embed\Provider|null	$provider Current embed provider
         * @return	string Extended pattern
         */
        public static function extend_pattern($pattern, $provider)
        {
        }
        /**
         * Replace embeds with a container and hide the embed with an HTML comment.
         * 
         * @param	string	$content The original content
         * @param	string	$tag The shortcode tag if called via do_shortcode
         * @return	string The updated content
         */
        public static function replace_embeds($content, $tag = '')
        {
        }
        /**
         * Replace oembed embeds with a container and hide the embed with an HTML comment.
         * 
         * @param	string	$output The original output
         * @param	string	$url The URL to the embed
         * @param	array	$attributes Additional attributes of the embed
         * @return	string The updated embed code
         */
        public static function replace_oembed($output, $url, array $attributes)
        {
        }
        /**
         * Replace video shortcode embeds.
         * 
         * @param	string	$output Video shortcode HTML output
         * @param	array	$attributes Array of video shortcode attributes
         * @return	string Updated embed code
         */
        public static function replace_video_shortcode($output, array $attributes)
        {
        }
    }
    /**
     * Embed provider related functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.10.0
     */
    final class Providers
    {
        /**
         * @var		\epiphyt\Embed_Privacy\data\Providers
         */
        public static $instance;
        /**
         * Initialize functionality.
         */
        public static function init()
        {
        }
        /**
         * Get an embed provider by its name.
         * 
         * @param	string	$name The name to search for
         * @return	\epiphyt\Embed_privacy\embed\Provider The embed provider
         */
        public function get_by_name($name)
        {
        }
        /**
         * Get a provider by its post object.
         * 
         * @param	\WP_Post	$post Post object
         * @return	\epiphyt\Embed_privacy\embed\Provider Embed provider instance
         */
        public static function get_by_post($post)
        {
        }
        /**
         * Get a list of providers by their post objects.
         * 
         * @param	\WP_Post[]	$posts List of post objects
         * @return	\epiphyt\Embed_privacy\embed\Provider[] List of embed provider instances
         */
        public static function get_by_posts($posts)
        {
        }
        /**
         * Get a unique instance of the class.
         * 
         * @return	\epiphyt\Embed_Privacy\data\Providers The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Get a specific type of embeds.
         * 
         * For more information on the accepted arguments in $args, see the
         * {@link https://developer.wordpress.org/reference/classes/wp_query/
         * WP_Query} documentation in the Developer Handbook.
         * 
         * @param	string	$type The embed type
         * @param	array	$args Additional arguments
         * @return	\epiphyt\Embed_Privacy\embed\Provider[] A list of providers
         */
        public function get_list($type = 'all', $args = [])
        {
        }
        /**
         * Check if a provider is always active.
         * 
         * @param	string	$provider The embed provider in lowercase
         * @return	bool True if provider is always active, false otherwise
         */
        public static function is_always_active($provider)
        {
        }
        /**
         * Whether the current provider is disabled.
         * 
         * @param	\WP_Post|null	$post Optional post object
         * @return	bool Whether the current provider is disabled
         */
        public static function is_disabled($post = null)
        {
        }
        /**
         * Sanitize the embed provider name.
         * 
         * @param	string	$name Current provider name
         * @return	string Sanitized provider name
         */
        public static function sanitize_name($name)
        {
        }
    }
    /**
     * Embed cache related functionality.
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     * @since	1.11.0
     */
    final class Embed_Cache
    {
        /**
         * Get an embed cache entry.
         * 
         * @param	string	$url Embed URL
         * @return	mixed Embed cache entry
         */
        public static function get($url)
        {
        }
        /**
         * Get an embed cache key.
         * 
         * @param	string	$url Embed URL
         * @return	string Embed cache key
         */
        public static function get_key($url)
        {
        }
        /**
         * Set an embed cache entry.
         * 
         * @param	string	$url Embed URL
         * @param	mixed	$data Data to cache
         * @return	bool Whether the value was set
         */
        public static function set($url, $data)
        {
        }
    }
}
namespace epiphyt\Embed_Privacy {
    /**
     * Migration class to update data in the database on upgrades.
     * 
     * @since	1.2.0
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    class Migration
    {
        /**
         * Migration constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize functions.
         */
        public function init()
        {
        }
        /**
         * Get a unique instance of the class.
         * 
         * @return	\epiphyt\Embed_Privacy\Migration The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Run migrations.
         * 
         * @param	null	$deprecated Deprecated, has no function anymore
         * @param	null	$deprecated2 Deprecated, has no function anymore
         */
        public function migrate($deprecated = null, $deprecated2 = null)
        {
        }
        /**
         * Register default embed providers.
         */
        public function register_default_embed_providers()
        {
        }
        /**
         * Add a notice if migration failed.
         * 
         * @since	1.5.0
         */
        public function register_migration_failed_notice()
        {
        }
    }
    /**
     * Custom fields for Embed Privacy.
     * 
     * @deprecated	1.10.0
     * @since		1.2.0
     * 
     * @author	Epiphyt
     * @license	GPL2
     * @package	epiphyt\Embed_Privacy
     */
    class Fields
    {
        /**
         * @var		array Fields to output
         */
        public $fields = [];
        /**
         * Fields constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initialize functions.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::init() instead
         */
        public function init()
        {
        }
        /**
         * Add meta boxes.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::add_meta_boxes() instead
         */
        public function add_meta_boxes()
        {
        }
        /**
         * Enqueue admin assets.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\User_Interface::enqueue_assets() instead
         * 
         * @param	string	$hook The current hook
         */
        public function enqueue_admin_assets($hook)
        {
        }
        /**
         * Get a unique instance of the class.
         * 
         * @return	\epiphyt\Embed_Privacy\Fields The single instance of this class
         */
        public static function get_instance()
        {
        }
        /**
         * Get the post meta fields HTML.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::get() instead
         */
        public function get_the_fields_html()
        {
        }
        /**
         * Output an image field.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Field::get_image() instead
         * 
         * @param	int		$post_id The current post ID
         * @param	array	$attributes An array with attributes
         */
        public function get_the_image_field_html($post_id, array $attributes)
        {
        }
        /**
         * Output a single input field depending on given attributes.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Field::get() instead
         * 
         * @param	int		$post_id The current post ID
         * @param	array	$attributes An array with attributes
         */
        public function get_the_input_field_html($post_id, array $attributes)
        {
        }
        /**
         * Register fields.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::register() instead
         * 
         * @param	array	$fields Fields to register
         */
        public function register(array $fields = [])
        {
        }
        /**
         * Register default fields.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::register_default() instead
         */
        public function register_default_fields()
        {
        }
        /**
         * Remove default meta box "Custom Fields”.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::remove_default() instead
         */
        public function remove_default_fields()
        {
        }
        /**
         * Save the fields as post meta.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::save() instead
         * 
         * @param	int			$post_id The ID of the post
         * @param	\WP_Post	$post The post object
         */
        public function save_fields($post_id, $post)
        {
        }
        /**
         * Upload a file as attachment.
         * 
         * @deprecated	1.10.0 Use epiphyt\Embed_Privacy\admin\Fields::upload_file() instead
         * 
         * @param	array	$file The file to upload
         * @return	int The attachment ID
         */
        public function upload_file(array $file)
        {
        }
    }
}
namespace {
    /*!
     * ISC License
     * 
     * Copyright (c) 2018-2021, Andrea Giammarchi, @WebReflection
     *
     * Permission to use, copy, modify, and/or distribute this software for any
     * purpose with or without fee is hereby granted, provided that the above
     * copyright notice and this permission notice appear in all copies.
     *
     * THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH
     * REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY
     * AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT,
     * INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM
     * LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE
     * OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR
     * PERFORMANCE OF THIS SOFTWARE.
     */
    class FlattedString
    {
        public function __construct($value)
        {
        }
    }
    class Flatted
    {
        // public utilities
        public static function parse($json, $assoc = \false, $depth = 512, $options = 0)
        {
        }
        public static function stringify($value, $options = 0, $depth = 512)
        {
        }
    }
}
// // phpcs:disable SlevomatCodingStandard.Namespaces.FullyQualifiedGlobalFunctions.NonFullyQualified
namespace epiphyt\Embed_Privacy {
    /**
     * Delete all data
     * 
     * @since	1.5.0
     */
    function delete_data()
    {
    }
    /**
     * Delete a directory recursively.
     * 
     * @since	1.7.3
     * 
     * @param	string	$directory The directory to delete
     */
    function delete_directory($directory)
    {
    }
}
namespace epiphyt\Embed_Privacy {
    \define('EPI_EMBED_PRIVACY_FILE', \EPI_EMBED_PRIVACY_BASE . \basename(__FILE__));
    \define('EPI_EMBED_PRIVACY_URL', \plugin_dir_url(\EPI_EMBED_PRIVACY_FILE));
    \define('EMBED_PRIVACY_VERSION', '1.11.4');
}