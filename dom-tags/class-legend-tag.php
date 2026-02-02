<?php
/**
 * The <legend> DOMtag.
 * @since 1.2.4
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class LegendTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.2.4
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('legend', self::props(), $args);
	}
	
	/**
	 * The tag's props.
	 * @since 1.2.4
	 *
	 * @access public
	 * @return array
	 */
	public static function props(): array {
		return parent::ALWAYS_WL;
	}
}