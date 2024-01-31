# Educational Games Management System

## Overview

This project is a web-based platform designed to manage educational games. It provides features for both instructors and students, allowing instructors to oversee and control various aspects of the educational gaming experience.

## Features

### For Instructors:

- **User Management:**
  - Add or delete students.
  - Securely manage user authentication with hashed passwords.

- **Game Management:**
  - Open or close games to control student access.
  - View students' progress in each game.
  - Monitor playtime, scores, and the last time students played.

- **Quiz Creation and Publication:**
  - Create quizzes for students.
  - Publish quizzes for students to access.

- **Feedback Viewing:**
  - View feedback provided by students about the games and the website.
![Student home](https://github.com/AbdAlhalemEz/EduGame/blob/main/screenshots/instructor.gif)

### For Students:

- **User Authentication:**
  - Sign in using a username and password provided by the instructor.

- **Game Access:**
  - Choose from available educational games.
  - Play selected games within the platform.

- **Quiz Participation:**
  - Participate in quizzes published by instructors.

- **Feedback Submission:**
  - Provide feedback about the games and the website.
![Student home](https://github.com/AbdAlhalemEz/EduGame/blob/main/screenshots/student.gif)

## Connected Games

### Cannon Game (GravityCannonunity2d):

- **Instructor Tracking:**
  - Track students' activity within the [Cannon Game](https://github.com/AbdAlhalemEz/GravityCannonunity2d).
  - Monitor time spent playing, scores, and last time played.
  - Control access by opening or closing the game.

- **Student Access:**
  - Students need a username and password provided by the instructor to log in.
  - Students can only play the game when the instructor has opened it.
  - The game is connected to the same database as this project.

  **Connectors Folder:**
  - The PHP files in the connectors folder are used to connect the Cannon game to the database.
  - They facilitate signing in, retrieving leaderboard scores, and tracking student playtime and scores.

### Penalty Kick Game (PenaltyKickGame):

- **Web Haxe Game:**
  - Included a web Haxe game within the [Penalty Kick Game](https://github.com/AbdAlhalemEz/PenaltyKickGame).

## Getting Started

1. **Prerequisites:**
   - Install a local server environment (e.g., XAMPP).
   - Ensure PHP and MySQL are set up.

2. **Database Setup:**
   - Import the attached database file into your MySQL instance.

3. **Configuration:**
   - Edit the necessary configuration files:
     - Set your local host name.
     - Update the database connection details.

## Running the Project

1. Place the project inside the root directory of your local server.

2. Start the local server (e.g., XAMPP).

3. Open a web browser and navigate to your local host to access the project.

## Notes

- Passwords are encrypted using hash encryption for security.
