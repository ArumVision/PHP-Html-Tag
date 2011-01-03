<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type meta
 * Root class to generate a meta element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type meta
 * Root class to generate a meta element
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
	 * Constructeur de la classe / Class constructor
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
	 * Method to set the attributes values of the meta tag at once
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
	 * Method returning the tag name
	 *
	 * @return string meta
	 */
	public static function __tagName()
	{
		return 'meta';
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