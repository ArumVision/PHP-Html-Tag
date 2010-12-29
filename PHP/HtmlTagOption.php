<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des options d'un select HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des options d'un select HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagOption extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagOption::__tagName()
	 * @uses HtmlTag::setValue()
	 * @return HtmlTagOption
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagOption::__tagName());
	}
	/**
	 * M�thode permettant d'indiquer que l'option est s�l�ctionn�e
	 *
	 * @uses HtmlTag::addAttribute
	 * @uses HtmlTagOption::unsetSelected
	 * @param bool selected
	 * @return bool true|false
	 */
	public function setSelected($_selected = true)
	{
		return $_selected?$this->addAttribute('selected','selected',true):$this->unsetSelected();
	}
	/**
	 * M�thode permettant de d'indiquer que l'option n'est plus s�lectionn�e
	 * 
	 * @uses Htmltag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetSelected()
	{
		return $this->unsetAttribute('selected');
	}
	/**
	 * Surcharge de la m�thode afin de forcer al d�finition dl'attribut value et non pas la valeur innerHTML
	 * si c'est l'attribut value qui est pass� en param�tre
	 * @see HtmlTag::addAttribute()
	 * 
	 * @param string valeur de l'attribut HtmlTag
	 * @param mixed|HtmlTag valeur de l'�l�ment HtmlTag
	 * @param bool appel depuis une m�thode de HtmlTag pour d�finir un attribut sp�cifique
	 * @return bool true|false selon la validit� de l'attribut
	 */
	public function addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall = false)
	{
		return parent::addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall || ($_attributeName == 'value'));
	}
	/**
	 * Surcharge de la m�thode afin de forcer al d�finition dl'attribut value et non pas la valeur innerHTML
	 * si c'est l'attribut value qui est pass� en param�tre
	 * @see HtmlTag::addAttributes()
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param array les attributs de l'�l�ment HTML
	 * @return bool true|false selon la validit� de l'attribut
	 */
	public function addAttributes(array $_attributes)
	{
		$return = true;
		if(count($_attributes) > 0)
		{
			while(list($attrName,$attrValue) = each($_attributes))
			{
				if(is_scalar($attrName))
				{
					$setAttr = 'set' . ucfirst($attrName);
					/**
					 * M�thode set{Attribute} d�finie ? => on l'utilise si la valeur est bien une chaine de caract�res,
					 * sinon on passe par la m�thode g�n�rique addAttribute()
					 */
					if(method_exists($this,$setAttr) && $setAttr != 'setValue')
						$return &= $this->$setAttr($attrValue)?true:false;
					/**
					 * Sinon m�thode g�n�rique d'ajout d'attribut � l'�l�ment
					 */
					else
						$return &= $this->addAttribute($attrName,$attrValue)?true:false;
				}
				else
					$return &= false;
			}
		}
		return $return;
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string option
	 */
	public static function __tagName()
	{
		return 'option';
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