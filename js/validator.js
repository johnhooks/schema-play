import Ajv from "ajv";
import exampleSchema from "../schemas/example-schema.json" assert { type: 'json' };
import exampleDate from "../data/example.json" assert { type: 'json' };


/**
 * @typedef {import('ajv').JSONSchemaType<ExampleSchema>} JSONSchemaType
 * @typedef {import('../types/example-schema').ExampleSchema} ExampleSchema
 */

const ajv = new Ajv()

const validate = ajv.compile(
  /** @type {JSONSchemaType} */
  (exampleSchema)
);

const valid = validate(exampleDate);
if (!valid) console.log(validate.errors);
