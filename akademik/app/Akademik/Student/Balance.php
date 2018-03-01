<?php

namespace App\Akademik\Student;

trait Balance {
	
	public function balance()
	{
		$payments_done = $this->payments()->sum( 'value' );
		$from = new \DateTime( $this->from );
		$to = $this->date_to_the_balance_is();
		$balance = $this->calculate_balance( $to, $from, $payments_done );
		
		return $balance;
	}
	
	protected function date_to_the_balance_is()
	{
		$to = new \DateTime();
		if( $this->updated_at )
		{
			$to = new \DateTime( $this->updated_at );
		}
		
		return $to;
	}
	
	protected function calculate_balance( $to, $from, $payments_done )
	{
		$needed_to_pay = ( $to->diff( $from )->m + $to->diff( $from )->y * 12 ) + 1;
		$needed_to_pay = $needed_to_pay * $this->room->price;
		$balance = $payments_done - $needed_to_pay;
		
		return $balance;
	}
	
}