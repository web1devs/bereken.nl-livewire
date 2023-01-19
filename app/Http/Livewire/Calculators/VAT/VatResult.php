<?php

namespace App\Http\Livewire\Calculators\VAT;

use Livewire\Component;

class VatResult extends Component
{
    public $amount;
    public $method;
    public $vat;
    public $rate;
   // protected $queryString = ['amount','method','vat','rate'];
  
    public function render()
    {
       
        return view('livewire.calculators.v-a-t.vat-result');
    }
    public function mount($method,$amount,$vat,$rate){

     
       $this->method = base64_decode($method);
       $this->amount = intval(base64_decode($amount));
       $this->vat = intval(base64_decode($vat));
       $this->rate = intval(base64_decode($rate));

      

      if($this->rate === 0 || $this->amount === 0 || $this->vat === 0 ){
        return redirect()->to('/vat-calculator');
      }
    }
   
}
