<?php
/**
 * The <aside> DOMtag.
 * @since 1.2.3
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class AsideTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.2.3
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('aside', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.2.3
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return parent::ALWAYS_WL;
	}
}