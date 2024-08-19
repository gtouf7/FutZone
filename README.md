# FutZone
## Built with Laravel
---------------------
### 1. Description
This project's purpose it for a user to be able to create their own teams and players and have them stored in the desired team.

### 2. Details
 The admin wil be able to edit and delete the teams and/or players, the user will be able to view and insert a new team or player.
 There are two table that are being stored in the database.
 
     -  Teams
         - id
         - Team Name
         - Country
         - Colors
         - Year Founded
    - #### Players
        - id
        - Full Name
        - Position
        - Jersey Number
        - Team ID
A one to many relationship is being implemented within the database.
