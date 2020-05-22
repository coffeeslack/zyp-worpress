# ZYP

created by Havilah and Hills. zyp is a website that allows people to purchase packages that suite their business needs

## Installation

zyp is powered by wordpress, ensure that wordpress is setup.

## Menus

There are two menus (the top navbar menu and footer menu)

- create two menus from wordpress admin
- for the top navbar menu (code in header.php), the name of the wordpress menu should be **top-menu** and the location should be **top-menu**
- for the footer menu (code in footer.php) the name of the wordpress menu should be **footer-menu** and the location is **footer-menu**
- add the links in each menu location

## Home page (index.php)

- create"Home" page in wordpress pages
- page title should be **Home**
- enable **custom field** in the page from the options section in the right pane

### Home Page Hero Banner

- **Title:** when you need fast creative solutions to grow your business (has been inputted manually in the php file).
- **Start Here Button Link:** create a custom field in the home page with a name of _banner_button_link_

| custom field name  | description                                     |
| ------------------ | ----------------------------------------------- |
| banner_button_link | link to package page (e.g. https://zyp/package) |

### Home Page Featured Packages

Each package from the **package custom post type** with a category of **featured** would be displayed here...

## Why Zyp Page (page-why-zyp.php)

- create **Why Zyp** page in wordpress pages
- the title of the page should be **Why Zyp?** and would be displayed in the banner
- the content of the page would be displayed on the webiste
- ensure that the **slug** of the page is **why-zyp**

## Buzz Us Page (page-why-zyp.php)

- create **Buzz Us** page in wordpress pages
- the title of the page should be **Buzz Us** and would be displayed in the banner
- ensure that the **slug** of the page is **buzz-us**
- make sure that **custom fields** are enabled in wordpress
- the section showing **address**, **phone number**, **email** and **working hours** is controlled by the custom field

| custom field name | description                              |
| ----------------- | ---------------------------------------- |
| Address           | e.g 15 unknown street, port harcourt     |
| Phone             | e.g 090827267816                         |
| Email             | e.g info@zyp.com                         |
| Working Hours     | e.g Mon - Friday <br /> 08:00AM - 6:00PM |

- The contact form is coded manually and integrated with mailchimp, if any changes are to be made to the form, it should be done manually in the **page-buzz-us.php** file and **style.css** in the css folder

## Blog Page

Each blog is in the **blog custom post type** . To add a new blog post, just create a new post in the blog custom post type. ensure that the **excerpt** and **featured image** of each blog is inputted.

## Package Page

Each package is in the **package custom post type** . To add a new package, just create a new post in the package custom post type. ensure that each package has a **category**. You can use existing categories for each package e.g _web, graphics_ e.t.c.
**note:** if a new category is created, it would be added to the mini menu in the package page banner

## Single Package

Each package should have a well named _title_ and _category_. The details of each package should be inputted in the custom field

| custom field name     | description                                    |
| --------------------- | ---------------------------------------------- |
| package_name          | e.g zyp graphics lite                          |
| package_price         | e.g N50K                                       |
| package_description   | e.g full description of package should be here |
| package_terms         | e.g terms and conditions should be here        |
| package_checkout_link | e.g https://paystack/zyp-graphics-lite         |

Each package can have many features in the custom field

| custom field name | description   |
| ----------------- | ------------- |
| package_feature   | e.g instagram |
| package_feature   | e.g facebook  |
| package_feature   | e.g twitter   |
| package_feature   | e.g YouTube   |
| package_feature   | e.g LinkeIn   |

You can also input a feature that a package does not have, but can be found in another package, e.g zyp graphics lite might not offer a YouTube design, but zyp graphics premium can offer it, in that case, it can be inputted in the custom field with a class...i.e

| custom field name | description                                                  |
| ----------------- | ------------------------------------------------------------ |
| package_feature   | e.g `<span class="strikeThrough">`YouTube`</span>`           |
| package_feature   | e.g `<span class="strikeThrough">`Real time support`</span>` |
