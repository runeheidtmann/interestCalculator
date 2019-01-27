<?php
    include('Calculator.php');
   
    $interest = $_GET['interest'];
    $principal = $_GET['principal'];
    $years = $_GET['years'];
    $add = $_GET['add'];

    $calc = new Calculator;
    $resultArray = $calc->interestPerAnno($principal,$interest,$years,$add);


echo '<div class="inner cover bgcolor p-3 text-md-center">
    <table class="table table-striped">
        <thead>
    <tr>
      <th scope="col"># år</th>
      <th scope="col">rente</th>
      <th scope="col">opsparing</th>
      
    </tr>
  </thead>
  <tbody>';
   
    foreach($resultArray as $year){
        echo '<tr>
        <th scope="row">'.$year['year'].'</th>
        <td>'.$year['interest'].'</td>
        <td>'.$year['total'].'</td>
        
      </tr>';
    }

   echo '</tbody></table></div>';

?>