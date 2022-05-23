<?php 

/* 
-- PAGINATION --
To use pagination we'll use LIMIT and OFFSET in SQL

Get the first three books :
SELECT * FROM books LIMIT 3 OFFSET 3


Helper : 

Step 1 : 
    Decide how many elements to display on the page.

Step 2 : 
    Check if you have a URI param.
    For example : books.php?page=1

Step 3 : 
    Thanks to the page number , you can change the query
    For example, if you want to display 3 books per page :
        LIMIT 3 OFFSET 3 * currentPage

        currentPage = 1
        LIMIT 3 OFFSET 3 * (currentPage-1)

--- Buttons

Step 1: Count how many books in total

Step 2: Divide by the number of books per page
This give you the number with the one in the URL


Step 3: Compare the current page number with 1 (to check if you re on the first page) 
Compare the total number of pages with the current number (to check if you re on the last page)

URI Paramm(books.php?page=1)
*/
