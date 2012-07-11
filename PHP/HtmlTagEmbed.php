<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type embed
 * Root class to generate an em element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 03/09/2011
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type embed
 * Root class to generate an em element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 03/09/2011
 */
class HtmlTagEmbed extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagEmbed::__tagName()
	 * @return HtmlTagEmbed
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagEmbed::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string embed
	 */
	public static function __tagName()
	{
		return 'embed';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>