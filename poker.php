<?php
class playing_cards {

    public function generate_card(){
        $card_arr = array();
      
        /* Type of Cards */
        $card_type = array('0' => 'S', '1' => 'H', '2' => 'D', '3' => 'C');
      
        /* Name of Cards */
        $card_value = array('1' => 'A', '10' => 'X', '11' => 'J', '12' => 'Q', '13' => 'K');
      
        /* Generate 52 cards */
        for($i = 0; $i < 52; $i ++){
            $type = $card_type[$i / 13]; // Type of Card
            $value = $i % 13; // Name of Card
          
            switch($value){
                case 1:
                    $value = $card_value[$value];
                    break;
                case 10:
                    $value = $card_value[$value];
                    break;
                case 11:
                    $value = $card_value[$value];
                    break;
                case 12:
                    $value = $card_value[$value];
                    break;
                case 13:
                    $value = $card_value[$value];
                    break;
                default:
                    $value = $value + 1 ;
                    break;
            }
            $card_arr[$i] = $type.'-'.$value;
        }
        return $card_arr;
    }
    
}


