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
         
    - Players
        - id
        - Full Name
        - Position
        - Jersey Number
        - Team ID
        
A one to many relationship is being implemented within the database.

### 3. Screenshots
![TeamList](https://github.com/user-attachments/assets/905efe00-5382-419e-8afb-5acadc73f461)

### 4. Issues
The delete functionality for teams and players is being redirected to the players/teams.show view even though we have switched to redirect to the teams/players.index. Tried plenty of changes in routing names but nothing seems to be working. Players/Teams.trashed view is also not working.

### 5. Thoughts
Laravel seems like a useful framework when it comes to working with php. While working on the project, our thoughts are that there can be confusion with the way routing works and it can get complicated. 

