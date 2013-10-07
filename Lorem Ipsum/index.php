<?php
      // put your code here
include 'LoremIpsum.class.php';
      
 $LoremIpsum = new LoremIpsumGenerator;

/* $LoremIpsum->getContent($count = 100, $type = 'txt', $loremipsum = true)
* count is how many words or paragraphs you want returning
* type is weather you want paragraphs or words returning accepts 'txt' or 'para'
* loremipsum is wether you wish the texzt to start with “lorem ipsum”
*/ 
 
// all below will return what the user means.
 echo  $LoremIpsum->getContent(5, 'para' , true);
 // echo  $LoremIpsum->getContent(5,'paragraph',true);
 // echo  $LoremIpsum->getContent(5,'paragraphs',false);
 // echo  $LoremIpsum->getContent(500,'txt',true);
 //  // echo  $LoremIpsum->getContent(500,'text',true);
 // echo  $LoremIpsum->getContent(500,'word',true);
  // echo  $LoremIpsum->getContent(500,'words');
 //  echo  $LoremIpsum->getContent();
 
  // error checking:
  //echo $LoremIpsum->getContent(-500,'gibbish',true);
 // echo $LoremIpsum->getContent(-500,'paragraph',true);
  
?>
