# 🧠 Quizznozz: Interactive Learning Quiz Portal

**Quizznozz** is a dynamic and responsive 13-page web application designed to make online learning engaging through interactive quizzes. Built with a modern tech stack including **HTML**, **CSS**, **JavaScript**, **PHP**, **AJAX**, and **MySQL**, the platform offers a smooth user experience with animation, real-time updates, and secure access via invitation codes.

---

## 🚀 Features

- 🎯 **Interactive Quiz Engine** with time-based questions and score tracking
- 🧾 **Invitation Code System** for access control and classroom integration
- 🌐 **Fully Responsive Design** with 13 HTML pages optimized for mobile and desktop
- ✨ **Smooth Animations** and intuitive navigation for enhanced user experience
- 📊 **MySQL-Backed Question Bank** with category-wise quiz logic and storage
- 🔄 **AJAX Integration** for seamless form submission and quiz handling without page reloads
- 🔐 **User Authentication Logic** (via invite code) to maintain quiz integrity

---

## 🛠️ Tech Stack

| Component    | Technology             |
|--------------|------------------------|
| Frontend     | HTML, CSS, JavaScript  |
| Backend      | PHP                    |
| Database     | MySQL                  |
| Asynchronous | AJAX                   |
| Deployment   | GitHub Pages / Custom Hosting |

---

## 📦 File Structure

```
QUIZ/
├── index.html           # Home page with welcome or intro quiz screen
├── login.php            # Invite code based login page
├── quiz.php             # Dynamic quiz logic using PHP + MySQL
├── results.php          # Score & result display page
├── assets/              # CSS, JS, images, animations
├── database/            # SQL schema and database connection file
└── README.md            # Project documentation
```

---

## 💡 Learning Highlights

- Applied **UX Design principles** to build intuitive and engaging quiz flow
- Demonstrated **full-stack capabilities** through end-to-end development
- Reinforced **asynchronous programming** using AJAX and PHP integration
- Used **MySQL joins and queries** to dynamically serve quiz content

---

## 🧪 How to Run Locally

1. Clone the repository:
```bash
git clone https://github.com/AdoniaSequeira/QUIZ.git
```

2. Import the database:
- Use tools like phpMyAdmin or MySQL Workbench
- Import the provided `.sql` file (if available in `/database/`)

3. Start a local PHP server:
```bash
php -S localhost:8000
```

4. Navigate to `http://localhost:8000/index.html` to start the quiz portal.

---

## 📸 Screenshots (Optional)

_Add screenshots or GIFs showing the quiz interface, invitation screen, and result page._

---

## 👩‍💻 Author

**Adonia Sequeira**  
M.S. in Computer Science @ George Washington University (May 2025)  
Passionate about UI/UX, full-stack development, and learner-centered technology  
🔗 [LinkedIn](https://linkedin.com/in/adonia-sequeira)  
🌐 [Portfolio](https://adoniasequeira.github.io/Adonia_Sequeira.github.io)

---

## 📌 Future Enhancements

- Add leaderboard functionality for classroom gamification  
- Introduce category-wise performance analytics  
- Add admin panel to manage quiz sets and monitor results  
- Enhance frontend with React or Vue for SPA features  

---

> “Learning should be fun — and quizzes should be smarter.” — *Adonia Sequeira*
> <p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
