<?php
    interface IMetodoPago{
        function pagar();
    }

    class PasarelaPago{
        protected $metodoPago;
    
        function __contrust(IMetodoPago $metodoPagoParam)
        {
            $this->metodoPago = $metodoPagoParam;
        }

        function pagarOrden(IMetodoPago $metodoPago){
            $metodoPago->pagar();
        }
    }

    class Stripe implements IMetodoPago{
        function pagar(){}
    }

    class Paypal implements IMetodoPago{
        function pagar(){}
    }