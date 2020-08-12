SELECT floor_number, SUM(nb_seats) AS 'seats' FROM cinema GROUP BY floor_number ORDER BY SUM(nb_seats) DESC; 
