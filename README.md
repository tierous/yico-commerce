# yico-commerce
This is ecommerce web application using yii framework. My aim is to make a template/engine of ecommerece web application that everyone can use and modified to meet their need. This project use yii framework1, it is actually for my bachelor degree research about merging CRM into ecommerce application.

# Table of Contents

* [How to Install](#howto-install)
* [Extension Used](#extension)
* [Feature for Backend](#featurebackend)
* [Feature for Frontend](#featurefrontend)
* [Known Bugs](#knownbugs)
* [Future Update](#futureupdate)

# <a name="howto-install"></a>How to Install
* Download zip file or clone to your computer.
* Extract file to your localhost htdocs folder or /var/www/html and rename the application to 'ecomm'.
* Create database named 'ecomm' and import the sql file 'ecomm.sql'
* Access the application with your browser
* Admin page is on localhost/ecomm/index.php?r=admin username:eco password:eco
* Edit the db connection password in protected/config/database with your mysql password

# <a name="extension"></a>Extension Used
* Image http://www.yiiframework.com/extension/image/

# <a name="featurebackend"></a>Feature for Backend
* LOGIN Admin
* Admin Page
* Admin Access Control
* CRUD Category
* CRUD Manufacturer
* CRUD Product
* CRUD Admin
* CRUD Deal
* CRUD Support Ticket

# <a name="featurefrontend"></a>Feature for Frontend
* Store Home Page
* Customer Login
* Customer Register
* Customer Access Control
* Account Page
* Change Password
* Address Book
* Add new Address
* Update Exsisting Address
* List Product
* Product Detail
* List Product by Category
* List Order
* Detail Order
* Random Order Code
* Payment Confirmation
* Shopping Cart
* Random cart code
* Add Product to Cart
* Delete Product from Cart
* Change Quantity from Cart
* Checkouting
* List Comment per Product
* Create New Comment per Product (still bug cannot retrieve product id & customer id)
* View Comment per Product and Customer
* Support Ticket
* Create New Ticket
* View Ticket
* Random Ticket Code

# <a name="knownbugs"></a>knownbugs
* Cannot add new comment on product
* Deal price on product view still error(cannot retrieve product_id)
