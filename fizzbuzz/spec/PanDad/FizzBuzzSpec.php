<?php

namespace spec\PanDad;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('PanDad\FizzBuzz');
    }

    function it_one_to_fizzbuzz(){
    	$this->translate(1)->shouldReturn(1);
    }

    function it_two_to_fizzbuzz(){
    	$this->translate(2)->shouldReturn(2);
    }

    function it_three_to_fizzbuzz(){
    	$this->translate(3)->shouldReturn('fizz');
    }

    function it_five_to_fizzbuzz(){
    	$this->translate(5)->shouldReturn('buzz');
    }

    function it_fifteen_to_fizzbuzz(){
    	$this->translate(15)->shouldReturn('fizzbuzz');
    }

    function it_array_five_to_fizzbuzz(){
    	$this->calculate(5)->shouldreturn([1, 2, 'fizz', 4, 'buzz']);
    }


}
