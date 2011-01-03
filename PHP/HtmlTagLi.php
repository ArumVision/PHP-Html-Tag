<?php
/**
 * Classe m�re permettant de g�n�rer des �l�ments d'un ul/ol HtmlTag
 * Root class to generate a li element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe m�re permettant de g�n�rer des �l�ments d'un ul/ol HtmlTag
 * Root class to generate a li element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagLi extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagLi::__tagName()
	 * @return HtmlTagLi
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagLi::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string li
	 */
	public static function __tagName()
	{
		return 'li';
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