<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type caption
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type caption
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 06/07/2010
 */
class HtmlTagCaption extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 *
	 * @uses HtmlTagCaption::__tagName()
	 * @return HtmlTagCaption
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagCaption::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string caption
	 */
	public static function __tagName()
	{
		return 'caption';
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