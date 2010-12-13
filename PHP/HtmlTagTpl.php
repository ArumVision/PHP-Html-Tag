<?php
/**
 * Classe m�re de gestion de templates � l'aide de la classe HtmlTag.
 * Elle permet de charger un fichier de template HTML/XML et d'en remplacer les valeurs dynamiques
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 01/12/2010
 */
/**
 * Classe m�re de gestion de templates � l'aide de la classe HtmlTag.
 * Elle permet de charger un fichier de template HTML/XML et d'en remplacer les valeurs dynamiques
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 01/12/2010
 */
class HtmlTagTpl extends HtmlTag
{
	/**
	 * Tableau des variables du template
	 * @var array
	 */
	private $variables;
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTpl::setVariables()
	 * @uses HtmlTagTpl::getVariables()
	 * @param string nom du tag HTML
	 * @param bool indque que tout attribut HTML doit �tre consid�r� comme valide pour le template ou seulement ceux par d�faut
	 * @return HtmlTagP
	 */
	public function __construct($_tagName = '', $_allTplTags = false)
	{
		parent::__construct($_tagName);
		/**
		 * Non red�finition des variables si d�j� d�finies
		 */
		if(!is_array($this->getVariables()))
			$this->setVariables();
	}
	/**
	 * M�thode de g�n�ration du contenu HTML avec remplacement des variables par leur valeur
	 * 
	 * @uses HtmlTagTpl::getVariablesKeys()
	 * @uses HtmlTagTpl::getVariablesValues()
	 * @uses HtmlTag::displayFullHtml()
	 * @uses HtmlTag::loadHtml()
	 * @uses HtmlTag::loadDomDocument()
	 * @uses HtmlTag::toHtml()
	 * @return string|null
	 */
	public function fetch($_fileName = '')
	{
		if((!empty($_fileName) && is_file($_fileName)) || empty($_fileName))
		{
			$content = !empty($_fileName)?file_get_contents($_fileName):HtmlTag::displayFullHtml(false);
			$s = microtime(true);
			if(trim($content) != '')
			{
				/**
				 * R�cup�ration des valeurs
				 */
				$keys = $this->getVariablesKeys();
				$values = $this->getVariablesValues();
				/**
				 * Gestion du cas particulier d'un objet du fait de la non reconnaissance des tags
				 * si un contenu HTML est ajout� tel quel
				 */
				foreach($values as $key=>$value)
				{
					if($value instanceof HtmlTag)
						$values[$key] = "\r\n" . $value->toHtml(false) . "\r\n";
				}
				/**
				 * Mise � jour du contenu
				 */
				$content = str_ireplace($keys,$values,$content);
				/**
				 * Chargement du contenu dans l'objet en cours
				 */
				if(!empty($_fileName))
					$this->loadHtml($content);
				else
					HtmlTag::loadDomDocument($content,true);
			}
			return $this->toHtml() . "\r\n" . '<!-- Fetch Time : ' . round(microtime(true) - $s,5) . ' sec. -->';
		}
		else
			return null;
	}
	/**
	 * @return array
	 */
	public function getVariables()
	{
		return $this->variables;
	}
	/**
	 * Retourne toutes les clefs
	 * 
	 * @uses HtmlTagTpl::getVariables()
	 * @return array
	 */
	public function getVariablesKeys()
	{
		return array_keys($this->getVariables());
	}
	/**
	 * Retourne toutes les valeurs
	 * 
	 * @uses HtmlTagTpl::getVariables()
	 * @return array
	 */
	public function getVariablesValues()
	{
		return array_values($this->getVariables());
	}
	/**
	 * @param array
	 * @return array
	 */
	public function setVariables(array $_variables = array())
	{
		return ($this->variables = $_variables);
	}
	/**
	 * M�thode permettant de supprimer toutes les variables d�j� d�finies
	 * 
	 * @uses HtmlTagTpl::setVariables()
	 * @param array
	 * @return array
	 */
	public function emptyVariables()
	{
		return $this->setVariables();
	}
	/**
	 * M�thode permettant de d�finir la valeur d'une variable
	 * L'ajout des sauts de ligne \r\n permet lors d'ajout de contenu d'un autre template dans un nouveau template d'�tre consid�r�
	 * comme un contenu � part enti�re contenant �galement des balises
	 * 
	 * @param string nom de la variable
	 * @param mixed valeur de la variable
	 * @param bool indique qu'il faut ou non ajouter les accolades {} en d�but et fin de nom de variable
	 * @return mixed
	 */
	public function setVariable($_name, $_value, $_addBrackets = true)
	{
		return ($this->variables[($_addBrackets?'{':'') . $_name . ($_addBrackets?'}':'')] = $_value);
	}
	/**
	 * M�thode permettant d'ajouter un ensemble de clef associ�es � leur valeur
	 * 
	 * @uses HtmlTagTpl::setVariable()
	 * @param array name=>valuemixed valeur de la variable
	 * @param bool indique qu'il faut ou non ajouter les accolades {} en d�but et fin de nom de variable
	 * @return bool true
	 */
	public function setVariablesArray(array $_variables, $_addBrackets = true)
	{
		foreach($_variables as $name=>$value)
			$this->setVariable($name,$value,$_addBrackets);
		return true;
	}
	/**
	 * M�thode permettant de r�cup�rer la valeur d'une variable
	 * 
	 * @uses HtmlTagTpl::hasVariable()
	 * @param string nom de la variable
	 * @return mixed|null
	 */
	public function getVariable($_name)
	{
		return $this->hasVariable($_name)?$this->variables[$_name]:null;
	}
	/**
	 * M�thode permettant de tester l'existence d'une variable
	 * 
	 * @uses HtmlTagTpl::getVariables()
	 * @param string nom de la variable
	 * @return mixed|null
	 */
	public function hasVariable($_name)
	{
		return array_key_exists($_name,$this->getVariables());
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