<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type sub
 * Root class to generate a sub element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type sub
 * Root class to generate a sub element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagSub extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagSub::__tagName()
	 * @return HtmlTagSub
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagSub::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string sub
	 */
	public static function __tagName()
	{
		return 'sub';
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