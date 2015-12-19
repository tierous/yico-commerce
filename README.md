# yico-commerce
This is ecommerce web application using yii framework. My aim is to make a template/engine of ecommerece web application that everyone can use and modified to meet their need. This project use yii framework1, it is actually for my bachelor degree research about merging CRM into ecommerce application.

# Table of Contents

* [How to Install](#howto-install)
* [Feature for Backend](#featurebackend)
* [Feature for Frontend](#featurefrontend)

# <a name="howto-install"></a>How to Install
* Download zip file or clone to your computer.
* Extract file to your localhost htdocs folder or /var/www/html and rename the application to 'ecomm'.
* Create database named 'ecomm' and import the sql file 'ecomm.sql'
* Access the application with your browser
* Admin page is on localhost/ecomm/index.php?r=admin username:eco password:eco
* Edit the db connection password in protected/config/database with your mysql password

# <a name="featurebackend"></a>Feature for Backend
* CRUD Category
* CRUD Manufacturer
* CRUD Product
* CRUD Admin
* LOGIN Admin
* Admin Page
* Admin Authorization
* Manage Support Ticket for Admin

# <a name="featurecustomer"></a>Feature for Customer
* Store Home Page
* Product Detail
* Product Category
* Account Page
* Customer Login
* Customer Register
* Customer Change Password
* Customer Address Book
* List Order
* Detail Order
* Payment Confirmation
* Customer Authorization
* Shopping Cart
* Make random cart code
* Add Product to Cart
* Delete Product from Cart
* Change Quantity
* Add new Address
* Finish Shop
* Comment
* Create New Comment (still bug cannot retrieve product id & customer id)
* View Comment per Product (still bug, can only view via phpmyadmin)
* View Comment per Customer (still bug, can only ciew via phpmyadmin)
* Support Ticket
* Create New Ticket
* View Ticket
