# The following steps will enable every developer to have same MySQL Database structure.

## (Assumption: You have XAMPP server running Apache-Web-Server and MySQL-Server and you're in EnvironmentSetup Directory)

### For OSX (CLI Commands):

* `/Applications/XAMPP/bin/mysql -u root --password="" -e "CREATE DATABASE my_uni_market"`

* `/Applications/XAMPP/bin/mysql -u root --password="" --database=my_uni_market < my_uni_market.sql`

* Now, you will have a Database __my_uni_market__ with __users__ table
