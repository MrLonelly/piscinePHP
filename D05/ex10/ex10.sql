SELECT film.title as 'Title', film.summary as 'Summary', film.prod_year FROM film INNER JOIN genre ON film.id_genre=genre.id_genre WHERE genre.name LIKE 'erotic' ORDER BY (film.prod_year) DESC; 
