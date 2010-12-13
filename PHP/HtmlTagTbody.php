<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type tbody
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type tbody
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagTbody extends HtmlTagTableTPart
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTbody::__tagName()
	 * @return HtmlTagTbody
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTbody::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @uses HtmlTagTableTPart::TBODY
	 * @return string HtmlTagTableTPart::TBODY
	 */
	public static function __tagName()
	{
		return HtmlTagTableTPart::TBODY;
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>