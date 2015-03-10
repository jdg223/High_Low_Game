<?php  

if($argc == 3){

$randomNumber = rand($argv[1],$argv[2]);

$userInput;

	fwrite(STDOUT, 'Please Guess A Number between '.$argv[1].' and '.$argv[2].PHP_EOL);


do{
 	$userInput = fgets(STDIN);
if($userInput > $randomNumber){
	echo "To High...Guess Again ".PHP_EOL;

}elseif($userInput < $randomNumber){
	echo 'To Low...Guess Again '.PHP_EOL;
}else{
	echo "Congrats You Have Guessed The Correct Number Of $randomNumber\n";
	}
}while($userInput != $randomNumber);

}



?>