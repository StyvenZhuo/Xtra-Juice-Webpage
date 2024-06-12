<div align="center">
  <img src="./public/logo-xtrajuice.svg" alt="X-Tra Juice Logo" width="200"/>
</div>


## About Project

**PROJECT WEBSITE LANDING PAGE FOR X-TRA JUICE** 

The landing page website for X-Tra Juice is designed to support business development and build the branding of this business. Through this website, customers can view the complete product menu and other menus along with the prices offered. Additionally, this website is equipped with a database system that can receive customer comments, allowing for direct interaction and feedback beneficial for improving service and product quality. The attractive and informative website design is expected to enhance the visibility and trust of consumers towards X-Tra Juice.

Technologies used: Figma, Laravel with Tailwind CSS, Xampp & PhpmyAdmin


## About Business

Xtra Juice Fruit Stand is a beverage business located in the cafeteria of the Batam International University. This SME was established in 2016 and has been operating for 8 years.
[Learn more.](https://drive.google.com/file/d/18m9ewZhL55eJ9hdqFJQl0XEmI43x9ru_/view?usp=drive_link)


## About Team

2SIMD 2024
**TEAM SYNC:**
- Zaynulia Afifa 2331033 (Researcher)
- Jenifer 2331142 (Researcher)
- Helen Febriana 2331046 (UI / UX Designer)
- Cristine Mulia Hakim 2331128 (Back End Engineer)
- Styven 2331165 (Front End Engineer)
- Derrick 233112 (QA Engineer)


## Precaution

In order to view images in this website. please download [this following folder]() and put them in **Public > Storage** Folder.


## Usage

To use this project, follow these steps:

1. Ensure you have the following installed on your local development environment:
- [PHP](https://www.php.net/downloads.php) (>= 8.0)
- [Composer](https://getcomposer.org/download/)
- [Node.js](https://nodejs.org/en/download/) and [NPM](https://www.npmjs.com/get-npm)
- [XAMPP](https://www.apachefriends.org/index.html)

2. Clone the repository: 
```bash
   git clone https://github.com/StyvenZhuo/Xtra-Juice-Webpage.git
   cd repository
```

3. Install Dependencies:
```bash
    composer install
    npm install
```

3. Set Up Environment Variables & Generate Application Key:
```bash
    cp .env.example .env
    php artisan key:generate
```

4. Run Database:
```bash
    php artisan migrate
    php artisan db:seed
    php artisan storage:link
```

5. Start the Web:
**Open XAMPP & Start Apache and Mysql**
```bash
    npm run dev
    php artisan serve
```



## Laravel Documentation

[Laravel documentation](https://laravel.com/docs/contributions).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
