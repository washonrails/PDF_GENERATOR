<?php
   //Inclui a classe 'class.ezpdf.php'
   require "Cezpdf.php";

   //Instancia um novo documento com o nome de pdf
   $pdf = new Cezpdf();

   //Seleciona a fonte que será usada. As fontes estão localizadas na pasta "pdf-php/fonts".
   // Use a de sua preferencia.
   $pdf -> selectFont('./fonts/Helvetica.afm');

   //Chama o método "ezText".
   //No 1° parametro passa o texto do documento
   //No 2° parametro define o tamanho da fonte.
   //No 3° parametro é do tipo array. A seguir uma explicação desse 3° parametro:

   // justification => seta a posição de um label, pode ser center, right, left, aright, ou aleft
   // leading = > define o tamanho que cada linha usará para se mostrada, deverá  ser um int
   // spacing => define o espaçamento entrelinhas, deverá ser um float
   // você pode usar apenas leading ou apenas spacing, nunca os dois

   $pdf -> ezText('PDF EM PHP', 20, array('center', 2.0));
$pdf -> ezText(
    'Made by Wash', 15,
    array('left', 3.0)
);
$pdf -> ezText(
    'Follow me on github https://github.com/washonrails', 10,
    array('right', 1.0)
);

   //Gera o PDF
   $pdf -> ezStream();
?>
