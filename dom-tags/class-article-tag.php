<?php
/**
 * The <article> DOMtag.
 * @since 1.2.3
 *
 * @author Jace Fincham
 * @package DomTags
 */
namespace DomTags;

class ArticleTag extends \DomTags implements DomTagInterface {
	/**
	 * Construct the DOMtag.
	 * @since 1.2.3
	 *
	 * @access public
	 * @param array|null $args (optional) -- The list of arguments.
	 * @return string
	 */
	public static function tag(?array $args = null): string {
		return parent::constructTag('article', self::props(), $args);
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