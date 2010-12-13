<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type meta
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type meta
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
class HtmlTagMeta extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagMeta::__tagName()
	 * @return HtmlTagMeta
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagMeta::__tagName());
	}
	/**
	 * M�thode permettant de d�finir les valeurs principales de la meta
	 *
	 * @uses HtmlTag::addAttribute()
	 * @uses HtmlTag::setValue()
	 * @param string le type de la meta
	 * @param string le nom de la meta
	 * @param string la valeur de la meta
	 * @return bool true|false
	 */
	public function define($_type,$_typeValue,$_content)
	{
		$add = $this->addAttribute($_type,$_typeValue);
		$add &= $this->setValue($_content);
		return $add;
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string meta
	 */
	public static function __tagName()
	{
		return 'meta';
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