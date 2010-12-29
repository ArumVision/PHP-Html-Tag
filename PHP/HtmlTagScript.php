<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type script
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 29/06/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type script
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 29/06/2010
 */
class HtmlTagScript extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagScript::__tagName()
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::setType()
	 * @uses HtmlTagScript::setCharset()
	 * @return HtmlTagScript
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagScript::__tagName());
		$this->setType('text/javascript');
		$this->setCharset('ISO-8859-1');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'src' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de src
	 * @return bool true|false
	 */
	public function setSrc($_src)
	{
		return $this->addAttribute('src',trim($_src),true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'src' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getSrc()
	{
		return $this->getAttribute('src');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'src' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetSrc()
	{
		return $this->unsetAttribute('src');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'charset' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de charset
	 * @return bool true|false
	 */
	public function setCharset($_charset)
	{
		return $this->addAttribute('charset',trim($_charset),true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'charset' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getCharset()
	{
		return $this->getAttribute('charset');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'charset' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetCharset()
	{
		return $this->unsetAttribute('charset');
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string script
	 */
	public static function __tagName()
	{
		return 'script';
	}
	/**
	 * Surcharge de la m�thode car le code JS ne doit pas �tre encod� en entit�s HTML
	 * @see HtmlTag::_setValue()
	 * 
	 * @return bool true|false
	 */
	public function _setValue($_value)
	{
		return parent::_setValue(html_entity_decode($_value,ENT_QUOTES),false);
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