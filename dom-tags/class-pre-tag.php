<?php
/**
 * The <pre> DOMtag.
 * @since 1.2.5
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class PreTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.2.5
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('pre', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.2.5
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return parent::ALWAYS_WL;
	}
}