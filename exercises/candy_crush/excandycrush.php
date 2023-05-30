<?php 


  
    class CandyCrush
    {
        private array $times; 
        private int $position; 
    
        public function howLong(array $times, int $position) {

           $this->times = $times;
           $this->position = $position;

            $n = count($this->times);

           
        
            if ($n < 1 || $n > 100) {
                throw new InvalidArgumentException("times must have between 1 and 100 elements");
            }
        
            foreach ($this->times as $t) {
                if ($t < 1 || $t > 1000) {
                    throw new InvalidArgumentException("each element of times must be between 1 and 1000");
                }
            }
        
            $max_time = $this->times[$this->position];
            for ($i = $this->position-1; $i >= 0; $i--) {
                if ($this->times[$i] > $max_time) {
                    $max_time = $this->times[$i];
                } else {
                    break;
                }
            }
        
            for ($i = $this->position+1; $i < $n; $i++) {
                if ($this->times[$i] > $max_time) {
                    $max_time = $this->times[$i];
                } else {
                    break;
                }
            }
            return $max_time;
        }     
}

$candy = new CandyCrush();
echo "<h2>Candy Crush</h2>";
try {
echo "Test Case 1:" . $candy->howLong([1, 2, 3, 4], 0) . "<br>";
echo "Test Case 2:" . $candy->howLong([1, 2, 10, 4], 0) . "<br>"; 
echo "Test Case 3:" . $candy->howLong([10, 1, 3, 4, 7], 2) . "<br>"; 
echo "Test Case 4:" . $candy->howLong([10, 2, 3, 4, 7], 0) . "<br>"; 
echo "Test Case 5:" . $candy->howLong([3,3,1,3,4,4,1,3], 7) . "<br>";
echo "Test Case 6:" . $candy->howLong([1,2,4,3,4,3,1,3,3,4], 1) . "<br>";
echo "Test Case 7:" . $candy->howLong([2,1,4,4,1,1,1,1,2,1], 6) . "<br>";
echo "Test Case 8:" . $candy->howLong([950,501,913,2,636,287,753,5,126,1,305,2,712,3,1,5,4,26,715,532,2,4,98,3,296,4,184,1,154,541,2,4,2,141,577,376,67,3,424,360,521,5,4,5,4,886,3,5,5,334], 28) . "<br>"; //541
echo "Test Case 9:" . $candy->howLong([2,4,2,4,803,1,996,855,682,3,2,5,1,6,225,3,4,5,49,189,3,328,5,494,863,390,2,1,810,4,819,5,4,645,691,5,279,82,202,368,546,1,1,2,488,4,163,2,487,486], 12) . "<br>"; 
echo "Test Case 10:" .$candy->howLong([288,1,256,327,723,432,674,196,218,90,6,563,643,431,351,948,546,282,705,805,864,229,99,499,865,986,218,961,434,12,338,255,91,797,406,519,242,329,578,220,912,866,702,412,456,430,702,688,397,222,792,153,155,784,957,413,401,167,76,586,429,306,124,498,136,258,152,752,660,136,160,378,771,358,861,296,658,988,173,740,350,879,32,362,597,125,345,2,193,420,417,51,808,195,169,50,703,505,327,579], 0) . "<br>"; 
    } catch(Exception $ex){
        echo $ex->getMessage();
        file_put_contents("exception.txt", $ex);
    }
?>

