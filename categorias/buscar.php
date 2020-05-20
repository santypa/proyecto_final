<?php

$nompr = $mostrar['nom_pro'];

            $log = strlen($buscando);
            $st = $log;
            $sr = $log + 1;
            for ($b = 0; $b <= $log; $b++) {
              $te[$b] = substr($buscando, $st - $log, $sr - $log);
              $st++;
            }

            $lgp = strlen($nompr);
            $sp = $lgp;
            $sp1 = $lgp + 1;
            for ($b = 0; $b <= $lgp; $b++) {
              $ta[$b] = substr($nompr, $sp - $lgp, $sp1 - $lgp);
              $sp++;
            }
            $ver = 0;

            $te1 = strtoupper($te[0]);
            $te2 = strtolower($te[0]);

            

            if ($ta[0] == $te[0] || $ta[0] == $te1 ||$ta[0] == $te2  ) {
              include('categorias/mostar.php');
            }
            /*  echo $ta[0];
            echo $te[0]; */
                             ?>