Billing Code Test Instructions

- create a mysql database with utf8_general_ci encoding

- import sample data

- write a php program which reads the sample data in the database and writes one json to the screen for each record in the customer_to_invoice table (reference the lines_to_invoice table to write the "line_items" portion of the JSON).

- assume the following:
-- the following JSON fields come from the sample data in the database: customer_id, description, rate
-- the following JSON fields have constant values as set in the sample JSON: item_id, name, unit, tax_id, notes, quantity
-- "item_order" field in JSON is an incremented number per json
-- other JSON fields can be blank or set as the sample JSON indicates.
-- the device_serial_number field in the lines_to_invoice table is used as a key but is not required in the JSON.

- send us the completed php code so we can run it in an XAMPP/MAMP environment and connect it to our sample data using a mysql table.
