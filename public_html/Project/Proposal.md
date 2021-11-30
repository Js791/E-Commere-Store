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
       - Pull Requests:
         - https://github.com/Js791/IT202-007/pull/51
         - https://github.com/Js791/IT202-007/pull/52
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
    - Pull Requests
    	- https://github.com/Js791/IT202-007/pull/53
    - Screenshots
        - This is showing successful login with username or password,also shows user being redirected to homepage with some of the user's attributes.
        - ![Screenshot (28)](https://user-images.githubusercontent.com/90228698/141036715-bc2e5e25-2bda-45cd-b67c-382a931f7909.png)
        <br></br>
	- This screenshot shows nonexistant email/username and password not matching.
	- ![Screenshot (29)](https://user-images.githubusercontent.com/90228698/141041499-13632a04-3b7c-4a9e-815a-f7ffb44f1b3c.png)
	- ![Screenshot (30)](https://user-images.githubusercontent.com/90228698/141041511-43afede0-705a-4ee5-a3d9-49cd690c2141.png)
	<br></br>
	- This screenshot shows the username/email field not wiping if a incorrect submission is submitted.
	- ![Screenshot (53)](https://user-images.githubusercontent.com/90228698/141364604-975606e7-371b-42c0-a5af-798c51aafe48.png)

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
       - Pull Requests
           - https://github.com/Js791/IT202-007/pull/53
           - https://github.com/Js791/IT202-007/pull/55
       - Screenshots
         - This photo shows the code redirecting the user back to login page.
         - ![Screenshot (32)](https://user-images.githubusercontent.com/90228698/141057967-6fae471c-9a16-475e-badc-9fa3f8296fa4.png)
         <br></br>
         - This screenshot shows a successful logout with a message.
         - ![Screenshot (35)](https://user-images.githubusercontent.com/90228698/141061847-8d6a41a6-32a2-43fa-bcd5-8f3bab9ea42c.png)
         <br></br>
     - Logging out will redirect to login page
     - User should see a message that they’ve successfully logged out
     - Session should be destroyed (so the back button doesn’t allow them access back in)
     <br></br>
-  [x] (11/08/2021) Basic Security rules implemented
     - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://js79-prod.herokuapp.com/Project/profile.php
      - Pull Requests
         - https://github.com/Js791/IT202-007/pull/56    
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
      - Pull Requests
        - https://github.com/Js791/IT202-007/pull/57
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
      - Pull Requests
        - https://github.com/Js791/IT202-007/pull/58
      - Screenshots
         - This screenshot shows the styling of the page, I will add bootstrap to this project later.
         - ![Screenshot (43)](https://user-images.githubusercontent.com/90228698/141066920-d6d897c7-e4ea-448e-a695-7f3c61ea882a.png)
     - I.e., forms/input, navigation bar, etc
  <br></br>
-   [x] (11/08/2021)Any output messages/errors should be "user friendly"
     - List of Evidence of Feature Completion
      - Status: Completed
      - Direct Link: https://js79-prod.herokuapp.com/Project/register.php
      - Pull Requests
        - https://github.com/Js791/IT202-007/pull/59
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
      - Pull Requests
        - https://github.com/Js791/IT202-007/pull/60 
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
      - Pull Requests
        - https://github.com/Js791/IT202-007/pull/61
        -  https://github.com/Js791/IT202-007/pull/62 (this pull request is all the files in my project in case I missed any file due to reworking branches)
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
  - [x] (11/28/2021) User with an admin role or shop owner role will be able to add products to inventory 	
    - List of Evidence of Feature Completion
    - Status:Completed
    - Direct Link: https://js79-prod.herokuapp.com/Project/addProduct.php
    - Pull Requests
       - https://github.com/Js791/IT202-007/pull/69
    - Screenshots
       - Screenshots showing various validations along with product entry 	
       - ![Screenshot (87)](https://user-images.githubusercontent.com/90228698/143811628-ae6cccbc-5c56-40c8-a0de-0378877e010f.png)
       - ![Screenshot (86)](https://user-images.githubusercontent.com/90228698/143811748-7735f2b6-150a-41be-bd62-5e6a36bde085.png)
       - ![Screenshot (88)](https://user-images.githubusercontent.com/90228698/143811826-a0582bbf-a2f5-48ed-a906-56ef662b9b4d.png) 
     <br></br>
    - Table should be called Products (id, name, description, category, stock, created, modified, unit_price, visibility [true, false])
    		 <br></br>
  - [x] (11/29/2021) Any user will be able to see products with visibility = true on the Shop page 	
    - List of Evidence of Feature Completion
    - Status:Completed
    - Direct Link: https://js79-prod.herokuapp.com/Project/shop.php
    - Pull Requests
       - https://github.com/Js791/IT202-007/pull/70
    - Screenshots
       - Screenshots showing the shop section of website, along with some items being viewed regardless if logged in or not, also some filtering/sorting capabilities
       - ![Screenshot (99)](https://user-images.githubusercontent.com/90228698/143982936-c6adb5fd-06ee-4697-bc4c-3c7772ab5f4e.png)
       - ![Screenshot (100)](https://user-images.githubusercontent.com/90228698/143982972-43088f3f-d346-4935-98a2-4e811e35e8cd.png)
       - ![Screenshot (101)](https://user-images.githubusercontent.com/90228698/143982997-d196c226-a1c6-411c-b00a-743851d4e976.png)
     <br></br>
    - Product list page will be public (i.e. doesn’t require login)
    - For now limit results to 10 most recent!
    - User will be able to filter results by category
    - User will be able to filter results by partial matches on the name
    - User will be able to sort results by price
    <br></br>
  - [ ] (11/29/2021) Admin/Shop owner will be able to see products with any visibility
    - List of Evidence of Feature Completion
    - Status:Completed
    - Direct Link: https://js79-prod.herokuapp.com/Project/admin/list_items.php
    - Pull Requests
       - https://github.com/Js791/IT202-007/pull/71
    - Screenshots
       - These screenshots show a new list products page, along with a screenshot showing admin vs regular user, also showing the varying visibilities in the products.
       - ![Screenshot (103)](https://user-images.githubusercontent.com/90228698/143988340-cf53d4eb-17d9-44c6-a89b-9bd278b6e30b.png)
       - ![Screenshot (104)](https://user-images.githubusercontent.com/90228698/143988367-073ac994-dfcf-41e8-af25-d7d3165d2ae6.png)
       - ![Screenshot (105)](https://user-images.githubusercontent.com/90228698/143988393-f67456f9-fbd4-4ecc-a018-cd70ffd03583.png)
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

Milestone Features:
	Milestone 3
 - [ ] (mm/dd/yyyy of completion) User will be able to purchase items in their Cart 	
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
    - Create an Orders table (id, user_id, created, total_price, address, payment_method)
      - [ ] Payment method will simply record (Cash, Visa, MasterCard, Amex, etc) We will not be recording CC numbers or anything of that nature, this is just a sample and in real world projects you’d commonly use a third party payment processor
      - [ ] Hint: This must be inserted first before you can insert into the OrderItems table
      <br></br>  
    - Create an OrderItems table (id, order_id, product_id, quantity, unit_price)
      - [ ] Hint: This is basically a copy of the data from the Cart table, just persisted as a purchase
      <br></br>
    - Checkout Form
        - [ ] Ask for payment method (Cash, Visa, MasterCard, Amex, etc)
        - [ ] Do not ask for credit card number, this is just a sample
        - [ ] Ask for a numerical value to be entered (this will be a fake payment check to compare against the cart total to determine if the payment succeeds)
        - [ ] Ask for Address/shipping information
      <br></br>
    - User will be asked for their Address for shipping purposes
      - [ ] Address form should validate correctly
        - Use this as a rough guide (likely you’ll want to prefill some of the data you already have about the user)
     <br></br>
     - Order process:
       - [ ] Calculate Cart Items
       - [ ] Verify the current product price against the Products table
         -  Since our Cart is table based it can be long lived so if a user added a Product at a sale and they attempt to purchase afterwards, it should pull the true Product cost.
         -  You can also show the Cart.unit_price vs Product.unit_price to show a sale or an increase in price
       <br></br>
       - [ ] Verify desired product and desired quantity are still available in the Products table
           - Users can’t purchase more than what’s in stock
           - Show an error message and prevent order from going through if something isn’t available
           - Let the user update their cart and try again
           - Clearly show what the issue is (which product isn’t available, how much quantity is available if the cart exceeds it)
       <br></br>
       - [ ] Make an entry into the Orders table
       - [ ] Get last Order ID from Orders table
       - [ ] Copy the cart details into the OrderItems tables with the Order ID from the previous step
       - [ ] Update the Products table Stock for each item to deduct the Ordered Quantity
       - [ ] Clear out the user’s cart after successful order
       - [ ] Redirect user to Order Confirmation Page
       <br></br>
 - [ ] (mm/dd/yyyy of completion) Order Confirmation Page 	
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
    - Show the entire order details from the Order and OrderItems table (similar to cart)
    - Displays a Thank you message
    <br></br>
 - [ ] (mm/dd/yyyy of completion) User will be able to see their Purchase History	
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
    - For now limit to 10 most recent orders
    - A list item can be clicked to view the full details in the Order Details Page (similar to Order Confirmation Page except no “Thank you” message)
    <br></br>
 - [ ] (mm/dd/yyyy of completion) Store Owner will be able to see all Purchase History	
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
    - For now limit to 10 most recent orders
    - A list item can be clicked to view the full details in the Order Details Page (similar to Order Confirmation Page except no “Thank you” message)
    <br></br> 
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
