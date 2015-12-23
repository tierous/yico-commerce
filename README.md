# yico-commerce
This is ecommerce web application using yii framework. My aim is to make a template/engine of ecommerece web application that everyone can use and modified to meet their need. This project use yii framework1, it is actually for my bachelor degree research about merging CRM into ecommerce application.

# Table of Contents

* [How to Install](#howto-install)
* [Extension Used](#extension)
* [Backend Feature](#featurebackend)
* [Frontend Feature](#featurefrontend)
* [Known Bugs](#knownbugs)
* [Future Update](#futureupdate)

# <a name="howto-install"></a>How to Install
* Download zip file or clone to your computer.
* Extract file to your host root (htdocs or var/www/html) and rename the folder to "ecomm".
* Create database named "ecomm" and import the sql file "ecomm.sql".
* Access the application url with browser http:://localhost/ecomm
* Edit the database connection password in protected/config/database with your mysl password
* Admin page is on http:://localhost/ecomm/index.php?r=admin username : "eco" password : "eco"

# <a name="extension"></a>Extension Used
* Image http://www.yiiframework.com/extension/image/

# <a name="featurebackend"></a>Backend Feature
* Separate Admin Login
* Separate Admin Page
* Admin Action Access Control
* Customer Action Access Control
* Manage Category
* Manage Manufacturer
* Manage Product
* Manage Admin
* Manage Deal
* Manage Support Ticket
* Manage Coupon
* Manage Custom Product

# <a name="featurefrontend"></a>Backend Feature
* Store Front Page
* Separate Customer Login
* Customer Register
* Account Page
* Change Password
* Manage Address Book
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
* Create New Comment per Product
* View Comment per Product and Customer
* Manage Support Ticket
* Random Ticket Code

# <a name="knownbugs"></a>knownbugs
* Cannot add new comment on product (cannot retrieve product_id & customer_id)
* Deal price on product view still error(cannot retrieve product_id)

# <a name="futureupdate"></a>futureupdate
* Integrate management of custom product into one screen
* Add RewardPoint feature
* Use responsive template for admin side
