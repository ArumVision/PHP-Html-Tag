<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type sup
 * Root class to generate a sup element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type sup
 * Root class to generate a sup element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagSup extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagSup::__tagName()
	 * @return HtmlTagSup
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagSup::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string sup
	 */
	public static function __tagName()
	{
		return 'sup';
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