# OpenYourMind

## Overview

OpenYourMind is a comprehensive web platform dedicated to mental health awareness and support in Indonesia. Our mission is to provide valuable information, education, and resources to promote mental well-being and reduce stigma surrounding mental health.

<p align="center">
    <img src="https://github.com/openyourmind-indo/OpenYourMind-1/assets/92313885/0229031f-177e-4a8b-a8d4-5a8cdf9df4b7" width="400" alt="OpenYourMind Logo"/>
</p>

## Project Setup

### Prerequisites

-   PHP
-   Laravel
-   Node.js
-   MySQL

### Installation

1. Clone the repository

    ```bash
    git clone https://github.com/your-username/openyourmind.git
    cd openyourmind
    ```

2. Install PHP dependencies

    ```bash
    composer install
    ```

3. Install JavaScript dependencies

    ```bash
    npm install
    ```

4. Configure environment

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. Set up database and run migrations
    ```bash
    php artisan migrate
    ```

## Technology Stack

### Backend

-   **Language**: PHP (Laravel)
-   **Database**: MySQL

### Frontend

-   **Framework**: Vue 3 (Composition API)
-   **Styling**: TailwindCSS
-   **State Management**: Pinia
-   **Routing**: Vue Router
-   **Admin Panel**: Filament

### Development Tools

-   **Build Tool**: Vite
-   **HTTP Client**: Axios
-   **Code Style**: EditorConfig

### Design

-   **UI/UX Design**: [Figma Design](https://www.figma.com/design/M0OLhq79tPDbdJkrQLvYfP/desain-OYM)

## Project Structure

```
openyourmind/
│
├── resources/
│   ├── css/
│   ├── js/
│   │   ├── components/
│   │   ├── layouts/
│   │   ├── router/
│   │   ├── store/
│   │   └── views/
│   └── views/
│       └── welcome.blade.php
│
├── app/
├── config/
└── database/
```

## Key Features (Planned)

-   [ ] User Authentication

    -   Email registration
    -   Google OAuth
    -   Email verification
    -   Password management

-   [ ] Dashboard

    -   Data visualization
    -   Administrative analytics
    -   User metrics
    -   CRUD Artikel
    -   CRUD Counseler
    -   CRUD Jadwal Counseler
    -   CRUD Organizer
    -   CRUD Recrutmen

-   [ ] User Profile Management
    -   Profile updates
    -   Image uploads
    -   Profile customization

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

Distributed under the MIT License. See `LICENSE` for more information.

## Contact

Project Link: [https://github.com/MuhamadNurHanif/openyourmind-2.git](https://github.com/MuhamadNurHanif/openyourmind-2.git)

## Acknowledgements

-   [Laravel](https://laravel.com)
-   [Vue.js](https://vuejs.org/)
-   [TailwindCSS](https://tailwindcss.com/)
