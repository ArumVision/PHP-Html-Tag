<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type colgroup
 * Root class to generate a colgroup element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type colgroup
 * Root class to generate a colgroup element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
class HtmlTagColgroup extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagColgroup::__tagName()
	 * @return HtmlTagColgroup
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagColgroup::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string colgroup
	 */
	public static function __tagName()
	{
		return 'colgroup';
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