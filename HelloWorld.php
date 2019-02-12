<?php # Script - HelloWorld.php App
/* This page defines the HelloWorld class

*The class says Hello in different Languages

*/
class HelloWorld{
	//This method prints a greeting
	//It takes one argument: which is the language to use
	//Default Language is English

	public function sayHello($language = 'English')
	{
		//Put the greetings within P tags:
		echo "<p>";
		//Prints a message specific to a language
		switch ($language) {
			case 'Dutch':
				echo "Hallo Wereld!";
				break;
			case 'French':
				echo "Salute, monde!";
				break;
			case 'German':
				echo "Hallo, Welt!";
				break;
			case 'Italian':
				echo "Ciao, mundo!";
				break;
			case 'Spanish':
				echo "Hola, mundo!";
				break;
			case 'English':
			default:
				echo "Hello, world!";
				break;
		} // End of switch

		echo "</p>"; // Close the HTML P tag
	} // End of sayHello() method
} //End of HelloWorld class