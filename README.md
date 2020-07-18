# SecureLogin-SignupPage
Secure login and Signup page in PHP using prepare statement


Implementing User Authentication Mechanism
User authentication is very common in modern web application. It is a security mechanism that is used to restrict unauthorized access to member-only areas and tools on a site. 
This is a simple login and signup system that will enable you understand how the prepapare statements (Procedural style) works. 

What is Prepared Statement??
A prepared statement (also known as parameterized statement) is simply a SQL query template containing placeholder instead of the actual parameter values. These placeholders will be replaced by the actual values at the time of execution of the statement.

Advantages of Using Prepared Statements??
A prepared statement can execute the same statement repeatedly with high efficiency, because the statement is parsed only once again, while it can be executed multiple times. It also minimize bandwidth usage, since upon every execution only the placeholder values need to be transmitted to the database server instead of the complete SQL statement.

Prepared statements also provide strong protection against SQL injection, because parameter values are not embedded directly inside the SQL query string. The parameter values are sent to the database server separately from the query using a different protocol and thus cannot interfere with it. The server uses these values directly at the point of execution, after the statement template is parsed. That's why the prepared statements are less error-prone, and thus considered as one of the most critical element in database security.


Demo: https://abbagana.com.ng/authenticationsystem/

Feel free to modify it based on your wish
