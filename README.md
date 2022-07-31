- Employee Management System using CodeIgniter
<br>

- Features
1. It is a very small framework which can do big works
2. It is built for developers
3. It is based on MVC framework
   <br>-- The car has the windscreens (view) which the driver (controller) uses to monitor traffic ahead then speed or brake (model)
   <br>-- Its purpose is to separate business logic and presentation details
4. It is extremely light weight
5. It has full feature database classes, it has inbuilt security and XSS filtering, and it has much much more many other features
   <br>-- XSS means cross-site scripting. CodeIgniter comes with XSS filtering security. This filter will prevent any malicious JavaScript code or any other code that attempts to hijack cookie and do malicious activities

<br>
- Working
1. config autoload.php(to autoload packages, libraries, helper files, etc) config.php(add base_url) database.php(add user_name and database_name) routes.php(to configure routes)
2. Add the php webpages in views folder and load it through controllers welcome.php
3. To take the data from url
   <br>-- include $data in the function of controller
   <br>-- access data in views using uri->segment()
4. To take the data of the form
   <br>-- include form.open() and form.close() in views 
   
<br>
[Website](https://employeemanagementsystemcodeigniter-4123.000webhostapp.com/home)
