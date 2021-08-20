<?php

    class dados 
    {
        function dadosEntrada()
        {
            $this->a;
            $this->b;
            $this->c;
        }

        function infoSaida()
        {
            $this->delta;
            $this->x1;
            $this->x2;
        }
    }

   class delta
   {
       function calc_delta()
       {
           $this->ValorDelta = ($this->b * $this->b) - (4 * $this->a * $this->c);
       }
   }

   class calc_xs
   {
       function x1()
       {
           $this->x1 = (- $this->b + sqrt($this->delta)) / (2 * $this->a);
       }


       function x2()
       {
           $this->x2 = (- $this->b - sqrt($this->delta)) / (2 * $this->a);
       }

   }



?>