<?php
require_once __DIR__ . '/../PHPML/vendor/autoload.php';

use Phpml\NeuralNetwork\Layer;
use Phpml\NeuralNetwork\Node\Neuron;
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\ActivationFunction\PReLU;
use Phpml\NeuralNetwork\ActivationFunction\Sigmoid;


$layer1 = new Layer(2, Neuron::class, new PReLU);
$layer2 = new Layer(2, Neuron::class, new Sigmoid);
$mlp = new MLPClassifier(4, [$layer1, $layer2], ['a', 'b', 'c']);
// 4 nodes in input layer, 2 nodes in first hidden layer and 3 possible labels.

$mlp->train(
    $samples = [[1, 0, 0, 0], [0, 1, 1, 0], [1, 1, 1, 1], [0, 0, 0, 0]],
    $targets = ['a', 'a', 'b', 'c']
);

$result = $mlp->predict([[1, 0, 0, 0], [0, 1, 1, 0]]);
// return ['b', 'c'];
var_dump($result); die;