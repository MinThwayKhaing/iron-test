# Full-Stack Web Developer Challenge Project

## Project Overview
This project is a **frontend-focused implementation** of a Figma design using **CodeIgniter 4**, HTML, CSS, JavaScript, and Bootstrap.  
It includes sections such as **Hero**, **Product Overview**, **Product Benefits**, and **Early Access Program**.

The goal was to create a **pixel-perfect, responsive, and production-quality layout**, with accessibility and cross-browser compatibility.  
Dynamic content is loaded from JSON (`content.json`) to demonstrate how controllers pass data to views.

## Project Structure & MVC Implementation
The project follows **CodeIgniter 4 MVC structure**:  

- **Controllers**  
  - `Home.php` – Loads dynamic data from `/public/assets/data/content.json` and passes it to the views.

- **Views / Layouts**  
  - Each section of the Figma design has its **own layout** inside `/app/Views/layout/`:
    - `nav.php` – Navigation bar
    - `hero_section.php` – Hero section
    - `product_overview.php` – Product overview section
    - `product-benefits.php` – Product benefits section
    - `early-access-program.php` – Early access signup section  
  - These layouts are combined in `home.php` using:
    ```php
    <?= $this->extend('layout/base') ?>

    <?= $this->section('content') ?>

      <?= view('layout/nav') ?>
      <?= view('layout/hero_section') ?>
      <?= view('layout/product_overview') ?>
      <?= view('layout/product-benefits') ?>
      <?= view('layout/early-access-program') ?>
    <?= $this->endSection() ?>
    ```

- **CSS Organization**  
  - Each design section has a dedicated CSS file in `/public/css/` (e.g., `hero_section.css`, `product_overview.css`, etc.).
  - Common styles are in `layout.css` and variables in `variables.css`.
  - Responsive styles are in `responsive.css`.
  - Fonts and typography handled via `fonts.css` and `typography.css`.

- **Dynamic Content**  
  - JSON file: `/public/assets/data/content.json`
  - Controllers read content dynamically and pass it to the views, allowing easy updates without changing HTML code.

## Technologies Used
- HTML5, CSS3 (custom + Bootstrap 5)
- JavaScript (minimal, for interactive elements)
- CodeIgniter 4 (PHP MVC framework)
- Fonts: Montserrat (Gotham used in Figma, but replaced due to license)
- JSON files for dynamic content (`content.json`)
- Responsive design and accessibility best practices

## Setup / Installation
1. Open terminal in the project folder.
2. ###Install dependencies (if not done):
   ```bash
   composer install
3.###Start the CodeIgniter server:
   ```bash
   php spark serve
4.Open browser and navigate to: http://localhost:8080
