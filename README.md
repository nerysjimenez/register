# register
Guest Registration Application

    Nerys Jimenez 
    Programming Assignment for the Programmer position
    
    Create a HTML form with the following fields: 
    - Text Fields for Personal Identification, First Name and Last Name 
    - Drop down with Title ( Mr, Ms, Mrs, Miss) 
    - Radio Buttons for Female or Male 
    - Text Area for comments 
    - 2 buttons: Submit and Reset 

    Validations (use Javascript): 
    All fields are required with the exception of Comments and Title. Personal Identification is a 7 digit number. 

    Submit: 
    Call a PHP code that will get the information from the form and save it in a hypothetical table guest_registration. 
    guest_registration has the following fields: 
            personal_id number not null 
            title varchar(5) 
            first_name varchar (50) not null 
            last_name varchar (50) not null   
            sex varchar(1) not null 
            comments varchar(500) 

    Validate if the person is already registered by their personal identification. 
    PHP code should return if the registration was successful or not. 

