# distance
This repository contains implementations of various distance calculation methods, such as Euclidean, Manhattan, Minkowski, Cosine Similarity, and more, in multiple programming languages. The goal of this repository is to provide a reference and comparison of implementations across different languages for calculating distances between two points or vectors.
# Installation
# PHP
1. Copy the class file into the project folder.
2. Include the file using the require or require_once function in PHP. require_once 'PHPdistance.php';
3. Initialize the class in a variable.
    $distance= new DistanceMeasurement();
4. To calculate the Euclidean distance for a one-dimensional vector, call the following function:
    $result=$distance->eucledianDistance($arrayA,$arrayB);
   
