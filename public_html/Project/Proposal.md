# Project Name:  Simple Shop
## Project Summary: This project will create a simple e-commerce site for users. Administrators or store owners will be able to manage inventory and users will be able to manage their cart and place orders.
## Github Link: https://github.com/Js791/IT202-007/tree/prod/public_html/Project
## Project Board Link: https://github.com/Js791/IT202-007/projects/1
## Website Link: [(Heroku Prod of Project folder)](http://js79-prod.herokuapp.com/Project/)
## Your Name: Jemil Srejic

<!--
### Line item / Feature template (use this for each bullet point)
#### Don't delete this

- [ ] (mm/dd/yyyy of completion) Feature Title (from the proposal bullet point, if it's a sub-point indent it properly)
  -  List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
      - PR link #1 (repeat as necessary)
    - Screenshots
      - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
        - Screenshot #1 description explaining what you're trying to show
### End Line item / Feature Template
--> 
### Proposal Checklist and Evidence

 Milestone Features:
	Milestone 1:
  -  [x] (11/08/2021) User will be able to register a new account
        -  List of Evidence of Feature Completion
        - Status: Completed
       - Direct Link: https://js79-prod.herokuapp.com/Project/register.php
       - Pull Requests: https://github.com/Js791/IT202-007/pull/32
         - PR link #1 (repeat as necessary) 
       - Screenshots
            - 	Showing a successful registration.
            - 	![Screenshot (20)](https://user-images.githubusercontent.com/90228698/141027716-be73ddca-2f39-42d4-a4e7-aaeb86783797.png)
            	<br></br>
	    -	This shows confirming password match, email validation,also checking password length.
            - 	![Screenshot (17)](https://user-images.githubusercontent.com/90228698/141026703-51d79856-8c16-4e85-8162-02a0316f2716.png)
            	<br></br>
	    -	This shows username is validated on client side,along with requiring a username.
            -	![Screenshot (19)](https://user-images.githubusercontent.com/90228698/141026969-d971ce2a-ca71-4008-8066-716ad116c737.png)
            	<br></br>
	    -	This shows the UsersTable, showing all the required fields asked for along with hashed password values, also code is next screenshot after the one below showing the requirements.
	    -	![Screenshot (21)](https://user-images.githubusercontent.com/90228698/141028934-430b2f9b-1584-455e-9bf8-546bf0f6534f.png)
	    -	![Screenshot (22)](https://user-images.githubusercontent.com/90228698/141028972-b9301773-c0ad-421a-9604-ddab3e4a4408.png)
	    	<br></br>
	    -	The screenshots below show non-wiping of form fields if taken username or email is used to register.
	    -	![Screenshot (26)](https://user-images.githubusercontent.com/90228698/141035544-69cc5685-a96b-41e4-8c09-de78ce13646d.png)
	    -	![Screenshot (27)](https://user-images.githubusercontent.com/90228698/141035829-a45c45d9-c835-4817-b5fc-a239c5462f87.png)

            <br></br>
       - Form Fields
         - [x] Username, email, password, confirm password (other fields optional)
         - [x] Email is required and must be validated
         - [x] Username is required
         - [x] Confirm password’s match
       - Users Table
         - [x] Id, username, email, password (60 characters), created, modified
       - Password must be hashed (plain text passwords will lose points)
       - Email should be unique
       - Username should be unique
       - System should let user know if username or email is taken and allow  the user to correct the error without wiping/clearing the form
          - [x] The only fields that may be cleared are the password fields.
          <br></br>
-   [x] (11/08/2021) User will be able to login to their account (given they enter the correct credentials)
      -  List of Evidence of Feature Completion
    - Status: Completed
    - Direct Link: https://js79-prod.herokuapp.com/Project/login.php
    - Pull Requests:https://github.com/Js791/IT202-007/pull/33
    - Screenshots
        - This is showing successful login with username or password,also shows user being redirected to homepage with some of the user's attributes.
        - ![Screenshot (28)](https://user-images.githubusercontent.com/90228698/141036715-bc2e5e25-2bda-45cd-b67c-382a931f7909.png)
        <br></br>
	- This screenshot shows nonexistant email/username and password not matching.
	- ![Screenshot (29)](https://user-images.githubusercontent.com/90228698/141041499-13632a04-3b7c-4a9e-815a-f7ffb44f1b3c.png)
	- ![Screenshot (30)](https://user-images.githubusercontent.com/90228698/141041511-43afede0-705a-4ee5-a3d9-49cd690c2141.png)

     - Form
        - [x] User can login with email or username
          - This can be done as a single field or as two separate fields
        - [x] Password is required
     - User should see friendly error messages when an account either doesn’t exist or if passwords don’t match
       - Logging in should fetch the user’s details (and roles) and save them into the session.
     - User will be directed to a landing page upon login
        - [x] This is a protected page (non-logged in users shouldn’t have access)
        - [x] This can be home, profile, a dashboard, etc.
        <br></br>
 -  [x] (11/08/2021) User will be able to logout
        -  List of Evidence of Feature Completion
        - Status: Completed
       - Direct Link: https://js79-prod.herokuapp.com/Project/login.php
       - Pull Requests:https://github.com/Js791/IT202-007/pull/35
       - Screenshots
         - This photo shows the code redirecting the user back to login page.
         - ![Screenshot (32)](https://user-images.githubusercontent.com/90228698/141057967-6fae471c-9a16-475e-badc-9fa3f8296fa4.png)
         <br></br>
         - This screenshot shows a successful logout with a message.
         - ![Screenshot (35)](https://user-images.githubusercontent.com/90228698/141061847-8d6a41a6-32a2-43fa-bcd5-8f3bab9ea42c.png)


     - Logging out will redirect to login page
     - User should see a message that they’ve successfully logged out
     - Session should be destroyed (so the back button doesn’t allow them access back in)
     <br></br>
-  [x] (11/08/2021) Basic Security rules implemented
     - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://js79-prod.herokuapp.com/Project/profile.php
       - Pull Requests:https://github.com/Js791/IT202-007/pull/35
      - Screenshots
         - Demostrating how is_logged_in function operates on certain pages.
         - ![Screenshot (36)](https://user-images.githubusercontent.com/90228698/141064298-c5bd0ddb-7762-4fc9-bedb-70604092b5c0.png)
         <br></br>
         - code showing function logic
         - ![Screenshot (37)](https://user-images.githubusercontent.com/90228698/141064489-3cd9a033-9a5f-44fe-8fa8-aa4e9d345534.png)
     - Authentication:
       - [x] Function to check if user is logged in
       - [x] Function should be called on appropriate pages that only allow logged in users
      <br></br>
-  [x] (11/08/2021) Basic roles implemented
     - List of Evidence of Feature Completion 
      - Status: Completed
      - Direct Link:http://js79-prod.herokuapp.com/Project/login.php
       - Pull Requests: https://github.com/Js791/IT202-007/pull/35
      - Screenshots
         - Screenshots below showing User Roles Table, Roles Table, and a has_role function to check role of user, also showing a user is a Admin, and their abilities to assign roles and list them.
         - ![Screenshot (39)](https://user-images.githubusercontent.com/90228698/141066261-1bed6fa5-14f8-4af3-9372-b7a2e0305ce6.png)
         - ![Screenshot (40)](https://user-images.githubusercontent.com/90228698/141066286-938f5fe0-ba9d-4faa-9d21-3b1c08e801e5.png)
         - ![Screenshot (41)](https://user-images.githubusercontent.com/90228698/141066300-eafadf59-724d-47fd-891d-3f9efde4d2dd.png)
         - ![Screenshot (42)](https://user-images.githubusercontent.com/90228698/141066545-223be9ba-17a4-4b05-8835-87895f432325.png)

     - Roles/Authorization:
       - [x] Have a roles table (see below)
        <br></br>
    - Have a Roles table(id, name, description, is_active, modified, created)
    - Have a User Roles table (id, user_id, role_id, is_active, created, modified)
    - Include a function to check if a user has a specific role (we won’t use it for this milestone but it should be usable in the future)
    <br></br>
-  [x] (11/08/2021) Site should have basic styles/theme applied; everything should be styled.
     - List of Evidence of Feature Completion
      - Status:Compeleted
      - Direct Link:https://js79-prod.herokuapp.com/Project/profile.php
       - Pull Requests: https://github.com/Js791/IT202-007/pull/35
      - Screenshots
         - This screenshot shows the styling of the page, I will add bootstrap to this project later.
         - ![Screenshot (43)](https://user-images.githubusercontent.com/90228698/141066920-d6d897c7-e4ea-448e-a695-7f3c61ea882a.png)
     - I.e., forms/input, navigation bar, etc
  <br></br>
-   [x] (11/08/2021)Any output messages/errors should be "user friendly"
     - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://js79-prod.herokuapp.com/Project/register.php
       - Pull Requests: https://github.com/Js791/IT202-007/pull/38
      - Screenshots
         - The screenshots below show the client-side validation of register,login,and profie page(I had to remove required attribute in form elements to show validation)
         - ![Screenshot (44)](https://user-images.githubusercontent.com/90228698/141175206-edbbb56d-4f02-4a90-ba1d-77ec208c9ada.png)
         - ![Screenshot (45)](https://user-images.githubusercontent.com/90228698/141176680-02813038-79a7-45ac-8206-af150595d4d9.png)
         - ![Screenshot (46)](https://user-images.githubusercontent.com/90228698/141178177-2520e8ce-6cc4-4f3c-962b-d35820c71776.png)
            <br></br>  
      - Any technical errors or debug output displayed will result in a loss of points
      <br></br>
-   [x] (11/08/2021) User will be able to see their profile
     - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://js79-prod.herokuapp.com/Project/profile.php
       - Pull Requests: https://github.com/Js791/IT202-007/pull/38
      - Screenshots
         - this screenshot shows the window of the user's profile.
         - ![Screenshot (51)](https://user-images.githubusercontent.com/90228698/141183994-b8a32381-b731-499f-84db-bd98d771ef87.png)
            <br></br>
      - Email, username, etc
      <br></br>
-   [x] (11/09/2021) User will be able to edit their profile
     - List of Evidence of Feature Completion
      - Status:Completed
      - Direct Link:https://js79-prod.herokuapp.com/Project/profile.php
       - Pull Requests:https://github.com/Js791/IT202-007/pull/38
      - Screenshots
         - Screenshots showing a password reset, a message showing a taken username/email,current password validation.
         - ![Screenshot (49)](https://user-images.githubusercontent.com/90228698/141181390-b574bbb1-9245-47c2-9976-931fe26a1946.png)
         - ![Screenshot (48)](https://user-images.githubusercontent.com/90228698/141181475-6f9a6717-b184-4100-82f8-db4c80833ac9.png)
            <br></br>
    - Changing username/email should properly check to see if it’s available before allowing the change
    - Any other fields should be properly validated
    - Allow password reset (only if the existing correct password is provided)
      - [x] Hint: logic for the password check would be similar to login
  
Milestone Features:
	Milestone 2
  - [ ] (mm/dd/yyyy of completion) User with an admin role or shop owner role will be able to add products to inventory 	
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
    - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])
    		 <br></br>
  - [ ] (mm/dd/yyyy of completion) Any user will be able to see products with visibility = true on the Shop page 	
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
    - Product list page will be public (i.e. doesn’t require login)
    - For now limit results to 10 most recent
    - User will be able to filter results by category
    - User will be able to filter results by partial matches on the name
    - User will be able to sort results by price
    <br></br>
  - [ ] (mm/dd/yyyy of completion) Admin/Shop owner will be able to see products with any visibility
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
     - This should be a separate page from Shop, but will be similar
     - This page should only be accessible to the appropriate role(s)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) Admin/Shop owner will be able to edit any product
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
     - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User must be logged in for any Cart related activity below
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to add items to Cart
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
     - <u>Cart</u> will be table-based (id, product_id, user_id, desired_quantity, unit_cost, created, modified)
     - Adding items to Cart will <strong>not</strong> affect the Product's quantity in the Products table
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to see their cart
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
     - List all the items
     - Show subtotal for each line item based on desired_quantity * unit_cost
     - Show total cart value (sum of line item subtotals)
     - Will be able to click an item to see more details (Product Details Page)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to change quantity of items in their cart
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
     - Quantity of 0 should also remove from cart
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to remove a single item from their cart via button click
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to clear their entire cart via a button click
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>

- Milestone 3
- Milestone 4
### Intructions
#### Don't delete this
1. Pick one project type
2. Create a proposal.md file in the root of your project directory of your GitHub repository
3. Copy the contents of the Google Doc into this readme file
4. Convert the list items to markdown checkboxes (apply any other markdown for organizational purposes)
5. Create a new Project Board on GitHub
   - Choose the Automated Kanban Board Template
   - For each major line item (or sub line item if applicable) create a GitHub issue
   - The title should be the line item text
   - The first comment should be the acceptance criteria (i.e., what you need to accomplish for it to be "complete")
   - Leave these in "to do" status until you start working on them
   - Assign each issue to your Project Board (the right-side panel)
   - Assign each issue to yourself (the right-side panel)
6. As you work
  1. As you work on features, create separate branches for the code in the style of Feature-ShortDescription (using the Milestone branch as the source)
  2. Add, commit, push the related file changes to this branch
  3. Add evidence to the PR (Feat to Milestone) conversation view comments showing the feature being implemented
     - Screenshot(s) of the site view (make sure they clearly show the feature)
     - Screenshot of the database data if applicable
     - Describe each screenshot to specify exactly what's being shown
     - A code snippet screenshot or reference via GitHub markdown may be used as an alternative for evidence that can't be captured on the screen
  4. Update the checklist of the proposal.md file for each feature this is completing (ideally should be 1 branch/pull request per feature, but some cases may have multiple)
    - Basically add an x to the checkbox markdown along with a date after
      - (i.e.,   - [x] (mm/dd/yy) ....) See Template above
    - Add the pull request link as a new indented line for each line item being completed
    - Attach any related issue items on the right-side panel
  5. Merge the Feature Branch into your Milestone branch (this should close the pull request and the attached issues)
    - Merge the Milestone branch into dev, then dev into prod as needed
    - Last two steps are mostly for getting it to prod for delivery of the assignment 
  7. If the attached issues don't close wait until the next step
  8. Merge the updated dev branch into your production branch via a pull request
  9. Close any related issues that didn't auto close
    - You can edit the dropdown on the issue or drag/drop it to the proper column on the project board
