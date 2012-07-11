<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type u
 * Root class to generate a u element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 31/03/2011
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type u
 * Root class to generate a u element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 31/03/2011
 */
class HtmlTagU extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagU::__tagName()
	 * @return HtmlTagU
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagU::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string u
	 */
	public static function __tagName()
	{
		return 'u';
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