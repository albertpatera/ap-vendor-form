<?php
namespace Project\Classes;
/**
* Creting input type: TEXT, PASSWORD, EMAIL, SUBMIT
* @Method: addText();
*         addPassword();
          addSubmit();
 	       addEmail();
 	       addGroup()
 * @package Project\Classes

* @param name, Label
*/
class Forms 
{
	
	private  $type;
	private static $label;
	private  $name;
	private  $class;
	private  $value;
	private  $legend;

	
	public function __construct($label = null, $class = null, $name = null,
                                $type = 'text', $legend = null, $value = 'register')
    {
		$this->label = $label;
		$this->class = $class;
		$this->name = $name;
		$this->type = $type;
		$this->legend = $legend;
		$this->value = $value;
	}





	public function initHTML()
	{
		$html = new getHTML('p', 'paragraph');


	}
    public function generateForm() {
	    $form = new Forms;
	    $form->addLabel('username:')
            ->addText('email', "btn btn-success", "email", "Uzivatelske jmeno")
            ->addLabel('Heslo:')
            ->addPassword("password", "btn-btn success", "submit", 'password')
            ->addLabel('Heslo znovu')
            ->addPassword('password', 'btn btn-danget', 'Heslo znovu', 'password again')
            ->addLabel('Vase jmeno')
            ->addEmail('email', 'form-group', 'email', 'E-mail address')
            ->addLabel('Zasilat novinky e-mailem ? ')
            ->addLabel('Zasilat novinky e-mailem ? ')
            ->addChecbox('chckbox', 'newsletter', 'Add m to newsletter database')
            ->addSubmit("submit", "share &amp; register");


	}

	public function addLabel($label) {
		echo "<label class='label'>" . $label  . "</label>";
		return $this;
	}

	public function addText($type = null, $class = null, $name = null, $label = null) {
		Forms::addLabel($label);
		echo  "<input type='text' class='  . $this->class  . '>";
		var_dump('test');
		return $this;
	}

	public function addPassword($type = null, $class = 'jjj', $name = null, $label = null) {
		self::addLabel($label);
		echo  "<input type='password' class='" . $this->class . "'>";
		var_dump('test');
		return $this;
	}

	public function addEmail($type = null, $class = null, $name = null, $label = null) {
		self::addLabel($label);
		echo  "<input type='" . 'email' . "' placeholder='" . $this->value . "' class='" . $this->class . "'>";
		var_dump('test');
		return $this;
	}

	public function addSubmit($type, $value)
	{
		if(empty($value)) {
		   $value = 'undefined';
        }
	    echo "<input type=" . 'submit' ." value='" . $this->value . "'>";
		return $this;
	}

	public function addChecbox($type, $name, $label) {
	    echo "<input type='checkbox' name='  . $this->name  . '>";
	    return $this;
    }

	public function addGroup($class, $legend) 
	{
		$html = new getHTML('p', 'paragraph');
		$html->getStart('p');
		echo "<fieldset>";
			echo "<legend>" . $this->legend . "</legend>";	
			Forms::addText($this->type, $this->class, $this->name, $this->label);
			Forms::addPassword($this->type, $this->class, $this->name, $this->label);
			Forms::addEmail($this->type, $this->class, $this->name, $this->label);
			Forms::addSubmit($this->type, $this->class, $this->name, $this->label);
		echo "</fieldset>";
		$html->getEnd('p');
	}
		
}