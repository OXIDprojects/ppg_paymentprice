<?php

class ppg_paymentprice extends ppg_paymentprice_parent {
    public function calculate( $oBasket )
    {
        //getting basket price with applied discounts and vouchers
        $dPrice = $this->getPaymentValue( $this->getBaseBasketPriceForPaymentCostCalc( $oBasket ) );

        // calculating total price
        $oPrice = oxNew( 'oxPrice' );
        if ( !$this->_blPaymentVatOnTop ) {
            $oPrice->setBruttoPriceMode();
        } else {
            $oPrice->setNettoPriceMode();
        }
        
        $oPrice->setPrice( $dPrice );
        $oPrice->setVat( $oBasket->getAdditionalServicesVatPercent() );

        $this->_oPrice = $oPrice;
        
    }
}

?>