<div class="pa paginador">
  <ul>
    <li class="page-item"><a class="l1 page-link" href="?pagin=<?php echo  $por_pagina - 1 ?>">
        << <h>after </h>  </a> </li> 
        <?php
                      for ($i = 1; $i <= $total_paginas; $i++) {
                        if ($i == $por_pagina) {
                          echo '<li class="page-item page-link selector ">' . $i . '</li>';
                        } else {
                          echo '<li><a class="page-item page-link " href="?pagin=' . $i . '">' . $i . '</a></li>';
                        }
                      }
        ?>
         <li class="page-item"><a class="l1 page-link  " href=" ?pagin=<?php echo  $por_pagina + 1 ?>"><h>next</h>   >></a></li>
  </ul>
</div>

<style>
  .pa{
    background-color:silver;
    /* padding:10px; */
    padding-top:9%;
    text-align: center;
  }
  ul{
    background-color:green;
    text-align: center;
    border-radius:20px;
    padding:10px;
   
  }

  .l1{
    background-color:silver;
  }
  .l1:hover{
    border-radius:20px;
  }
 
  h{
    color:black;
    text-align: center;
  }
</style>