<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment ul/ol HtmlTag
 * Root class to generate an ol element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment ul/ol HtmlTag
 * Root class to generate an ol element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagOl extends HtmlTagList
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagOl::__tagName()
	 * @return HtmlTagOl
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagOl::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @uses HtmlTagList::OL
	 * @return string HtmlTagList::OL
	 */
	public static function __tagName()
	{
		return HtmlTagList::OL;
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