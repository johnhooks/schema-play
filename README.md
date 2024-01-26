# Shared JSON Schema

Concept use JSON Schema to share validation logic between PHP and JS, also for generated TypeScript definitions.

Stating with handwritten schema files and using them to generate TypeScript types is the workflow I am experimenting with.

## Possible libraries

- [ajv](https://ajv.js.org/guide/getting-started.html)
- [justinrainbow/json-schema](https://github.com/justinrainbow/json-schema)
- [json-schema-to-typescript](https://github.com/bcherny/json-schema-to-typescript)

## Run examples

1. Install dependencies

2. Build the TypeScript types from the JSON Schema files.

   ```sh
   npm run build
   ```

3. Run the examples

   For the PHP example:

   ```sh
   php main.php
   ```

   For the JavaScript example:

   ```sh
   node js/validator.php
   ```
