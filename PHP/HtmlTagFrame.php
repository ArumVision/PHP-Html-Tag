<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type frame
 * Root class to generate a frame element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 04/09/2011
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type frame
 * Root class to generate a frame element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 04/09/2011
 */
class HtmlTagFrame extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagFrame::__tagName()
	 * @return HtmlTagFrame
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagFrame::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string i
	 */
	public static function __tagName()
	{
		return 'frame';
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