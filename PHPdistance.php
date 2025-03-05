<?php

class DistanceMeasurement {

    //function for eucledian distance with vector 1 dimension.
    public function eucledianDistance($vectorA, $vectorB) {

        //check length vector first:
        if(sizeof($vectorA)==sizeof($vectorB)){

            $sigma=0;
            for($i=0; $i<sizeof($vectorA); $i++){
                $sigma+=($vectorA[$i]-$vectorB[$i])*($vectorA[$i]-$vectorB[$i]);
            }
                $result=sqrt($sigma);

            return $result;
        }else{
            return "The length of Array is different";
        }

    }
}


?>