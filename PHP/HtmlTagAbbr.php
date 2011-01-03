<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type abbr
 * Root class to generate an abbr element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type abbr
 * Root class to generate an abbr element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
class HtmlTagAbbr extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagAbbr::__tagName()
	 * @return HtmlTagAbbr
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagAbbr::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string abbr
	 */
	public static function __tagName()
	{
		return 'abbr';
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