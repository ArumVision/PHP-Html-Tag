<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type h5
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type h5
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagH5 extends HtmlTagH
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagH5::__tagName()
	 * @return HtmlTagH5
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagH5::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @uses HtmlTagH::H5
	 * @return string HtmlTagH::H5
	 */
	public static function __tagName()
	{
		return HtmlTagH::H5;
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