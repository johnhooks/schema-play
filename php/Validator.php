<?php

namespace johnhooks\SchemaPlay;

$data = json_decode(file_get_contents(PROJECT_ROOT . '/data/example.json'));

// Validate
$validator = new \JsonSchema\Validator;
$validator->validate($data, (object)['$ref' => 'file://' . PROJECT_ROOT . '/schemas/example-schema.json']);

if ($validator->isValid()) {
    echo "The supplied JSON validates against the schema.\n";
} else {
    echo "JSON does not validate. Violations:\n";
    foreach ($validator->getErrors() as $error) {
        printf("[%s] %s\n", $error['property'], $error['message']);
        var_dump($error);
    }
}
