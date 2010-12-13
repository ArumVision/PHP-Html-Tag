<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type bdo
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type bdo
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 05/11/2010
 */
class HtmlTagBdo extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagBdo::__tagName()
	 * @return HtmlTagBdo
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagBdo::__tagName());
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string bdo
	 */
	public static function __tagName()
	{
		return 'bdo';
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