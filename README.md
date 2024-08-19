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
a. Teams
-----------------------------------------
![TeamList](https://github.com/user-attachments/assets/806f1d25-79ea-413c-bbdd-7053d3d1d9eb)
![TeamEdit](https://github.com/user-attachments/assets/b8757c89-bf4a-4c4d-ac93-0989c9a9aa9b)
![TeamAdd](https://github.com/user-attachments/assets/50cddfa5-3b60-45af-a7d6-8ad2d57c30ac)


b. Players
----------------------------------------
![PlayerList](https://github.com/user-attachments/assets/a8d3be43-d893-45e6-bdbc-009ed343dbfc)
![PlayerEdit](https://github.com/user-attachments/assets/531a14ec-2cc5-40e7-a47d-1a05e0dae8a9)
![PlayerAdd](https://github.com/user-attachments/assets/20c3e56c-4c21-4204-8c15-d920486aa6a7)





### 4. Issues
The delete functionality for teams and players is being redirected to the players/teams.show view even though we have switched to redirect to the teams/players.index. Tried plenty of changes in routing names but nothing seems to be working. Players/Teams.trashed view is also not working.

### 5. Thoughts
Laravel seems like a useful framework when it comes to working with php. While working on the project, our thoughts are that there can be confusion with the way routing works and it can get complicated. 

