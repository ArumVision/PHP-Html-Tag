<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type textarea
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type textarea
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
class HtmlTagTextarea extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::setRows()
	 * @uses HtmlTag::setCols()
	 * @uses HtmlTagTextarea::__tagName()
	 * @return HtmlTagTextarea
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTextarea::__tagName());
		$this->setRows(5);
		$this->setCols(10);
	}
	/**
	 * M�thode permettant de d�finir l'attribut rows
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param int
	 */
	public function setRows($_rows)
	{
		return $this->addAttribute('rows',$_rows,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut rows
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return int
	 */
	public function getRows()
	{
		return $this->getAttribute('rows');
	}
	/**
	 * M�thode permettant de supprimer l'attribut rows
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return bool true|false
	 */
	public function unsetRows()
	{
		return $this->unsetAttribute('rows');
	}
	/**
	 * M�thode permettant de d�finir l'attribut cols
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param int
	 */
	public function setCols($_cols)
	{
		return $this->addAttribute('cols',$_cols,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut cols
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return int
	 */
	public function getCols()
	{
		return $this->getAttribute('cols');
	}
	/**
	 * M�thode permettant de supprimer l'attribut cols
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return bool true|false
	 */
	public function unsetCols()
	{
		return $this->unsetAttribute('cols');
	}
	/**
	 * Gestion des particuliers d'attributs
	 * @see HtmlTag::addAttribute()
	 *
	 * @param string nom de l'attribut
	 * @param scalar valeur de l'attribut
	 * @param bool appel depuis une m�thode de HtmlTag pour d�finir un attribut sp�cifique
	 * @return bool true|false
	 */
	public function addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall = false)
	{
		switch($_attributeName)
		{
			case 'cols':
			case 'rows':
				return parent::addAttribute($_attributeName,intval($_attributeValue),$_specificAttributeMethodCall);
				break;
			default:
				return parent::addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall);
				break;
		}
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string textarea
	 */
	public static function __tagName()
	{
		return 'textarea';
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