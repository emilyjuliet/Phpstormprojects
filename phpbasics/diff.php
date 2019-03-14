
<?php
{

    print("Hello Foodie!</br>");
    print("Welcome to the Porkpit Ruaka</br></br>");


}
?>


<?php
   class restaurant
   {
   function displayMessage ()
     {
   print("Porkpit Ruaka</br>");
     }
   }

  $message= new restaurant();
   $message -> displayMessage();

   class location
   {
   function displayMessage()
     {
   print("Ruaka opp QuickMart</br>");
     }
   }

   $message= new location();
   $message -> displayMessage();

   class workinghours
   {
   function displayMessage()
     {
   print("7am-10pm</br>");
     }
   }

   $message= new workinghours();
   $message -> displayMessage();


   class offers
   {
   function displayMessage()
     {
   print("Buy two burgers for the price of one every Wednesday!</br>");
     }
   }

   $message= new offers();
   $message -> displayMessage();


   ?>

