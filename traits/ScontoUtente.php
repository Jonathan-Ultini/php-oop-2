<?php
trait ScontoUtente
{
  // Metodo per calcolare lo sconto del 20%
  public function calcolaSconto($prezzo)
  {
    return $prezzo - ($prezzo * 0.20);
  }
}
