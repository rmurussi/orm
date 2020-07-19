# Kohana - ORM module *Postgres*

| ver   | Stable                                                                                                                     | Develop                                                                                                                      |
|-------|----------------------------------------------------------------------------------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------|
| 3.3.x | [![Build Status - 3.3/master](https://travis-ci.org/kohana/orm.svg?branch=3.3%2Fmaster)](https://travis-ci.org/kohana/orm) | [![Build Status - 3.3/develop](https://travis-ci.org/kohana/orm.svg?branch=3.3%2Fdevelop)](https://travis-ci.org/kohana/orm) |
| 3.4.x | [![Build Status - 3.4/master](https://travis-ci.org/kohana/orm.svg?branch=3.4%2Fmaster)](https://travis-ci.org/kohana/orm) | [![Build Status - 3.4/develop](https://travis-ci.org/kohana/orm.svg?branch=3.4%2Fdevelop)](https://travis-ci.org/kohana/orm) |

------------------------------------------------------------------
Hey hey :)
You'r in right place!
## After start ##
I had a little problem when i start with parent module, so.. welcome to fork.
At my app doing first `select`, ORM create alias at same name of table. It's not a problem, but can't do at this way.
The solution is to put `schema.table_name` instead of `table_name`.

## php 7.4

###############
## Let's GO! ##
###############

#1. Start including this modules on your app like:
`$. git submodule add https://github.com/rmurussi/orm modules/orm`

#2. set bootstrap to load this module:
	`Kohana::modules(array(
		'orm'        => MODPATH.'orm',`

#3. set config database:
	`application/config/database.php`

#4. create Model's :
	`modules/ORM/classes/Model/{Schema}/{Table}.php` `class Model_{Schema}_{Table} extends ORM { }`

#5. do a test at index.php:
#5.1.	`new Model_{Schema}_{Table}();`
#5.2.	`ORM::factory('{Schema}_{Table}');`