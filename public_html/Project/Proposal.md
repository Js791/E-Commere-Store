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
  - [x] (11/30/2021) Admin/Shop owner will be able to edit any product
    - List of Evidence of Feature Completion
    - Status:Completed 
    - Direct Link: https://js79-prod.herokuapp.com/Project/admin/edit_items.php?id=1
    - Pull Requests
       - https://github.com/Js791/IT202-007/pull/73
    - Screenshots
       - Screenshots showing a hidden admin page of edit products,and some added edit buttons to admin, along a comparison user vs admin photo
       - ![Screenshot (110)](https://user-images.githubusercontent.com/90228698/144134754-43d7d816-eb11-4ca2-b3bb-347c92114b92.png)
       - ![Screenshot (111)](https://user-images.githubusercontent.com/90228698/144134808-1983e2bf-69a4-4e82-bad8-9d0702e7d50e.png)
       - ![Screenshot (112)](https://user-images.githubusercontent.com/90228698/144134821-0261a736-b42b-41a3-85a6-49eddfb8f269.png)
     <br></br>
     - Edit button should be accessible for the appropriate role(s) anywhere a product is shown (Shop list, Product Details Page, etc)
     <br></br>
  - [x] (11/30/2021) User will be able to click an item from a list and view a full page with more info about the item (Product Details Page)
    - List of Evidence of Feature Completion
    - Status:Completed
    - Direct Link: https://js79-prod.herokuapp.com/Project/shop.php
    - Pull Requests
       - https://github.com/Js791/IT202-007/pull/74
    - Screenshots
       - Screenshots showing product details clickable photo to be redirected to product details page for admin or user, admin can edit on this page.
       - ![Screenshot (116)](https://user-images.githubusercontent.com/90228698/144147375-18c79784-b93d-41b9-a5f9-51f708f666c9.png)
       - ![Screenshot (117)](https://user-images.githubusercontent.com/90228698/144147383-1d2077a0-fbda-401a-87ce-510aa969a41b.png)
       - ![Screenshot (118)](https://user-images.githubusercontent.com/90228698/144147394-37f1ebd4-c9b4-4a87-9438-00040e395938.png)
     <br></br>
  - [x] (11/30/2021) User must be logged in for any Cart related activity below
    - List of Evidence of Feature Completion
    - Status:Completed
    - Direct Link: (Direct link to the file or files in heroku prod for quick testing (even if it's a protected page))
    - Pull Requests
       - https://github.com/Js791/IT202-007/pull/75
    - Screenshots
       - Screenshot #1 (paste the image so it uploads to github) (repeat as necessary)
     <br></br>
  - [ ] (mm/dd/yyyy of completion) User will be able to add items to Cart
    - List of Evidence of Feature Completion
    - Status: Pending (Completed, Partially working, Incomplete, Pending)
    - Direct Link: https://js79-prod.herokuapp.com/Project/login.php
    - Pull Requests
       - PR link #1 (repeat as necessary)
    - Screenshots
       - All screenshots will be below.
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
	
<table>
<tr><td>milestone 3</td></tr><tr><td>
<table>
<tr><td>F1 - User will be able to purchase items in their Cart (2021-12-10)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/cart.php](https://js79-prod.herokuapp.com/Project/cart.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/82](https://github.com/Js791/IT202-007/pull/82)</p><p>

 [https://github.com/Js791/IT202-007/pull/89](https://github.com/Js791/IT202-007/pull/89)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - Create an Orders table (id, user_id, created, total_price, address, payment_method)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145724934-634f2184-d702-46ac-a27a-afbcb282f785.png">
<p>a screenshot showing orders table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Create an OrderItems table (id, order_id, product_id, quantity, unit_price)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145724968-418adbc8-7491-44ff-b889-6dc76125ce59.png">
<p>a screenshot showing order items table.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Checkout Form</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145725022-f9040a1f-d518-43bb-af26-ce7686dd6041.png">
<p>a screenshot showing a form in which the user is redirected to checkout form when the checkout button is clicked on the cart page.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - User will be asked for their Address for shipping purposes</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145725022-f9040a1f-d518-43bb-af26-ce7686dd6041.png">
<p>the same screenshot as before since all shipping information is asked for right after the checkout button is clicked, eventually leading to purchase history page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F1 - Order process:</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145725378-2cc9f62c-aeb4-4093-96c8-c3d1a5be773d.png">
<p>verification that the price in the products table is consistent with the price in our cart</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145725379-a267bd1d-7f4a-404c-83b5-32e14bce3b7a.png">
<p>verification that the price in the products table is consistent with the price in our cart</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145725381-e824e5cc-20f3-47be-951f-e2df4f8ed862.png">
<p>verification that the price in the products table is consistent with the price in our cart</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145725522-aa55d9bd-c55c-40ce-8de5-4e8123ec71b8.png">
<p>verification that the stock in the products table is consistent with the desired quantity in our cart, the query that made this possible is the same as the query from the screenshots above</p>
</td></tr>

<tr><td>
<img width="768px" src=" ![Screenshot](https://user-images.githubusercontent.com/90228698/145726930-deb11cf6-6a7a-483b-84ac-3fe16e208982.pn">
<p>a screenshot showing what happens if the user selects a quantity that stock cannot supply, does not submit checkout form and allows user to return to cart to update the quantity all done with a message</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145727720-ead31ce5-e674-471e-aaa0-677f8ed29ba7.png">
<p>evidence of code showing:
Make an entry into the Orders table
Get last Order ID from the Orders table
Copy the cart details into the OrderItems tables with the Order ID from the previous step
Update the Products table Stock for each item to deduct the Ordered Quantity
Clear out the user’s cart after successful order
Redirect user to Order Confirmation Page
</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145727719-5ceb9253-958c-40bf-ab59-96b62980c54c.png">
<p>evidence of code showing:
Make an entry into the Orders table
Get last Order ID from the Orders table
Copy the cart details into the OrderItems tables with the Order ID from the previous step
Update the Products table Stock for each item to deduct the Ordered Quantity
Clear out the user’s cart after successful order
Redirect user to Order Confirmation Page</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145727721-7d848d77-e3d5-4247-9a62-e3ca2673f9e8.png">
<p>evidence of code showing:
Make an entry into the Orders table
Get last Order ID from the Orders table
Copy the cart details into the OrderItems tables with the Order ID from the previous step
Update the Products table Stock for each item to deduct the Ordered Quantity
Clear out the user’s cart after successful order
Redirect user to Order Confirmation Page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - Order Confirmation Page (2021-12-11)</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/order_confirmation.php](https://js79-prod.herokuapp.com/Project/order_confirmation.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/83/files](https://github.com/Js791/IT202-007/pull/83/files)</p><p>

 [https://github.com/Js791/IT202-007/pull/90/files](https://github.com/Js791/IT202-007/pull/90/files)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Show the entire order details from the Order and OrderItems table (similar to cart)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145727876-16959f40-9bbd-470f-aa17-8972b88841df.png">
<p>invoice and thank you message with all details from order items and orders table</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Displays a Thank you message</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145727876-16959f40-9bbd-470f-aa17-8972b88841df.png">
<p>thank you message</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User will be able to see their Purchase History ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/purchase_history.php](https://js79-prod.herokuapp.com/Project/purchase_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/85/files](https://github.com/Js791/IT202-007/pull/85/files)</p><p>

 [https://github.com/Js791/IT202-007/pull/90/files](https://github.com/Js791/IT202-007/pull/90/files)</p><p>

 [https://github.com/Js791/IT202-007/pull/92/files](https://github.com/Js791/IT202-007/pull/92/files)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - For now limit to 10 most recent orders</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145728190-e4735a5e-92b9-42d9-9791-c6d767290077.png">
<p>user side shows only user's purchase history, and limit is set to 10 according to code, query couldn't be fully shown there are 2 1 for user's view 1 for admin view</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - A list item can be clicked to view the full details in the Order Details Page (similar to Order Confirmation Page except no “Thank you” message)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145728136-d7c08257-e0e6-4fd2-8890-058765fe288b.png">
<p>user side shows only user's purchase history</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Store Owner will be able to see all Purchase History ()</td></tr>
<tr><td>Status: pending</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/purchase_history.php](https://js79-prod.herokuapp.com/Project/purchase_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/85/files](https://github.com/Js791/IT202-007/pull/85/files)</p><p>

 [https://github.com/Js791/IT202-007/pull/90/files](https://github.com/Js791/IT202-007/pull/90/files)</p><p>

 [https://github.com/Js791/IT202-007/pull/92/files](https://github.com/Js791/IT202-007/pull/92/files)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - For now limit to 10 most recent orders</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145728190-e4735a5e-92b9-42d9-9791-c6d767290077.png">
<p>2 queries depending on who is logged in will get varying results, as for admin it will show all purchases on the e-commerce store.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - A list item can be clicked to view the full details in the Order Details Page (similar to Order Confirmation Page except no “Thank you” message)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/808080/ffffff?text=pending"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/145728324-4a6809ef-553e-4def-b6d5-a52e76572bdb.png">
<p>admin view of all purchases made on store.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>

- Milestone 4


<table>
<tr><td>milestone 4</td></tr><tr><td>
<table>
<tr><td>F1 - User can set their profile to be public or private (will need another column in Users table) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/product_details.php?id=1](https://js79-prod.herokuapp.com/Project/product_details.php?id=1)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/94](https://github.com/Js791/IT202-007/pull/94)</p></td></tr>
<tr><td>
<table>
<tr><td>F1 - If public, hide email address from other users</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147042845-816100c1-be77-473f-81d4-d1df0691544a.png">
<p>this screenshot shows if a user is public it will only display the username and when they joined</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147043096-c8141d56-cff2-4de9-906c-7044e983a931.png">
<p>this screenshot shows if they are private</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147043202-be31cff2-b11e-4153-b71c-b840a34f6af2.png">
<p>this is a generic view of one's own profile</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F2 - User will be able to rate a product they purchased ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/product_details.php?id=1&page=2](https://js79-prod.herokuapp.com/Project/product_details.php?id=1&page=2)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/95](https://github.com/Js791/IT202-007/pull/95)</p></td></tr>
<tr><td>
<table>
<tr><td>F2 - Create table called Ratings (id, product_id, user_id, rating, comment, created)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147043509-1756eadc-4dd5-4a66-96cb-8fb1e223fd45.png">
<p>a table called ratings</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - 1-5 rating</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147043587-ab06a1e7-1a16-474a-8eac-bf5791b7cbee.png">
<p>a dropdown allowing a 1-5 rating</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Text Comment (use TEXT data type in sql)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147043725-f7e53c06-30ff-4766-8848-a6b83115ad60.png">
<p>a table with TEXT</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Must be done on the Product Details Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147043809-23537071-206a-409e-a475-1a09a555f8d7.png">
<p>all work done on the product details page</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Ratings and Rating Comments will be visible on the Product Details page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="![Screenshot](https://user-images.githubusercontent.com/90228698/147043938-953aef80-4ff4-4842-97f6-235af3baad66.png">
<p>Show the latest 10 reviews, not fully shown in this photo more in next photo</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147044006-1ab43390-89ce-4a4b-abd8-f2ab574727af.png">
<p>Paginate anything beyond 10</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F2 - Show the average rating on the Product Details Page</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147044161-84bca8da-3edd-4e41-aad9-7966fe237e95.png">
<p>average rating shown up top</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F3 - User’s Purchase History Changes ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/purchase_history.php](https://js79-prod.herokuapp.com/Project/purchase_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/95](https://github.com/Js791/IT202-007/pull/95)</p></td></tr>
<tr><td>
<table>
<tr><td>F3 - Filter by date range</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147044547-c8997c57-692c-41d1-8db0-b9f0e045375e.png">
<p>This one I could not get to work I tried getting from the Orders table to get the dates and then use filtering, I had a hard time understanding how to actually implement a range using between then getting the correct interval.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Filter by category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147044898-b077380c-d900-4fa0-b94c-d7659aa27b5f.png">
<p>filtering by category shown in screenshot before when household is selected</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147044893-d9d87702-a1c1-4088-890b-8330ec250b1f.png">
<p>filtering by category in screenshot after when towel is selected
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Sort by total, date purchased, etc</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147045410-58db637c-3957-433a-bc6e-6225e9b9f649.png">
<p>some sorting capabilities first one before low to high by total order items</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147045550-5ab818df-5c68-4c5d-9ee8-21aa646de210.png">
<p>then showing high to low by the total number of items</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F3 - Add pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147045802-d45c50a8-56b3-469d-897e-b552c9acccb3.png">
<p>Any filter/sort applied must be followed during the pagination process, I was not able to get this one to work the queries weren't working as expected resulting in a lot of difficulty attempting to get the pages to paginate, the code logic is there but the pagination does not work.
</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F4 - Store Owner Purchase History Changes ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/purchase_history.php](https://js79-prod.herokuapp.com/Project/purchase_history.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/97/files](https://github.com/Js791/IT202-007/pull/97/files)</p></td></tr>
<tr><td>
<table>
<tr><td>F4 - Filter by Date Range</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147046306-8e44b113-6bf8-45ec-8922-a5a89d4542ce.png">
<p>I was not able to get this one to work with pagination, also pagination messed up some of my code, ultimately couldn't determine how to fix.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Filter by Category</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147046414-ca564e21-e896-4a34-9078-986bab14270a.png">
<p>filter by category before</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147046419-2bbdbf2b-cb2b-4b3f-addd-8f7a7462533c.png">
<p>filter by category after</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Sort by total, date purchased, etc</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147047574-820782d5-ff9c-455a-be91-09d41c741ef1.png">
<p>some sorting capabilities I will show high to low sort by total items</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147047613-10596121-a328-421c-aee9-36b307d6e597.png">
<p>sort by total items low to high</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - Add pagination</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147047807-f5359f6a-b93d-401e-bf1e-d2e55ad64e99.png">
<p>Any filter/sort applied must be followed during the pagination process
I was not able to paginate this correctly similarly to before incomplete parts, code logic is there but doesn't function properly.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F4 - The result page should show the accurate total price of the combined search results (i.e., if just 3 records show each of $25, it should show $75 total for this view)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147048042-eb9d20a1-a549-4732-9085-adb3e02eb5e3.png">
<p>this one is partially completed as it does get different overall amounts,this is one amount.</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147048085-b2e4aca7-18e6-46c5-b87a-a402ba768688.png">
<p>this is another amount.</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F5 - Add pagination to Shop Page (and any other product lists not yet mentioned) ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/admin/list_items.php?itemName=&stock=](https://js79-prod.herokuapp.com/Project/admin/list_items.php?itemName=&stock=)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/98](https://github.com/Js791/IT202-007/pull/98)</p></td></tr>
<tr><td>
<table>
<tr><td>F5 - proof of pagination of list items for products</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147048693-34fb46cc-c7de-4b74-b42a-45f658b2c046.png">
<p>this is proof for list items, showing the pagination</p>
</td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147048700-5110acd0-a252-430e-ad63-5314182d8f14.png">
<p>another page of list items</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F6 - Store Owner will be able to see all products out of stock ()</td></tr>
<tr><td>Status: complete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/admin/list_items.php?itemName=test&stock=0](https://js79-prod.herokuapp.com/Project/admin/list_items.php?itemName=test&stock=0)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/99/files](https://github.com/Js791/IT202-007/pull/99/files)</p></td></tr>
<tr><td>
<table>
<tr><td>F6 - This will be added as a filter to their product list page from Milestone 2</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147049130-1c4b8765-23d5-410c-a578-c0f50b97cf4f.png">
<p>a page showing item name/category filter along with a stock filter for admin</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - Pagination should account for this new filter</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147049488-37b436b4-65bf-43d9-b2c3-3da0af846d4d.png">
<p>paginated filter for stock</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<tr><td>
<table>
<tr><td>F6 - Recommended to have the filter applied as a given value (i.e., where quantity is <= value)</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/009955/fff?text=completed"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147049443-de7b8024-1abe-46fb-bd24-d26ad23bca49.png">
<p>a zero stock filter pulling the item up</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr>
<table>
<tr><td>F7 - User can sort products by average rating on the Shop Page ()</td></tr>
<tr><td>Status: incomplete</td></tr>
<tr><td>Links:<p>

 [https://js79-prod.herokuapp.com/Project/shop.php](https://js79-prod.herokuapp.com/Project/shop.php)</p></td></tr>
<tr><td>PRs:<p>

 [https://github.com/Js791/IT202-007/pull/100](https://github.com/Js791/IT202-007/pull/100)</p></td></tr>
<tr><td>
<table>
<tr><td>F7 - Hint: may want to add an “average rating” field to the Products table and update this value any time a new rating is given for the product</td></tr>
<tr><td>Status: 
<img width="100" height="20" src="https://via.placeholder.com/400x120/ff0000/000000?text=incomplete"></td></tr>

<tr><td>
<img width="768px" src="https://user-images.githubusercontent.com/90228698/147049635-ca7080f5-e116-4ee3-8569-0a54f40a30cc.png">
<p>I was not able to implement this my pagination for the shop page wasn't working, so I was not able to use get and make a query to get from the ratings table to insert and update into products table to be able to sort by average rating</p>
</td></tr>

</td>
</tr>
</table>
</td>
</tr></td></tr></table>

















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
