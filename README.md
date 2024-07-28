# Medicore Hospital App

The Medicore Hospital App is a simple yet effective solution for managing hospital data. It is built using PHP 7.4, MySQL, JavaScript, Bootstrap, and the Smarty Template Engine.

## Technologies Used

- **Docker**: For containerization.
- **PHP 7.4**: The server-side scripting language.
- **MySQL**: The database management system.
- **JavaScript**: For client-side scripting.
- **Bootstrap**: For responsive design.
- **Smarty Template Engine**: For templating.

## Getting Started

### Prerequisites

Make sure you have the following installed on your local machine:

- Desktop Docker

### Database Setup

The application will automatically create the database with the required tables and insert fake data for testing purposes. This is handled by the application during its initial setup.


### Steps to Run the Application Locally

1. **Clone the Repository**  
   Clone the repository to your local machine:

   ```bash
   git clone <repository-url>
   cd medicore-hospital-app

2. **Navigate to the Docker Directory** 

    ```bash
   cd docker

3. **Start the Docker Container** 

    ```bash
   docker-compose build

4. **Start the Docker Containers** 

    ```bash
   docker-compose up -d

4. **Install Composer Dependencies** 
    Inside the PHP container, run the following command to install Composer dependencies:

    ```bash
   docker exec -it <php-container-name> composer install
    
   Replace <php-container-name> with the actual name of your PHP container. You can find the name by running

      "docker ps"

### Conclusion
The Medicore Hospital App is a simple yet effective solution for managing hospital data. By following the steps above, you can easily set it up on your local machine and explore its features.

Feel free to contribute to the project by reporting issues or submitting pull requests.
