SELECT product_ID,product_NAME,product_COST 
FROM products 
WHERE product_CATEGORY='Consoles';

SELECT review_CONTENT,review_STAR 
FROM reviews 
    JOIN users ON reviews.user_ID=users.user_ID 
WHERE users.user_ID="vsd2";

SELECT review_CONTENT,review_STAR 
FROM reviews,users 
WHERE reviews.user_ID=users.user_ID AND users.user_ID="vsd2";

SELECT products.product_NAME,reviews.review_CONTENT,users.user_FNAME 
FROM reviews 
    JOIN users ON users.user_ID=reviews.user_ID 
    JOIN products ON products.product_ID=reviews.product_ID 
WHERE user_FNAME="Benjamin";

SELECT DISTINCT product_ID, product_COST AS Max_unit_price_sold
FROM products
WHERE ROW(product_ID, product_COST) IN
(
    SELECT product_ID, max(product_COST) 
    FROM products 
    GROUP BY product_ID
)
ORDER BY product_ID;

SELECT DISTINCT product_ID, review_STAR AS Max_RatINg
FROM reviews
WHERE ROW(product_ID, review_STAR) IN
(
    SELECT product_ID, max(review_STAR) 
    FROM reviews 
    GROUP BY product_ID
)
ORDER BY product_ID;

SELECT DISTINCT product_ID AS "5 Star Reviewed Products" 
FROM reviews 
WHERE review_STAR = 5;

SELECT users.user_ID, user_FNAME, user_LNAME 
FROM users JOIN reviews ON reviews.user_ID = users.user_ID 
WHERE product_ID = "RW245682" AND review_STAR = 1;

SELECT users.user_ID, user_FNAME, user_LNAME, product_NAME, product_COST 
FROM users JOIN reviews ON reviews.user_ID = users.user_ID JOIN products ON products.product_ID = reviews.product_ID 
WHERE products.product_ID = "GJ343132" AND review_STAR > 1;

SELECT  review_ID, review_CONTENT, review_STAR, product_ID, user_ID 
FROM reviews 
WHERE product_ID ="GP349788" AND review_STAR = "2";

SELECT users.user_ID, user_FNAME, user_LNAME,products.product_ID, product_NAME, product_CATEGORY, product_COST 
FROM users JOIN reviews ON reviews.user_ID = users.user_ID JOIN products ON products.product_ID = reviews.product_ID 
WHERE review_STAR = 5;
