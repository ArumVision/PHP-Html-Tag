<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type h4
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type h4
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagH4 extends HtmlTagH
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagH4::__tagName()
	 * @return HtmlTagH4
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagH4::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @uses HtmlTagH::H4
	 * @return string HtmlTagH::H4
	 */
	public static function __tagName()
	{
		return HtmlTagH::H4;
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