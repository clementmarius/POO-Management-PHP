# POO-Management-PHP

## Project Specifications: Development of a Native PHP Web Application

**1. Context and Objectives**  
The project aims to develop Object-Oriented Programming (OOP) skills in native PHP within an MVC architecture, creating a blog article system with user management features.

**2. Project Scope**  
Development covers creating a web application following the MVC architecture, with functionalities for user management, blog article publishing, and commenting.

**3. Functional Description**  

**a. Shared Wall**  
* **Feature**: A blog article feed accessible to all, displayed in chronological order.  
* **Details**: Display of articles with first and last name, content, and date.  
Order: latest publications first.

**b. User Management**  
* **Registration and Login**: Required fields (Last Name, First Name, Date of Birth, Email, Profile picture).  
   Verification of email uniqueness.  
   Secure validation and login methods (secure password hashing).  
* **Secure Logout**  
* **Account Deletion**:  
   Deactivation in the database with data retention for 1 year (CNIL compliance).  
   Automatic deletion trigger after one year.

**c. Publication Management**  
* **Creating and Deleting Publications**:  
   Users can post and delete their own publications.  
* **Comments**:  
   Ability to comment on publications.

**4. Technical Constraints**

* **Back-end**: PHP for handling requests and server processing.

* **Database**: MySQL for storing users, blog articles, and comments.

* **MVC Architecture**:  
  * **Models**: Folder managing interactions with the database.
  * **Views**: Folder for presentation (HTML, CSS, Vanilla JavaScript).
  * **Controllers**: Folder coordinating between the user, model, and view layers.
  * **Entry Point**: index.php.

```
├── index.php
│
├── /controllers
│   ├── AuthController.php
│   ├── UserController.php
│   ├── PostController.php
│   ├── CommentController.php
│ 
│
├── /models
│   ├── UserModel.php
│   ├── PostModel.php
│   ├── CommentModel.php
│   
│
├── /views
│   ├── login.php
│   ├── register.php
│   ├── create_post.php
│   ├── view_posts.php
│   ├── comment.php
│   ├── header.php
│   └── footer.php
│
├── /public
│   └── /assets
│       ├── /css
│       │   └── style.css
│       ├── /js
│       │   └── script.js
│       └── /img
│           └── (images des users)
│
├── .env
│
└── .htaccess
```


### Detailed Architecture Explanations

**5. User Stories and Validation Criteria**

**Organizational Chart:**  

**Database Schema (MPD):**  

**Use Cases:**  

User case:  

![alt text](image-2.png)

Activity Diagram:  

![alt text](image-3.png)

Class Diagram:  

![alt text](image-4.png)

Semantic Sequence Diagram:

![alt text](image-5.png)
