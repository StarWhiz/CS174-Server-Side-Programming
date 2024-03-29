<?php
/**
 * Created by PhpStorm.
 * User: Tai Dao
 * Date: 2/13/2019
 * Time: 11:49 AM
 *
 * Description: This program tests a function printPrime and primeChecker which lists all prime numbers up to a variable n.
 */

    tester_function();

    /**
     * This function takes an integer input $n and returns true if $n is prime and returns false if $n is not prime.
     *
     * It uses the fact that one of the divisors must be smaller than or equal to squareroot of $n to reduce time complexity.
     *
     * Source: https://www.geeksforgeeks.org/print-all-prime-numbers-less-than-or-equal-to-n/
     *
     * @param $n
     * @return bool
     */
    function primeChecker($n) {

        // Anything less than 1 is not a prime number
        if ($n < 1)
            return false;

        // 2 and 3 are prime numbers. This is hard coded because the smallest prime number, 2, squared is 4. 3 is less than 4 so it's also hard coded.
        if ($n <= 3)
            return true;

        // Here we check divisors 2 and 3. If n can be divided by 2 or 3 it is not prime. The fact that this is here
        // means we don't have to check the divisor 6 because 2*3 make up the divisor 6.
        if ($n % 2 == 0 || $n % 3 == 0)
            return false;

        // Here we check other divisors besides 2 and 3, starting with 5. These divisors checked are less than square root of $n
        // There's a reason why $i is incremented by 6. That's because we already check divisors 2 and 3. And 2*3 = 6!
        for ($i = 5; $i * $i <= $n; $i = $i + 6) {
            if ($n % $i == 0 || $n % ($i + 2) == 0) {
                return false;
            }
        }

        // If number can't be divided by divisors above it is prime.
        return true;
    }

    /**
     * This function returns a string of prime numbers up to n.
     *
     * @param $n
     * @return string
     */
    function prime_function($n)
    {
        $primeOutputString = "";
        for ($i = 2; $i <= $n; $i++) {
            if (primeChecker($i)) {
                $primeOutputString = $primeOutputString . $i . ' ';
            }
        }
        return $primeOutputString;
    }


    /**
     * This function is used to test prime_function
     */
    function tester_function() {
        $test1 = 10;
        $test2 = 0;
        $test3 = 100;
        $expectedOutput1 = '2 3 5 7 ';
        $expectedOutput2 = '';
        $expectedOutput3 = '2 3 5 7 11 13 17 19 23 29 31 37 41 43 47 53 59 61 67 71 73 79 83 89 97 ';


        echo 'Test Case 1:<br>';
        echo 'Expected output for prime_function(10): ' . $expectedOutput1;
        echo '<br>';
        echo "Actual output for prime_function($test1): " . prime_function($test1);
        if (prime_function($test1) == $expectedOutput1) {
            echo '<br><br>Status: PASSED';
        }
        else {
            echo '<br><br>Status: FAILED';
        }


        echo '<br><br><br><br>';


        echo 'Test Case 2:<br>';
        echo 'Expected output for prime_function(0): <br>' . $expectedOutput2;
        echo "Actual output for prime_function($test2): " . prime_function($test2);
        if (prime_function($test2) == $expectedOutput2) {
            echo '<br><br>Status: PASSED';
        }
        else {
            echo '<br><br>Status: FAILED';
        }


        echo '<br><br><br><br>';


        echo 'Test Case 3:<br>';
        echo 'Expected output for prime_function(100): ' . $expectedOutput3;
        echo '<br>';
        echo "Actual output for prime_function($test3): " . prime_function($test3);
        if (prime_function($test3) == $expectedOutput3) {
            echo '<br><br>Status: PASSED';
        }
        else {
            echo '<br><br>Status: FAILED';
        }
    }