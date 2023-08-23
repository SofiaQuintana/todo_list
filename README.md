
# To-Do List App

The To-Do List App is a simple web application developed using the MVC (Model-View-Controller) architecture. It allows users to manage their tasks and stay organized by providing a user-friendly interface to create, update, and delete tasks. The app is built using PHP, MySQL, JavaScript, HTML, and CSS.

## Features

- **User Registration and Authentication**: Users can sign up for an account, and registered users can log in securely to access their tasks.

- **Task Management**: Users can add new tasks, mark tasks as completed, edit task details, and delete tasks.

- **Task Categories**: Tasks can be categorized to help users organize their to-do list effectively.


## Technologies Used

- **PHP**: Used for server-side scripting and handling backend logic.

- **MySQL**: Used as the database management system to store user information and task data.

- **JavaScript**: Provides interactive functionality and dynamic updates on the frontend.

- **HTML**: Responsible for structuring the content and layout of the app.

- **CSS**: Used for styling the app and making it visually appealing.

## MVC Architecture

The app follows the MVC architectural pattern to ensure separation of concerns and maintainable code:

- **Model**: Represents the data and business logic of the application. In this app, the models handle database interactions, such as retrieving and updating tasks.

- **View**: Responsible for rendering the user interface. Views generate the HTML that is sent to the user's browser.

- **Controller**: Manages the interaction between the model and the view. Controllers handle user requests, process input data, and update the model accordingly. They also determine which view should be displayed to the user.

## Installation and Setup

1. Clone the repository to your web server's directory.

2. Create a MySQL database and import the provided SQL file (`database.sql`) to set up the required tables.

3. Update the database connection details in the `config.php` file.

4. Make sure you have a web server (e.g., Apache) running with PHP enabled.

5. Open the app in your web browser.

## Usage

1. Register a new account or log in if you already have one.

2. Once logged in, you'll be directed to your task list.

3. Use the interface to add new tasks, mark tasks as completed, edit tasks, and delete tasks.

4. You can also categorize tasks for better organization.

## Contributing

Contributions are welcome! If you'd like to contribute to this project, please follow these steps:

1. Fork the repository.

2. Create a new branch for your feature or bug fix.

3. Make your changes and test thoroughly.

4. Submit a pull request, explaining the changes you've made.

## Credits

This app was developed by [Sofia Quintana] as a demonstration of web development skills using PHP, MySQL, JavaScript, HTML, and CSS.

## License

This project is licensed under the [MIT License](LICENSE).

---