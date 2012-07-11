<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type a
 * Root class to generate an anchor element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type a
 * Root class to generate an anchor element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
class HtmlTagA extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagA::__tagName()
	 * @return HtmlTagA
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagA::__tagName());
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'href' de l'�l�ment HtmlTag
	 * Method to set href attribute value
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de href
	 * @return bool true|false
	 */
	public function setHref($_href)
	{
		return $this->addAttribute('href',$_href,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'href' de l'�l�ment HtmlTag
	 * Method to get href attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getHref()
	{
		return $this->getAttribute('href');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'href' de l'�l�ment HtmlTag
	 * Method to unset href attribute value
	 *
	 * @uses HtmlTag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetHref()
	{
		return $this->removeAttribute('href');
	}
	/**
	 * L'id et le name doivent avoir la m�me valeur
	 * Id and Name attribute must have the same value
	 * 
	 * @param string
	 * @param bool d�finir l'attribut name
	 * @return bool true|false
	 */
	public function setId($_id, $_defineName = true)
	{
		$setId = parent::setId($_id);
		if($setId && $_defineName)
			$this->setName($this->getId(),false);
		return $setId;
	}
	/**
	 * L'id et le name doivent avoir la m�me valeur
	 * Id and Name attribute must have the same value
	 * 
	 * @uses HtmlTagA::setId()
	 * @uses HtmlTag::setName()
	 * @param string
	 * @param bool d�finir l'attribut id
	 * @return bool true|false
	 */
	public function setName($_name, $_defineId = true)
	{
		$setName = parent::setName($_name);
		if($setName && $_defineId)
			$this->setId($this->getName(),false);
		return $setName;
	}
	/**
	 * M�thode permettant de d�finir que le lien doit s'ouvrir dans une autre fen�tre
	 * Specific method to force link to open in a new window
	 * 
	 * @uses HtmlTag::addAttribute()
	 * @uses HtmlTag::getAttribute()
	 * @param string nom de la fen�tre
	 * @return bool true|false
	 */
	public function blank($_windowName = null)
	{
		$onclick = $this->getAttribute('onclick');
		return $this->addAttribute('onclick',$onclick . (substr($onclick,-1) == ';'?'':';') . 'return !window.open(this.href,\'' . (preg_replace('/(\s+)/','_',!empty($_windowName)?$_windowName:uniqid('link_to_window_'))) . '\');');
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string a
	 */
	public static function __tagName()
	{
		return 'a';
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