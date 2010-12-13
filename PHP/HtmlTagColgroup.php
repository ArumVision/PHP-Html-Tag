<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type colgroup
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type colgroup
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
	 * Constructeur de la classe
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
	 *
	 * @return string colgroup
	 */
	public static function __tagName()
	{
		return 'colgroup';
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